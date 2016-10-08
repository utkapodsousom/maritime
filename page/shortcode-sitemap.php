		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Sitemap','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Layout 50x50 -->
					<ul class="template-layout-50x50 template-clear-fix">

						<!-- Column left -->
						<li class="template-layout-column-left">

							<!-- Header -->
							<h5>Pages</h5>
							
							<!-- Section -->
							<div data-id="section-1">
<!-- Sitemap -->
<div class="template-component-list template-component-list-style-1">
	<!-- List -->
	<ul>
		<li><a href="#">Page <strong>01</strong></a></li>
		<li><a href="#">Page <strong>02</strong></a></li>
		<li><a href="#">Page <strong>03</strong></a></li>
		<li><a href="#">Page <strong>04</strong></a></li>
		<li><a href="#">Page <strong>05</strong></a></li>
		<li><a href="#">Page <strong>06</strong></a></li>
		<li><a href="#">Page <strong>07</strong></a></li>
		<li><a href="#">Page <strong>08</strong></a></li>
		<li><a href="#">Page <strong>09</strong></a></li>
		<li><a href="#">Page <strong>10</strong></a></li>
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

						</li>

						<!-- Column right -->
						<li class="template-layout-column-right">

							<!-- Header -->
							<h5>Posts</h5>
							
							<!-- Section -->
							<div data-id="section-2">
<!-- Sitemap -->
<div class="template-component-list template-component-list-style-1">
	<!-- List -->
	<ul>
		<li><a href="#">Post <strong>01</strong></a></li>
		<li><a href="#">Post <strong>02</strong></a></li>
		<li><a href="#">Post <strong>03</strong></a></li>
		<li><a href="#">Post <strong>04</strong></a></li>
		<li><a href="#">Post <strong>05</strong></a></li>
		<li><a href="#">Post <strong>06</strong></a></li>
		<li><a href="#">Post <strong>07</strong></a></li>
		<li><a href="#">Post <strong>08</strong></a></li>
		<li><a href="#">Post <strong>09</strong></a></li>
		<li><a href="#">Post <strong>10</strong></a></li>
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

						</li>

					</ul>

				</div>

				<!-- Sidebar -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('shortcode-sidebar'); ?>
				</div>

			</div>

		</div>