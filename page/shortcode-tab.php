		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Tab','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix">

				<!-- Left column -->
				<div class="template-content-layout-column-left">

					<!-- Header -->
					<h5>Sample Tab I</h5>
					
					<!-- Section -->
					<div data-id="section-1">
<!-- Tabs -->
<div class="template-component-tab">
	<!-- Navigation -->
	<ul>
		<li>
			<a href="#template-tab-1">Tab I</a>
			<span></span>
		</li>
		<li>
			<a href="#template-tab-2">Tab II</a>
			<span></span>
		</li>
		<li>
			<a href="#template-tab-3">Tab III</a>
			<span></span>
		</li>
		<li>
			<a href="#template-tab-4">Tab IV</a>
			<span></span>
		</li>
	</ul>
	<!-- Tab #1 -->
	<div id="template-tab-1">
		Lorem ipsum dolor sit amet consectetur adipiscing elit curabitur malesuada sapien urna ut porttitor ligula euismod eu. In consectetur accumsan mauris suspendisse ante nibh convall at luctus a mattis quis quam. Aliquam lacinia enim id pretium fermentum sed at odio.
	</div>
	<!-- Tab #2 -->
	<div id="template-tab-2">
		Suspendisse varius lorem nec tincidunt accumsan nulla purus vehicula metus sed vehicula ante quam id dui. Proin porttitor est ut augue bibendum in aliquet purus volutpat nulla aci placerat at quam in faucibus. Duis bibendum sit amet arcu in venenatis.
	</div>
	<!-- Tab #3 -->
	<div id="template-tab-3">
		Cras eu ante auctor dapibus augue at ullamcorper velit. Etiam lacinia in nulla at consequat aliquam at ullamcorper tortor quis tempor velit. Phasellus ut auctor massa donec conseqi elit id libero venenatis tincidunt. Mauris sapien erat facilisis vitae justo non sodales.
	</div>
	<!-- Tab #4 -->
	<div id="template-tab-4">
		Cras et tempor dolor vestibulum lacinia fringilla sapien vel sagittis sedis et molestie elit sed nec sem faucibus sodales nulla eget ultrices leo. Vestibulum non elementum libero. Nullam faucibus varius facilisis. Vestibulum ullamcorper quam eu ligula accumsan molestie.
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

				<!-- Right column -->
				<div class="template-content-layout-column-right">
					<?php Template::includeFile('shortcode-sidebar'); ?>
				</div>

			</div>

		</div>