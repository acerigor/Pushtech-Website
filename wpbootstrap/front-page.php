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
    <link  href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <?php wp_head(); ?>
     <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
      }
    </style>
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
              'container_class'   => 'collapse navbar-collapse ',
              'container_id'      => 'bs-example-navbar-collapse-1',
          		'menu_class'        => 'nav navbar-nav navbar-right',
          		'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          		'walker'			      => new wp_bootstrap_navwalker())
          	);
          ?>
        </div>
        </nav>
      </div>
      <section class="showcase">
        <div class="container">
          <h1><?php echo get_theme_mod('showcase_heading', 'This is a Bootstrap to Wordpress theme'); ?></h1>
          <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
          <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
        </div>
      </section>
      <section class="boxes">
        <?php echo do_shortcode('[edsanimate_start entry_animation_type= "fadeIn" entry_delay= "0.5" entry_duration= "1" entry_timing= "linear" animation_repeat= "1" keep= "yes" animate_on= "scroll" scroll_offset= "5"]'); ?>
        <div class="container">
          <h2>IFCA FEATURED PRODUCTS</h2>
          <div class="row">
            <div class="col-sm-3">
              <div class="box">
                <i class="fa fa-bed" aria-hidden="true"></i>
                <?php
                    $post_id = 27;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                ?>
                <h3><?php echo $title; ?></h3>
                <p><?php echo $queried_post->post_content; ?></p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="box">
                <i class="fa fa-home" aria-hidden="true"></i>
                <?php
                    $post_id = 29;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                ?>
                <h3><?php echo $title; ?></h3>
                <p><?php echo $queried_post->post_content; ?></p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="box">
                <i class="fa fa-cubes" aria-hidden="true"></i>
                <?php
                    $post_id = 31;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                ?>
                <h3><?php echo $title; ?></h3>
                <p><?php echo $queried_post->post_content; ?></p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="box">
                <i class="fa fa-gear" aria-hidden="true"></i>
                <?php
                    $post_id = 33;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                ?>
                <h3><?php echo $title; ?></h3>
                <p><?php echo $queried_post->post_content; ?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <section class="solutions">
        <?php echo do_shortcode('[edsanimate_start entry_animation_type= "fadeIn" entry_delay= "0" entry_duration= "1" entry_timing= "linear" animation_repeat= "1" keep= "yes" animate_on= "scroll" scroll_offset= "50"]'); ?>
      <div class="container">
        <h3>Solutions and Services</h3><hr>
        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-primary">
              <?php
                  $post_id = 77;
                  $queried_post = get_post($post_id);
                  $title = $queried_post->post_title;
              ?>
              <div class="panel-heading"><h4><?php echo $title; ?></h4></div>
              <div class="panel-body">
                <p><?php echo $queried_post->post_content; ?></p>
              </div>
            </div>

            <div class="panel panel-primary">
              <?php
                  $post_id = 79;
                  $queried_post = get_post($post_id);
                  $title = $queried_post->post_title;
              ?>
              <div class="panel-heading"><h4><?php echo $title; ?></h4></div>
              <div class="panel-body">
                <p><?php echo $title = $queried_post->post_content; ?></p>
              </div>
            </div>

            <div class="panel panel-primary">
              <?php
                  $post_id = 81;
                  $queried_post = get_post($post_id);
                  $title = $queried_post->post_title;
              ?>
              <div class="panel-heading"><h4><?php echo $title; ?></h4></div>
              <div class="panel-body">
                <p><?php echo $title = $queried_post->post_content; ?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="panel panel-primary">
              <?php
                  $post_id = 83;
                  $queried_post = get_post($post_id);
                  $title = $queried_post->post_title;
              ?>
              <div class="panel-heading"><h4><?php echo $title; ?></h4></div>
              <div class="panel-body">
                <p><?php echo $title = $queried_post->post_content; ?></p>
              </div>
            </div>

            <div class="panel panel-primary">
              <?php
                  $post_id = 85;
                  $queried_post = get_post($post_id);
                  $title = $queried_post->post_title;
              ?>
              <div class="panel-heading"><h4><?php echo $title; ?></h4></div>
              <div class="panel-body">
                <p><?php echo $title = $queried_post->post_content; ?></p>
              </div>
            </div>

            <div class="panel panel-primary">
              <?php
                  $post_id = 87;
                  $queried_post = get_post($post_id);
                  $title = $queried_post->post_title;
              ?>
              <div class="panel-heading"><h4><?php echo $title; ?></h4></div>
              <div class="panel-body">
                <p><?php echo $title = $queried_post->post_content; ?></p>
              </div>
            </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  <footer class="blog-footer">
    <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name') ?> All rights reserved.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>

  <?php wp_footer(); ?>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
</body>
</html>
