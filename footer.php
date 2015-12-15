          


<footer class="footer" role="contentinfo">
  <div class="footer-sponsors" style="background-color: white;">
    <div class="row small-up-3 medium-up-6 large-up-6" style="padding: 40px 0 30px;">
      <?php 
      $args = array( 'post_type' => 'sponsors' );
      $recent_posts = new WP_Query( $args ); 
      ?>

      <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
        
        <div class="column">
          <a href="<?php echo rwmb_meta( 'url' );?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( array(200,200) ); ?>
          </a>
        </div>

      <?php endwhile; // end of the loop. ?>

      <?php wp_reset_postdata(); ?>





    </div>
  </div>
  <div id="inner-footer" class="row">
    <div class="large-12 medium-12 columns" style="padding: 20px 0;">
      <nav role="navigation">
        <?php joints_footer_links(); ?>
      </nav>
    </div>
    <div class="large-12 medium-12 columns">
      <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
    </div>
  </div> <!-- end #inner-footer -->
</footer> <!-- end .footer -->
</div>  <!-- end .main-content -->
</div> <!-- end .off-canvas-wrapper-inner -->
</div> <!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>
</body>
</html> <!-- end page -->