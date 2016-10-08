		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Header','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-content-layout template-content-layout-sidebar-right template-main template-clear-fix ">

				<!-- Content-->
				<div class="template-content-layout-column-left">

					<!-- Section -->
					<div data-id="section-1">
<h1>Sample Header H1</h1>
<p>Ut nisi urna volutpat et ligula lobortis feugiat tincidunt nisi integer pharetra elit quis nullam ornare porta rutrum quam molestie in hac habitasse platea dictumst blandit.</p>

<h2>Sample Header H2</h2>
<p>Cras sem metus tempor elementum eleifend iaculis gravida porta nisi phasellus eu massan ac lorem luctus ultrices vel sed libero nulla in volutpat ex eu condimentum neque.</p>

<h3>Sample Header H3</h3>
<p>Donec accumsan dignissim ipsum et sodales metus ultrices nec in fringilla nulla eget magn malesuada ut tempus purus vulputate pellentesque metus orci ornare a mi sit amet.</p>

<h4>Sample Header H4</h4>
<p>Praesent tempus odio eget lacus semper eleifend aliquam leo arcu pulvinar ornare malesu vel maximus ut lacus nullam vestibulum erat eget libero ornare sed fringilla.</p>

<h5>Sample Header H5</h5>
<p>Nam lobortis lacus ac mauris efficitur pharetra nulla vel diam quis sapien auctor mattis ale laoreet porttitor diam in accumsan est egestas ac. Pellentesque rhoncus iaculis.</p>

<h6>Sample Header H6</h6>
<p>Nam rhoncus eleifend erat a pretium cum sociis natoque penatibus et magnis dis parturiel montes nascetur ridiculus mus proin finibus ex eget risus blandit.</p>
					</div>

					<!-- Preformatted text -->
					<div class="template-component-preformatted-text template-margin-top-6" data-id-rel="section-1">
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