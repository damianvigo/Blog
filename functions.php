<?php 

add_theme_support('post-thumbnails');

add_image_size('hompage-thumb', 745, 372, true);

register_nav_menus( array(
  'menu-top' => 'Menu Principal',
  'menu-footer' => 'Menu Footer'
));

register_sidebar(array(
'name' => 'Header',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar(array(
  'name' => 'Sidebar',
  'before_widget' => '<div class="widget"><div class="titulo-seccion">',
  'after_widget' => '</div></div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'name' => 'Footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));


?>