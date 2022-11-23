<?php 

get_header();

?>
 
  <!-- BEGIN body -->
  <div id="body">
    <div class="single-post">

   
    <!-- BEGIN content -->
    <div id="content">
      <div class="buffer">

      <?php 
      
      while(have_posts()):the_post();
      
      ?>
        <!-- begin post -->
        <div class="post">
          <h2><a href="#"><?php the_category( ' ' ); ?></a></h2>
          <p class="date"><a href="#"><?php the_author( ); ?></a> on <?php the_time('d-F-Y' ); ?>   | <a href="#"> <?php comments_number(); ?> </a></p>
          <div class="thumbs"><a href="#"><img class="img" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post-> ID )) ?>"/></a></div>
        
          <p><?php the_content(); ?></p> 
        </div>
        
        <?php endwhile; ?>
          <!-- end post -->
       <?php 
       if(!post_password_required( )){
        comments_template( );
       }
       
       
       ?>
       </div>
    </div>
    </div>
    <!-- END content -->
    <?php 

get_sidebar();

?>
    <div class="break"></div>
  </div>
  <!-- END body -->
  <?php 

get_footer();

?>
