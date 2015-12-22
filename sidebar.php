<div id="sidebar1" class="sidebar large-4 small-12 columns" role="complementary"  data-sticky-container >
<div class="sticky small-12" data-sticky data-anchor="main" style="background-color: white; padding: 1rem;">
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>
</div>
</div>