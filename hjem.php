
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
			<div class="small-12 medium-4 large-4 columns">
				<a href="https://reg.eqtiming.no/?EventUID=20006" class="hero large expanded button">
					<h2><?php _e("[:no]Påmelding[:en]Sign up[:]"); ?></h2>
					<p class="show-for-medium"><?php _e("[:no]Meld på ditt lag[:en]Sign up your team[:]"); ?></p>
				</a>
			</div>
			<div class="small-12 medium-4 large-4 columns">
				<a href="deltagerinfo/" class="hero large expanded button">
					<h2><?php _e("[:no]Deltagerinfo[:en]Runner info[:]"); ?></h2>
					<p class="show-for-medium"><?php _e("[:no]Svarene til alt du lurer på[:en]Answers to all your questions[:]"); ?></p>
				</a>
			</div>
			<div class="small-12 medium-4 large-4 columns">
				<a href="loypekart/" class="hero large expanded button">
					<h2>Løypekart</h2>
					<p class="show-for-medium">Finn din etappe</p>
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
				<a href="nyheter/" class="hero large expanded button" style="border-bottom: 3px solid lightgray;">
					<h2>Se flere nyheter</h2>
				</a>
			</div>

			<?php // get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

	<?php get_footer(); ?>