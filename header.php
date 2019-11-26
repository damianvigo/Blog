<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php if(is_home() ){
      echo get_bloginfo('name');
    } else if (is_single() ) {
      echo the_title();
    } else {
      echo get_bloginfo('name');
    } ?>
  </title>

  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="logo col-xs-12 col-sm-6">
          <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logoNegro.png" alt="Damian Vigo Desarrollador Web"></a>
        </div>
        <div class="col-xs-12 col-sm-6 redes-sociales">
          <a class="youtube" href=""><i class="fa fa-youtube"></i></a>
          <a class="twitter" href=""><i class="fa fa-twitter"></i></a>
          <a class="facebook" href=""><i class="fa fa-facebook"></i></a>
        </div>
      </div>
    </div>

    <nav class="menu">
      <div class="container">
        <div class="row">
          <?php wp_nav_menu(array(
            'container' => false, 
            'menu_class' => '',
            'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
            'theme_location' => 'menu-top'
          )); ?>
        </div>
      </div>
    </nav>

    <div class="ad container d-none d-md-block">
      <div class="row">
        <div class="col-md-12">
          <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="">
        </div>
      </div>
    </div>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : endif; ?>
  </header>