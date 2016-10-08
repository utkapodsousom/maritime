<?php
		require_once(dirname(__FILE__).'/../plugin/twitter-user-timeline/TwitterUserTimeline.class.php');
		$TwitterUserTimeline=new TwitterUserTimeline();
?>
		<!-- Header -->
		<div class="template-header">

			<!-- Top header -->
			<div class="template-header-top">
				<?php Template::includeHeaderTop(); ?>
			</div>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<?php Template::includeHeaderBottom('Twitter User Timeline','Collection of predefined components to use on your site'); ?>
			</div>

		</div>

		<!-- Content -->
		<div class="template-content">

			<!-- Section -->
			<div class="template-content-section template-padding-bottom-reset template-main template-clear-fix">
				
				<!-- Header -->
				<h5>Sample Twitter User Timeline I</h5>
				
				<!-- Section -->
				<div data-id="section-1">
<!-- Twitter user timeline -->
<div class="template-component-twitter-user-timeline template-component-twitter-user-timeline-style-1">
<?php echo $TwitterUserTimeline->create(); ?>
</div>
				</div>
				
				<!-- Header -->
				<h5>Sample Twitter User Timeline II</h5>
				
			</div>

			<!-- Section -->
			<div class="template-content-section template-clear-fix template-background-image template-background-image-1">
				
				<!-- Main -->
				<div class="template-main ">
					
					<!-- Section -->
					<div data-id="section-2">
<!-- Twitter user timeline -->
<div class="template-section-white">
	<div class="template-component-twitter-user-timeline template-component-twitter-user-timeline-style-2">
	<?php echo $TwitterUserTimeline->create(); ?>
	</div>
</div>
					</div>
					
				</div>
				
			</div>

		</div>

				