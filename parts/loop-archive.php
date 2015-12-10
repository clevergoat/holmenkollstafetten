<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header>  end article header 
					
	<section class="entry-content" itemprop="articleBody">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php the_content('<button class="tiny">Read more...</button>'); ?>
	</section> end article section
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer>  end article footer 				    						
</article> end article 
 -->


<a href="<?php the_permalink() ?>" style="display: block;">
<article id="post-<?php the_ID(); ?>" <?php post_class('large-12 column'); ?> role="article" style="background-color: white; border-bottom: 3px solid lightgray; margin-bottom: 20px;">
	<div class="row nyheter">
	<section class="entry-content medium-4 large-4 columns show-for-medium" itemprop="articleBody" style="padding: 0;">
		<!--<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>-->
		<?php the_post_thumbnail('thumbnail'); ?>
		
	</section> <!-- end article section -->
	<div class="callout medium-8 large-8 columns" style="border: none; background-color: rgba(0,0,0,0);">
	<header class="article-header">
		<!--<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>-->
		<h2><?php the_title(); ?></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		
	</header> <!-- end article header -->
					
	
	<?php the_excerpt(10); ?>
	
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
	</div>	
	</div>	    						
</article> <!-- end article -->
</a>