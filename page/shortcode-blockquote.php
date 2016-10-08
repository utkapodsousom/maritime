		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Blockquote','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Header -->
					<h5>Sample Blockquote I</h5>
					
					<!-- Section -->
					<div data-id="section-1">
<div class="template-component-blockquote">
	<p>
		Curabitur tempor ante adipiscing accumsan bibendum nullam cursus pellenta elit ut vehicil pellentesque in justo iaculis nulla porta accumsan. Aliquam antel elit an et elementum veli consectetur vel tellus. In enim eros ullamcorpai vel odio at odes adipiscing hendrerit urna.
	</p>
	<span>- John Doe</span>
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

				</div>

				<!-- Sidebar -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('shortcode-sidebar'); ?>
				</div>

			</div>

		</div>