<!DOCTYPE html>
<head>
<meta charset= <?php bloginfo( 'charset' ) ?> />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <div class="buffer">
      <div class="buffer">
       <?php wp_nav_menu( 
        array(
            
            'theme_location' => 'top menu',
             'fallback_cb ' => false

            ) 
         ) 
       ?>
        <?php the_custom_logo(); ?>
        <ol>
        <?php wp_nav_menu( 
        array(
            
            'theme_location' => 'header menu',
             'fallback_cb ' => false

            ) 
         ) 
       ?>
        </ol>
        <?php echo get_search_form( ); ?>
      </div>
    </div>
  </div>