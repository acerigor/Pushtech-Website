<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <?php wp_head(); ?>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="blog-masthead">
      <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="197">
      <div class="container">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
          <?php

          	wp_nav_menu( array(
          		'menu'              => 'primary',
          		'theme_location'    => 'primary',
          		'depth'             => 2,
          		'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
          		'menu_class'        => 'nav navbar-nav',
          		'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          		'walker'			      => new wp_bootstrap_navwalker())
          	);
          ?>
        </div>
        </nav>
      </div>
        <div class="container">
          <div class="blog-header">
            <p class="lead blog-description"><?php bloginfo('description') ?></p>
          </div>
