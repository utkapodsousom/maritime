		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Header And Subheader','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Section -->
					<div data-id="section-1">
<div class="template-component-header-subheader">
	<h1>Lorem ipsum dolor</h1>
	<h6>Fusce eleifend commodo tellus et tempus nunc libero ante mollis quis</h6>
	<div></div>
</div>
					</div>

					<!-- Preformatted text -->
					<div class="template-component-preformatted-text template-margin-top-1" data-id-rel="section-1">
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