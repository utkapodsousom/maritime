		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Accordion','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Header -->
					<h5>Sample Accordion I</h5>
					
					<!-- Section -->
					<div data-id="section-1">
<!-- Accordion -->
<div class="template-component-accordion">
	<!-- Header 1 -->
	<h6><a href="#">Maecenas eget elementum metus nec tempus massa</a></h6>
	<!-- Content 1 -->
	<div>
		<p>
			Cras accumsan mattis eleifend cras turpis quam vulputate quis neque ac posuereli bibendum dolor. Integer sagittis purus ac elit interdum suscipit aeneani accumsan metus non odio tristique sed consequat eros vestibulum.
		</p>
	</div>
	<!-- Header 2 -->
	<h6><a href="#">Pellentesque iaculis risus enim at luctus sem egestas</a></h6>
	<!-- Content 2 -->
	<div>
		<p>
			Mauris dictum vitae turpis ut luctus duis a quam eget urna ullamcorper tinciduntila nec ut arcu. In tempus leo lacus vel tincidunt dui tincidunt et integer nulla elit sagitt in sollicitudin sed consequat nec dolor. 
		</p>
	</div>
	<!-- Header 3 -->
	<h6><a href="#">Proin sollicitudin erat vel eleifend ullamcorper multi</a></h6>
	<!-- Content 3 -->
	<div>
		<p>
			Proin molestie orci ut fermentum porttitor sapien dolor imperdiet nulla ac loremis vestibulum risus nisl in eros. Nunc sit amet pellentesque erat vivamus commodolil libero at gravida sollicitudin phasellus sit amet neque diam.
		</p>
	</div>
	<!-- Header 4 -->
	<h6><a href="#">Vestibulum consequat fringilla risus condimentumis</a></h6>
	<!-- Content 4 -->
	<div>
		<p>
			Nullam non nulla et magna congue aliquet in hac habitasse platea dictumst alecius. Vivamus sed enim nec lectus aliquet imperdiet et vel est. Aliquam egestas semperli metus at scelerisque ut eros libero sollicitudin non sagittis sit amet.
		</p>
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

				</div>

				<!-- Sidebar -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('shortcode-sidebar'); ?>
				</div>

			</div>

		</div>