		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Preformatted Text','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">
					
					<!-- Header -->
					<h5>Sample Preformatted Text I</h5>
					
					<!-- Preformatted text -->
					<div class="template-component-preformatted-text">
						<a href="#">
							<span>Click to show code</span>
							<span>Click to hide code</span>
						</a>
						<pre>
Nullam sed vulputate nulla in vestibulum nulla.
Praesent non magna a augue cursus gravida tincidunt. 
Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque.</pre>
					</div>
					
				</div>

				<!-- Sidebar -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('shortcode-sidebar'); ?>
				</div>

			</div>

		</div>