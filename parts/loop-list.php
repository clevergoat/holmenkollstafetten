
<a href="<?php the_permalink() ?>" style="display: block;">
<article id="post-<?php the_ID(); ?>" <?php post_class('large-12 column bottom-gray'); ?> role="article" style="background-color: white; margin-bottom: 20px;">
    
	<div class="row nyheter">
	<section class="entry-content medium-4 large-4 columns show-for-medium" itemprop="articleBody" style="padding: 0; overflow: hidden;">
		<?php the_post_thumbnail('list-thumb'); ?>
		
	</section> <!-- end article section -->
	<div class="callout medium-8 large-8 columns" style="border: none; background-color: rgba(0,0,0,0);">
	<header class="article-header">
		<h2><?php the_title(); ?></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		
	</header> <!-- end article header -->
	
		<?php
		if(has_excerpt()) {
		    the_excerpt();
		}
		
		echo "<p>Les mer...</p>";
		
		?>
		
		
						
<!-- end article footer -->
	</div>	
	</div>	
	
</article> <!-- end article -->
</a>