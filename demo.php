<?php

return [
    'Welcome to the Demo', // Chapter title
    [ // Section Contents
        [ // Page Contents
            "Let me tell you a story. I've rewritten the text here around three times now. First one was the actual contents of <a href='https://galshir.com/viewinsights' target='_blank'>the book I made this for</a>, which btw is really good and you should totally read. Second was when making some placeholder text to show how the format worked to Twitter (did I mention I <a href='https://twitter.com/m1guelpf/status/1263071192929402880' target='_blank'>tweeted the whole process of building this</a>?). Anyway, I was polishing everything up to open-source it, and decided that writing this again was the best possible use of my time. I miss school.",
            ['type' => 'advice', 'Please make a wiser use of your time'],
            "I'm supposed to showcase the functionality of this thing here, but I'm not clever enough to come up with a clever excuse to do it. What can you do, you say? It's HTML, so basically anything. Wanna bold some text? Throw a <code>&lt;b&gt;</code> tag and you're set. Italics? <code>&lt;i&gt;</code> is your friend. Wouldn't this be much better if you used markdown instead? I literally hacked this together in like three hours, and I'm using echo to render it to the browser, you really think Markdown is the first thing I'd refactor? You're probably right actually, but don't tell anyone.",
        ], [ // This is the second page
            ['type' => 'title', "This is a title. Its boooooold and black, but not as bold as chapter titles."],
            "I'm honestly pretty sure no one's gonna bother to read this far, and if you're doing it then you probably should be doing something else instead. Maybe, instead of reading my pathetic excuse for some copy, you could brighten someone's day by telling them how much they mean to you. But no, you're still here. Good job. I feel like I could fill this with a bunch of Lorem Ipslum and you'd read it anyways.",
            ['type' => 'quote', "Go away"],
            "Oh, and by the way, if you're reading this from your desktop you should probably... not do that. I was in a hurry, so instead of doing some sensible responsible layout I hacked together something that hold itself together with some hardcoded margins. Maybe if you turned however that thing to simulate you're browsing from a phone on DevTools is called it would look better. Maybe not. I'm lost without Tailwind, okay?",
        ]
    ],
    'Okay bye'
];
