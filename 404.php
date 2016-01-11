<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="row">
	
			<main id="main" class="large-8 medium-8 columns bottom-gray" role="main">

				<article id="content-not-found">
				
					<header class="article-header">
						<h1><?php _e("[:no]Beklager! - Vi kan ikke finne siden du leter etter[:en]Sorry! - We can't find what you're looking for[:]", "jointswp"); ?></h1>
					</header> <!-- end article header -->
			
					<section class="entry-content">
						<p><?php _e("[:no]Vennligst prøv igjen[:en]Please try again[:en]", "jointswp"); ?></p>
					</section> <!-- end article section -->

					<section class="search">
					    <p><?php get_search_form(); ?></p>
					</section> <!-- end search section -->
			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>