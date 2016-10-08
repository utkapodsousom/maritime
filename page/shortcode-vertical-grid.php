		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Vertical Grid','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Main -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content -->
				<div class="template-content-layout-column-left">

					<!-- Header -->
					<h5>Sample Vertical Grid I</h5>
					
					<!-- Section -->
					<div data-id="section-1">
<!-- Vertical grid -->
<div class="template-component-vertical-grid">
	<!-- List -->
	<ul>
		<!-- Item -->
		<li class="template-component-vertical-grid-line-1n">
			<div>Nullam iaculis purus suscipit</div>
			<div>30 - 40</div>
		</li>
		<!-- Item -->
		<li class="template-component-vertical-grid-line-2n">
			<div>Curabitur fermentum laoree</div>
			<div>1997</div>
		</li>
		<!-- Item -->
		<li class="template-component-vertical-grid-line-1n">
			<div>Pellentesque quis massa at</div>
			<div>3,5 - 5,6</div>
		</li>
		<!-- Item -->
		<li class="template-component-vertical-grid-line-2n">
			<div>In lacinia, purus vel egestas</div>
			<div>Vitae lobortis</div>
		</li>
		<!-- Item -->
		<li class="template-component-vertical-grid-line-1n">
			<div>Etiam placerat mauris vitae</div>
			<div>20000</div>
		</li>
		<!-- Item -->
		<li class="template-component-vertical-grid-line-2n">
			<div>Suspendisse venenatis odio</div>
			<div>1997-2005</div>
		</li>
		<!-- Item -->
		<li class="template-component-vertical-grid-line-1n">
			<div>Nunc molestie nunc lectus</div>
			<div>325</div>
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

				</div>

				<!-- Sidebar  -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('shortcode-sidebar'); ?>
				</div>

			</div>

		</div>