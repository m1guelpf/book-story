<?php

require_once 'vendor/autoload.php';

use Illuminate\Support\Str;
use Illuminate\View\Factory;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\View\FileViewFinder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Compilers\BladeCompiler;

// Configuration
// Note that you can set several directories where your templates are located
$pathsToTemplates = [__DIR__ . '/views'];
$pathToCompiledTemplates = __DIR__ . '/compiled';

// Dependencies
$filesystem = new Filesystem;
$eventDispatcher = new Dispatcher(new Container);

// Create View Factory capable of rendering PHP and Blade templates
$viewResolver = new EngineResolver;
$bladeCompiler = new BladeCompiler($filesystem, $pathToCompiledTemplates);

$viewResolver->register('blade', fn () => new CompilerEngine($bladeCompiler));
$viewResolver->register('php', fn () => new PhpEngine);

$viewFinder = new FileViewFinder($filesystem, $pathsToTemplates);
$viewFactory = new Factory($viewResolver, $viewFinder, $eventDispatcher);

$bookData = collect(require_once('./demo.php'))->map(function ($chapter) {
    if (is_string($chapter)) {
        return [
            [
                'id' => Str::slug($chapter),
                'type' => 'section',
                'title' => $chapter,
            ]
        ];
    }

    return collect($chapter)->flatten(1)->map(fn ($section) => [
        'id' => Str::slug(Str::words(
            $contents = is_string($section) ? $section : $section[0],
            10,
            ''
        )),
        'type' => is_string($section) ? 'paragraph' : $section['type'],
        'contents' => $contents,
    ])->toArray();
})->flatten(1);

// Render template with book.blade.php
echo $viewFactory->make('book', compact('bookData'))->render();
