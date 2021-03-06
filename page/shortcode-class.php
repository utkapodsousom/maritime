		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Class','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-main template-clear-fix">

				<!-- Header -->
				<h5>Sample Class I</h5>
				
				<!-- Section -->
				<div data-id="section-1">
					<?php Template::includeFile('class-1'); ?>
				</div>
				
				<!-- Preformatted text -->
				<div class="template-component-preformatted-text template-clear-fix template-margin-top-reset" data-id-rel="section-1">
					<a href="#">
						<span>Show code</span>
						<span>Hide code</span>
					</a>
					<pre></pre>
				</div>

			</div>

		</div>