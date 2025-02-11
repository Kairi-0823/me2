<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
  // reset style
  wp_register_style(
    'reset_style',
    get_template_directory_uri() . '/css/reset.css',
    array(),
    '1.0'
  );

  // google fonts
  wp_register_style(
      'google-fonts_style',
      'https://fonts.googleapis.com/css2?family=Unna&display=swap',
      array(),
      '1.0'
  );
  
  // slick.min.cssを登録
  wp_register_style(
    'slick.min.css',
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
    array(),
    '1.0'
  );
  // slick-theme.cssを登録
  wp_register_style(
    'slick-theme.css',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css',
    array(),
    '1.0'
  );

    
    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'google-fonts_style' , 'slick.min.css' ,'slick-theme.css'),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {

  wp_deregister_script('jquery');

  wp_register_script(
    'jquery_script',
    'https://code.jquery.com/jquery-3.7.1.js',
    array(),
    '1.0',
    true
  );

  wp_register_script(
    'slick-script',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
    array(),
    '1.0',
    true
);

  wp_enqueue_script(
    'main_script',
    get_template_directory_uri() . '/js/main.js',
    array('jquery_script','slick-script'),
    '1.0',
    true
  );
}
?>

