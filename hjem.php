
<?php
/*
Template Name: Hjem
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="logo">
		<img src="<?php echo get_template_directory_uri(); ?>/images/hk_logo.png">
	</div>
	<div class="show-for-medium hoved-bg">
	</div>

	<div class="inner-container">
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