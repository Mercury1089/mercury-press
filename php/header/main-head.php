<?php
    $main_class = array("content"); 

    if ( is_singular('post') )
        array_push( $main_class, "content--type--post" );
?>
<main class="<?php echo implode(" ", $main_class); ?>">