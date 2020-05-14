<?php
 

function ten_customize_register($wp_customize){ 
    // Fundadoras
        $wp_customize -> add_section('frontpage',array(
            'title' => __('Fundadoras', 'wpfrontpage'),
            'description' => sprintf(__('Fotos de las fundadoras','wpfrontpage')),
            'priority' => 130
        )); 
    

        //  Fotos de fundadoras
        $wp_customize -> add_setting('martina_image', array(
            'default' => get_bloginfo('template_directory').'/assets/img/avatar.jpg',
            'type'    => 'theme_mod'
        ));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'martina_image',array(
            'label'   => __('Foto de Martina', 'wpfrontpage'),
            'section' => 'frontpage',
            'setting' => 'martina_image',
            'priority' => 1
        )) );  
        $wp_customize -> add_setting('karina_image', array(
            'default' => get_bloginfo('template_directory').'/assets/img/avatar.jpg',
            'type'    => 'theme_mod'
        ));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'karina_image',array(
            'label'   => __('Foto de Karina', 'wpfrontpage'),
            'section' => 'frontpage',
            'setting' => 'karina_image',
            'priority' => 2
        )) ); 

        // Bio Tendenze
        $wp_customize -> add_setting('bio_description', array(
            'default' => _x('bio tendenze','wpfrontpage'),
            'type'    => 'theme_mod'
        ));
        $wp_customize -> add_control('bio_description', array(
            'label'   => __('Biografia de tendenze', 'wpfrontpage'),
            'section' => 'frontpage',
            'priority' => 3
        ));
      
    }
 
    add_action('customize_register','ten_customize_register'); 


























