<amp-story-page id="{{ $section['id'] }}">
	<amp-story-grid-layer template="fill">
		<amp-img src="assets/section-bg.svg" width="720" height="1280" layout="responsive">
		</amp-img>
	</amp-story-grid-layer>
	<amp-story-grid-layer template="fill">
		<div style="display:flex;align-items: center;justify-content: center;">
			<h2 animate-in="pulse" animate-in-duration="1.3s" style="color:#b12f06;font-weight:600;font-size:2rem;text-transform: uppercase;padding:0 1rem;text-align:center;">{{ $section['title'] }}</h2>
		</div>
	</amp-story-grid-layer>
</amp-story-page>