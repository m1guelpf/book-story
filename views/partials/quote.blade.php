<amp-story-page id="{{ $section['id'] }}">
	<amp-story-grid-layer template="fill">
		<div style="display: flex;align-items: center; justify-content: center;">
			<div animate-in="pulse" animate-in-duration="0.8s" style="border-left: #fdd6c5 5px solid;border-right: #fdd6c5 5px solid;margin:0 -1rem;">
				<p style="line-height: 1.8;text-align: center;padding:0 1rem;font-weight:500;">{!! $section['contents'] !!}</p>
			</div>
		</div>
	</amp-story-grid-layer>
</amp-story-page>