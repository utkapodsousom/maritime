		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Flexslider','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Header -->
					<h5>Sample Flexslider I</h5>
					
					<!-- Section -->
					<div data-id="section-1">
<!-- Flexslider -->
<div class="template-component-flex-slider template-component-flex-slider-style-1 template-preloader">
	<!-- List -->
	<ul class="slides">
		<!-- Item -->
		<li>
			<!-- Image -->
			<div class="template-component-image">
				<img src="media/image/_sample/690x506/1.jpg" alt=""/>
			</div>
		</li>
		<!-- Item -->
		<li>
			<div class="template-component-image">
				<img src="media/image/_sample/690x506/2.jpg" alt=""/>
			</div>
		</li>
		<!-- Item -->
		<li>
			<div class="template-component-image">
				<img src="media/image/_sample/690x506/3.jpg" alt=""/>
			</div>
		</li>
		<!-- Item -->
		<li>
			<div class="template-component-image">
				<img src="media/image/_sample/690x506/4.jpg" alt=""/>
			</div>
		</li>
	</ul>
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
					<h5>Sample Flexslider II</h5>
					
					<!-- Section -->
					<div data-id="section-2">
<!-- Flexslider -->
<div class="template-component-flex-slider template-component-flex-slider-style-2 template-preloader">
	<ul class="slides">
		<li>
			<div class="template-component-image">
				<img src="media/image/_sample/690x506/1.jpg" alt=""/>
			</div>
		</li>
		<li>
			<div class="template-component-image">
				<img src="media/image/_sample/690x506/2.jpg" alt=""/>
			</div>
		</li>
		<li>
			<div class="template-component-image">
				<img src="media/image/_sample/690x506/3.jpg" alt=""/>
			</div>
		</li>
		<li>
			<div class="template-component-image">
				<img src="media/image/_sample/690x506/4.jpg" alt=""/>
			</div>
		</li>
	</ul>
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