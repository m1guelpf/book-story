<amp-story-page id="{{ $section['id'] }}">
	<amp-story-grid-layer template="fill">
		<div style="display: flex;align-items: center; justify-content: center;">
			<div animate-in="pulse" animate-in-delay="0.3s" animate-in-duration="1s" style="background: #fdd6c5;margin: 0 .5rem;">
				<p style="line-height: 1.8;text-align: center;padding:1rem;font-weight:500;color:#bf2200;">{!! $section['contents'] !!}</p>
			</div>
		</div>
	</amp-story-grid-layer>
	<amp-story-grid-layer template="vertical">
		<p animate-in="fly-in-top" style="text-align:center;font-weight:500;font-size:1.5rem;color:#bf2200;letter-spacing: .2rem;">ADVICE</p>
	</amp-story-grid-layer>
</amp-story-page>