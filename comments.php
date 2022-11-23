<?php 

wp_list_comments( );

if(!comments_open( )){
    echo "<h2> All Comments are Closed </h2>";
}
comment_form( );

?>