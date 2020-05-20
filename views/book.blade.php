<!doctype html>
<html ⚡ lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta name="description" content="An original book-reading experience powered by AMP Stories">
	<link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
	<link rel="preload" as="script" href="https://cdn.ampproject.org/v0/amp-story-1.0.js">
	<link rel="preconnect dns-prefetch" href="https://fonts.gstatic.com/" crossorigin>
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
	<!-- Import other AMP Extensions here -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
	<style amp-custom>
		body {
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		amp-story-page {
			background: #f3efee
		}

		p, li, h2 {
			font-family: Rubik, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		}
	</style>
	<style amp-boilerplate>
		body {
			-webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
			-moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
			-ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
			animation: -amp-start 8s steps(1, end) 0s 1 normal both
		}

		@-webkit-keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}

		@-moz-keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}

		@-ms-keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}

		@-o-keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}

		@keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}
	</style>
	<noscript>
		<style amp-boilerplate>
			body {
				-webkit-animation: none;
				-moz-animation: none;
				-ms-animation: none;
				animation: none
			}
		</style>
	</noscript>
	<link rel="canonical" href=".">
	<title>AMP Book - Miguel Piedrafita</title>
</head>

<body>
	<amp-story standalone publisher="Gal Shir" title="View Insignts" publisher-logo-src="logo.png" poster-portrait-src="poster-portrait.png">
		<amp-story-page id="cover" style="background: #fdd9c9">
			<amp-story-grid-layer template="vertical">
				<p style="font-weight: 500;font-size:1.5rem;text-align:center;" animate-in="whoosh-in-left">Miguel Piedrafita</p>
				<h1 style="font-size: 6rem;margin-top:2rem;text-align:center;" animate-in="whoosh-in-left" animate-in-delay="0.3s">AMP Book</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds">
				<p grid-area="lower-third" animate-in="fly-in-bottom" animate-in-delay="0.6s" style="display:flex;align-items:center;font-weight: 500;text-transform: uppercase;letter-spacing: 3px;text-align: center;">Building a new book reading experience with AMP Stories.</p>
			</amp-story-grid-layer>
		</amp-story-page>
		<amp-story-page id="toc">
			<amp-story-grid-layer template="vertical">
				<p style="font-weight: 600;font-size: 1.5rem;" animate-in="fly-in-top">Table of Contents</p>
				<ul style="border-left: #fdd6c5 5px solid;list-style: none;padding-left: 1rem;">
					<li style="padding-top: .5rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Chapter 1</li>
					<li style="padding-top: 1rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Chapter 2</li>
					<li style="padding-top: 1rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Chapter 4</li>
					<li style="padding-top: 1rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Wait, where did Chapter 3 go?</li>
					<li style="padding-top: 1rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Chapter 3</li>
					<li style="padding-top: 1rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Oh, there it is!</li>
					<li style="padding-top: 1rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Roko's Basilisk</li>
					<li style="padding-top: 1rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Chapter 3.141592</li>
					<li style="padding-top: 1rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.2s">Honestly why are you bothering to read this</li>
					<li style="padding-top: 1rem;padding-bottom: .5rem;font-weight: 500;font-size: 1.2rem;" animate-in="whoosh-in-right" animate-in-delay="0.3s">About the author</li>
				</ul>
			</amp-story-grid-layer>
		</amp-story-page>
		@foreach ($bookData as $section)
			@include('partials.'.$section['type'], $section)
		@endforeach
		<amp-story-page id="author-1">
			<amp-story-grid-layer template="vertical">
				<div style="display:flex;align-items:center;justify-content:center;">
					<div style="width: 45%">
						<amp-img src="https://twitter-avatar.now.sh/m1guelpf" style="border-radius:100px;" width="300" height="300" layout="responsive"></amp-img>
					</div>
				</div>
				<p style="font-weight: 600;font-size: 1.5rem;text-align:center;">About the Author</p>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="fill">
				<div style="padding: 0 1rem;display: flex;align-items: center; justify-content: center;">
					<p style="margin-top: 5rem;line-height: 1.8;text-align: justify;">I hand-crafted this cool about the author page to show the avatar and title on all pages. Well, technically I hand-crafted all templates, but this one is written directly on the HTML instead of on the book data. No reason for this other than lazyness, honestly.</p>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>
		<amp-story-page id="author-2">
			<amp-story-grid-layer template="vertical">
				<div style="display:flex;align-items:center;justify-content:center;">
					<div style="width: 45%">
						<amp-img src="https://twitter-avatar.now.sh/m1guelpf" style="border-radius:100px;" width="300" height="300" layout="responsive"></amp-img>
					</div>
				</div>
				<p style="font-weight: 600;font-size: 1.5rem;text-align:center;">About the Author</p>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="fill">
				<div style="padding: 0 1rem;display: flex;align-items: center; justify-content: center;">
					<p style="margin-top: 8.5rem;line-height: 1.8;text-align: justify;">You can have as many of these as you want. You could also extract this to be generated from data like I should have done, but hey, what works works. No one's gonna know how each part is generated by looking at the final product anyways. Well unless you look up the source on GitHub, but you've probably seen worse in there.</p>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>
		<amp-story-page id="author-3">
			<amp-story-grid-layer template="vertical">
				<div style="display:flex;align-items:center;justify-content:center;">
					<div style="width: 45%">
						<amp-img src="https://twitter-avatar.now.sh/m1guelpf" style="border-radius:100px;" width="300" height="300" layout="responsive"></amp-img>
					</div>
				</div>
				<p style="font-weight: 600;font-size: 1.5rem;text-align:center;">About the Author</p>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="fill">
				<div style="padding: 0 1rem;display: flex;align-items: center; justify-content: center;">
					<p style="margin-top: 7rem;line-height: 1.8;text-align: justify;">Anyways, since you're here you might as well learn something about me. I'm either 18 or forgot to update this when I stopped being 18. I'll probably be 18 for a while, but if everything works as expected at some point I'll stop being 18. Or maybe not, I don't really have any proof for it, only expectations.</p>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>
		<amp-story-page id="author-4">
			<amp-story-grid-layer template="vertical">
				<div style="display:flex;align-items:center;justify-content:center;">
					<div style="width: 45%">
						<amp-img src="https://twitter-avatar.now.sh/m1guelpf" style="border-radius:100px;" width="300" height="300" layout="responsive"></amp-img>
					</div>
				</div>
				<p style="font-weight: 600;font-size: 1.5rem;text-align:center;">About the Author</p>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="fill">
				<div style="padding: 0 1rem;display: flex;align-items: center; justify-content: center;">
					<p style="margin-top: 7rem;line-height: 1.8;text-align: justify;"> In fact, if you think about it, age is just something that exists in our minds, like numbers. Did you ever see a three in nature? I didn't think so. Maybe you saw three trees, or a three-shaped tree, but a three? Only in your mind. Maybe in mine too, maybe not. Solipsism is fun. But I digress.</p>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>
		<amp-story-page id="author-5">
			<amp-story-grid-layer template="vertical">
				<div style="display:flex;align-items:center;justify-content:center;">
					<div style="width: 45%">
						<amp-img src="https://twitter-avatar.now.sh/m1guelpf" style="border-radius:100px;" width="300" height="300" layout="responsive"></amp-img>
					</div>
				</div>
				<p style="font-weight: 600;font-size: 1.5rem;text-align:center;">About the Author</p>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="fill">
				<div style="padding: 0 1rem;display: flex;align-items: center; justify-content: center;">
					<p style="margin-top: 12rem;line-height: 1.8;text-align: justify;">Hi! I'm Miguel Piedrafita, a $number-year-old maker. What have I made, you ask? Well, I made this thing you're staring at. No, not your screen, the thing displayed in it. I also made some more apps that are sometimes useful to developers but also incredibly difficult to explain to your parents or your friends. Normies, heh. Anyway, learn more about me and my projects <a href="https://miguelpiedrafita.com" target="_blank">on my website</a>. Or don't. I will never know.</p>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>
		<amp-story-bookend src="bookend.json" layout=nodisplay></amp-story-bookend>
	</amp-story>
</body>

</html>