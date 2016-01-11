          


<footer class="footer" role="contentinfo">
  <div class="footer-sponsors" style="background-color: white;">
    <div class="row small-up-4 medium-up-6 large-up-8" style="padding: 40px 0 30px;">
      <?php 
      $args = array( 'post_type' => 'sponsors' );
      $recent_posts = new WP_Query( $args ); 
      ?>

      <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

        <div class="column">
          <a href="<?php echo rwmb_meta( 'url' );?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(array(120,120)); ?>
          </a>
        </div>

      <?php endwhile; // end of the loop. ?>

      <?php wp_reset_postdata(); ?>





    </div>
  </div>
  <div id="inner-footer" class="row">

    <form>
      <div class="nyhetsbrev-footer small-12 large-3 large-push-9 columns" style=""> 

        <p><?php _e("[:no]Nyhetsbrev[:en]Newsletter[:]"); ?></p>
        <div class="input-group">
          <input class="input-group-field" type="text" placeholder="<?php _e("[:no]e-post[:en]Email[:]"); ?>" style="height: 40px;">
          <div class="input-group-button">
            <input type="submit" class="button" value="<?php _e("[:no]Meld på[:en]Sign up[:]"); ?>">
          </div>
        </div>

      </div>


    </form>

    <div class="small-6 large-2 large-pull-3 columns" style="">
      <?php joints_footer_links1(); ?>
    </div>
    <div class="small-6 large-2 large-pull-3 columns" style="">
      <?php joints_footer_links2(); ?>
    </div>
    <div class="small-6 large-2 large-pull-3 columns" style="">
      <?php joints_footer_links3(); ?>
    </div>
    <div class="kontakt-footer small-6 large-2 large-pull-3 columns" style="">
      <p><?php _e("[:no]Kontakt[:en]Contact[:]"); ?></p>
      <p>Yt Holmenkollstafetten</p>
      <p>Postboks 5905</p>
      <p>Majorstua</p>
      <p>0308 Oslo</p>
      <a href="mailto:mail@tjalve.no"><i class="fi-mail"></i>mail@tjalve.no</a>
      <a href="https://www.facebook.com/Holmenkollstafetten/"><i class="fi-social-facebook"></i>facebook</a>
    </div>

   <!--<form>
    <div class="nyhetsbrev-footer small-12 large-2 large-push-12 columns" style="padding: 20px 0;">
    
    <label>Nyhetsbrev
    <input type="text" placeholder="E-post" style="margin-left: 1rem;">
    </label>
    </div>
  </form>-->

</div>


<div class="footer-sponsors" style="padding-top: 20px; background-color: #f4f4f4; margin-top: 0px;">
  <div class="row">

    <div class="small-12 medium-8 columns ">
      <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
    </div>
    <div class="small-12  medium-4 columns">
      <p class=""><?php _e("[:no]Nettsiden er levert av[:en]Site delivered by[:]"); ?><a href="http://drd.no"> www.drd.no</a></p>
    </div>
  </div>

</div>


</div> <!-- end #inner-footer -->
</footer> <!-- end .footer -->
</div>  <!-- end .main-content -->
</div> <!-- end .off-canvas-wrapper-inner -->
</div> <!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>
</body>
</html> <!-- end page -->