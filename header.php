<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title><?php echo get_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    
    <body <?php echo body_class('loadable'); ?>>
    <?php
        include 'php/header/nav.php'; 
        include 'php/header/hero.php';
        include 'php/header/main-head.php';
    ?>
        