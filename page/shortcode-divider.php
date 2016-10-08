		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Divider','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Header -->
					<h5>Sample Divider I</h5>

					<!-- Section -->
					<div data-id="section-1">
<p>
	Pellentesque sapien ex lacinia at feugiat eget scelerisque sed est. 
	Nullam vitae sapien com lorem bibendum viverra eu sed odio. 
	Fusce at turpis rhoncus condimentum sem.
</p>
<!-- Divider -->
<div class="template-component-divider"></div>
<p>
	Etiam a cursus velit at dignissim ex aliquam enim diam ornare id finibus eu mollis eu enim. 
	Donec a nulla in est pharetra dapibus at facilisis nunc donec eleifend dui sit amet.
</p>
					</div>

					<!-- Preformatted text -->
					<div class="template-component-preformatted-text" data-id-rel="section-1">
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