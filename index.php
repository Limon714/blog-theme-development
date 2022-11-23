<?php 

get_header();

?>
 
  <!-- BEGIN body -->
  <div id="body">
    <!-- BEGIN content -->
    <div id="content">
      <div class="buffer">
      <?php 
      
      if(!have_posts()){
        echo " There is no post related your search";
      }
      
      ?> 
      

      <?php 
      
      while(have_posts()):the_post();
      
      ?>
        <!-- begin post -->
        <div class="post">
          <h2><a href="#"><?php the_category( ' ' ); ?></a></h2>
          <p class="date"><a href="#"><?php the_author( ); ?></a> on <?php the_time('d-F-Y' ); ?>   | <a href="#"> <?php comments_number(); ?> </a></p>
          <div class="thumb"><a href="#"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post-> ID )) ?>"/></a></div>
          <p><?php echo wp_trim_words(get_the_content( ), 25, '...' ) ; ?></p>
          <a class="readmore" href="<?php the_permalink(); ?>">Read More</a> </div>
        
        <?php endwhile; ?>
          <!-- end post -->
       
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
