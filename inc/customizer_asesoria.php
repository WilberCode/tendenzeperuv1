<?php
  
    function tenasesoria_customize_register($wp_customize){
    // Asesoria
    $wp_customize -> add_section('frontpageasesoria',array(
        'title' => __('Asesoria', 'wpfrontpageasesoria'),
        'description' => sprintf(__('Fotos de las fundadoras','wpfrontpageasesoria')),
        'priority' => 125
    )); 
     //  Imagen de asesoria
    $wp_customize -> add_setting('asesoria_image', array(
        'default' => get_bloginfo('template_directory').'/assets/img/avatar.jpg',
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'asesoria_image',array(
        'label'   => __('Foto de Martina', 'wpfrontpageasesoria'),
        'section' => 'frontpageasesoria',
        'setting' => 'asesoria_image',
        'priority' => 1
    )) );  
    // Url del Boton
   $wp_customize -> add_setting('asesoria_url', array(
        'default' => _x('https://contacto.com','wpfrontpageasesoria'),
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control('asesoria_url', array(
        'label'   => __('Biografia de tendenze', 'wpfrontpageasesoria'),
        'section' => 'frontpageasesoria',
        'priority' => 2
    ));
} 
add_action('customize_register','tenasesoria_customize_register');

?>
























