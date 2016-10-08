		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Notice','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Header -->
					<h5>Sample Notice I</h5>
					
					<!-- Section -->
					<div data-id="section-1">
<!-- Notice -->
<div class="template-component-notice template-component-notice-style-1">
	<!-- Content -->
	<div class="template-component-notice-content">
		<!-- Left column -->
		<div class="template-component-notice-content-left">
			<!-- Icon -->
			<div class="template-icon-feature template-icon-feature-size-medium template-icon-feature-name-tick-alt"></div>
		</div>
		<!-- Right column -->
		<div class="template-component-notice-content-right">
			<!-- Header -->
			<h6>Lorem ipsum dolor sit amet</h6>
			<!-- Text -->
			<p>Curabitur dignissim sapien nec tellus molestie molestie.</p>
			<!-- Close link -->
			<a href="#">Close</a>
		</div>		
	</div>
</div>
					</div>
					
					<!-- Preformatted text -->
					<div class="template-component-preformatted-text template-clear-fix" data-id-rel="section-1">
						<a href="#">
							<span>Show code</span>
							<span>Hide code</span>
						</a>
						<pre></pre>
					</div>

					<!-- Header -->
					<h5>Sample Notice II</h5>
					
					<!-- Section -->
					<div data-id="section-2">
<!-- Notice -->
<div class="template-component-notice template-component-notice-style-2">
	<!-- Content -->
	<div class="template-component-notice-content">
		<!-- Left column -->
		<div class="template-component-notice-content-left">
			<!-- Icon -->
			<div class="template-icon-feature template-icon-feature-size-medium template-icon-feature-name-clock-alt"></div>
		</div>
		<!-- Right column -->
		<div class="template-component-notice-content-right">
			<!-- Header -->
			<h6>Lorem ipsum dolor sit amet</h6>
			<!-- Text -->
			<p>Curabitur dignissim sapien nec tellus molestie molestie.</p>
			<!-- Close link -->
			<a href="#">Close within <span></span> seconds.</a>
			<!-- Timeline -->
			<span><span></span></span>
		</div>		
	</div>
</div>
					</div>
					
					<!-- Preformatted text -->
					<div class="template-component-preformatted-text template-clear-fix" data-id-rel="section-2">
						<a href="#">
							<span>Show code</span>
							<span>Hide code</span>
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