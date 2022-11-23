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
            <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p> 
        </div>
        
        <?php endwhile; ?>
          <!-- end post -->
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
