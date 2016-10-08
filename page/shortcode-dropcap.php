		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Dropcap','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Header -->
					<h5>Sample Dropcap I</h5>
					
					<!-- Section -->
					<div data-id="section-1">
<!-- Dropcap -->
<p class="template-component-dropcap template-component-dropcap-style-1">
	<span>P</span>roin nunc elit aliquet vel lacus eget tristique cursus quam. Sed pulvinar orci enila ac molestie nisi mollis luctus. Nullam porttitor at tortor vitae dignissim. Phasellul id libero rhoncus neque condimentum vehicula ut a orci nullam convallis.
</p>
					</div>
					
					<!-- Preformatted text -->
					<div class="template-component-preformatted-text" data-id-rel="section-1">
						<a href="#">
							<span>Click to show code</span>
							<span>Click to hide code</span>
						</a>
						<pre></pre>
					</div>

					<!-- Header -->
					<h5>Sample Dropcap II</h5>
					
					<!-- Section -->
					<div data-id="section-2">
<!-- Dropcap -->
<p class="template-component-dropcap template-component-dropcap-style-2">
	<span>C</span>lass aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos ini himenaeos. Praesent dui mauris tristique mollis mi a malesuada tempus nullalis donec in odio tellus. Suspendisse vitae pretium sem ut hendrerit risus.
</p>
					</div>
					
					<!-- Preformatted text -->
					<div class="template-component-preformatted-text" data-id-rel="section-2">
						<a href="#">
							<span>Click to show code</span>
							<span>Click to hide code</span>
						</a>
						<pre></pre>
					</div>							

				</div>

				<!-- Sidebar -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('shortcode-sidebar'); ?>
				</div>

			</div>

		</div>