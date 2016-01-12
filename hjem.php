
<?php
/*
Template Name: Hjem
*/
?>

<?php get_header(); ?>

<div class="container" style="height: calc(100vh - 90px);">
	<div class="logo">
		<img src="<?php echo get_template_directory_uri(); ?>/images/hk_logo.png">
	</div>
	<div class="show-for-medium hoved-bg" style="height: 100%; position: static;">
		<div class="hks-timer show-for-medium" style="position: absolute; left: 0; right: 0; bottom: 50px; margin: 0 auto; text-align: center; width: 550px;">
		<h3 style="font-weight: 200; text-shadow: 0 1px 0 #fff; ">Norges største friidrettsarrangement.</h3>
		<h3 style="font-weight: 600;">Lørdag 7. mai, 2016.</h3>
		<?php echo _e(do_shortcode('[:no][easy_countdowner name="demo_countdowner" theme="default" animation="ticks" end_date="2016-05-07" end_time="00:00:00" day_label="Dager" hour_label="Timer" minute_label="Minutter" second_label="Sekunder"][:en][easy_countdowner name="demo_countdowner" theme="default" animation="ticks" end_date="2016-05-07" end_time="00:00:00" day_label="Days" hour_label="Hours" minute_label="Minutes" second_label="Seconds"[:]'));?>
		</div>
	</div>


	<div class="inner-container" style="position: static; bottom: inherit;">
		<div class="row">
			<div class="small-12 large-4 columns">
				<a href="https://reg.eqtiming.no/?EventUID=20006" class="hero large expanded button bottom-gray">
					<h2><?php _e("[:no]Påmelding[:en]Sign up[:]"); ?></h2>
					<p class="show-for-medium"><?php _e("[:no]Meld på ditt lag[:en]Sign up your team[:]"); ?></p>
				</a>
			</div>
			<div class="small-12 large-4 columns">
				<a href="deltagerinfo/" class="hero large expanded button bottom-gray">
					<h2><?php _e("[:no]Deltagerinfo[:en]Runner info[:]"); ?></h2>
					<p class="show-for-medium"><?php _e("[:no]Svarene til alt du lurer på[:en]Answers to all your questions[:]"); ?></p>
				</a>
			</div>
			<div class="small-12 large-4 columns">
				<a href="loypekart/" class="hero large expanded button bottom-gray">
					<h2><?php _e("[:no]Løypekart[:en]Course maps[:]"); ?></h2>
					<p class="show-for-medium"><?php _e("[:no]Finn din etappe[:en]Find your leg[:]"); ?></p>
				</a>

			</div></div>
		</div>
	</div>
	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="large-12 medium-12 columns" role="main" style="margin: 30px 0 40px;">

			


			

				<?php 
				$args = array( 'posts_per_page' => '3' );
				$recent_posts = new WP_Query( $args ); 
				?>

				<?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; // end of the loop. ?>

				<?php wp_reset_postdata(); ?>



			</main> <!-- end #main -->


			<div class="small-12 columns">
				<a href="nyheter/" class="hero large expanded button bottom-gray">
					<h2><?php _e("[:no]Se flere nyheter[:en]See more news[:]"); ?></h2>
				</a>
			</div>

			<?php // get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

	<?php get_footer(); ?>