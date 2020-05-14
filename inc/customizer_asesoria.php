<?php
  
    function tenasesoria_customize_register($wp_customize){
    // Asesoria
    $wp_customize -> add_section('frontpage_asesoria',array(
        'title' => __('Asesoria', 'ten_asesora'),
        'description' => sprintf(__('Fotos de las fundadoras','ten_asesora')),
        'priority' => 132
    )); 
     //  Imagen de asesoria
    $wp_customize -> add_setting('asesoria_image', array(
        'default' => get_bloginfo('template_directory').'/assets/img/avatar.jpg',
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'asesoria_image',array(
        'label'   => __('Foto de Martina', 'ten_asesora'),
        'section' => 'frontpage_asesoria',
        'setting' => 'asesoria_image',
        'priority' => 1
    )) );  
    // Url del Boton
   $wp_customize -> add_setting('asesoria_url', array(
        'default' => _x('https://contacto.com','ten_asesora'),
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control('asesoria_url', array(
        'label'   => __('Biografia de tendenze', 'ten_asesora'),
        'section' => 'frontpage_asesoria',
        'priority' => 4
    ));
} 
add_action('customize_register','tenasesoria_customize_register');

?>
























