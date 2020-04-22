<?php


use WpTailwindCssThemeBoilerplate\AutoLoader;
use WpTailwindCssThemeBoilerplate\View;


/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */
require get_stylesheet_directory() . '/app/AutoLoader.php';
require get_stylesheet_directory() . '/inc/widgets.php'; 


$loader = new AutoLoader();
$loader->register();
$loader->addNamespace( 'WpTailwindCssThemeBoilerplate', get_stylesheet_directory() . '/app' );

View::$view_dir = get_stylesheet_directory() . '/templates/views';

require get_stylesheet_directory() . '/includes/scripts-and-styles.php';
 
 
// Tendenze

// Obtiene la Url del thumbnail     
function thumbnail_image_url($size){
    global $post; 
    $image_id = get_post_thumbnail_id($post -> ID);
    $main_image = wp_get_attachment_image_src($image_id, $size);
    //0 = ruta o url, 1 = width, 2 = height, 3 = boolean
    return $main_image[0];
}



    // Escuela

 //Activar para que Text area ACF acepte shortcode

// function my_acf_format_value( $value, $post_id, $field ) { 
// 	// run do_shortcode on all textarea values
// 	$value = do_shortcode($value);  
// 	// return
// 	return $value;
// } 

// add_filter('acf/format_value/type=textarea', 'my_acf_format_value', 10, 3);

 
 
// function events_endpoint() {
// 	register_rest_route( 'cursos/', 'destacados', array(
//         'methods'  =>   'GET' ,
//         'callback' => 'get_cursos',
//     ));
// 	register_rest_route( 'congresos/', 'destacados', array(
//         'methods'  =>   'GET',
//         'callback' => 'get_congresos',
//     )); 
//     register_rest_route( 'diplomas/', 'destacados', array(
//         'methods'  =>   'GET' ,
//         'callback' => 'get_diplomas',
//     ));
   
// }
// add_action( 'rest_api_init', 'events_endpoint' );
  
// function get_cursos(){
// 	// Set the arguments based on our get parameters
// 	// $today = date('Ymd',strtotime('today'));
// 	$args = array (
// 		'post_type'     => 'curso',
// 		'posts_per_page'    => -1
// 	);
// 	// Run a custom query
// 	$meta_query = new WP_Query($args);
// 	if($meta_query->have_posts()) {
// 		//Define and empty array
// 		$i = 0;
// 		$data = array();
// 		// Store each post's data in the array
// 		while($meta_query->have_posts()) {
// 			$meta_query->the_post();
// 			$data[$i]['title']          =   get_the_title(); 
// 			$data[$i]['thumbnail']      =   get_the_post_thumbnail_url(get_the_ID(), 'full');
// 			$data[$i]['link']           =   get_the_permalink();
// 			$data[$i]['fecha']			=   get_field('curso_fecha');
// 			$data[$i]['horas']			=   get_field('curso_horas');
// 			$data[$i]['precio']			=   get_field('curso_precio');
// 			$i++;
// 		}
// 		// Return the data
// 		return $data;
// 	}else{
// 		return [];
// 	}
// }
 
// function get_congresos(){
// 	// Set the arguments based on our get parameters
// 	// $today = date('Ymd',strtotime('today'));
// 	$args = array (
// 		'post_type'     => 'congreso',
// 		'posts_per_page'    => -1
// 	);
// 	// Run a custom query
// 	$meta_query = new WP_Query($args);
// 	if($meta_query->have_posts()) {
// 		//Define and empty array
// 		$i = 0;
// 		$data = array();
// 		// Store each post's data in the array
// 		while($meta_query->have_posts()) {
// 			$meta_query->the_post();
// 			$data[$i]['title']          =   get_the_title(); 
// 			$data[$i]['thumbnail']      =   get_the_post_thumbnail_url(get_the_ID(), 'full');
// 			$data[$i]['link']           =   get_the_permalink();
// 			$data[$i]['date']			=   get_field('congreso_fecha');
// 			$data[$i]['location']			=   get_field('congreso_lugar');
// 			$data[$i]['price']			=   get_field('congreso_precio');
// 			$i++;
// 		}
// 		// Return the data
// 		return $data;
// 	}else{
// 		return [];
// 	}
// }
 
// function get_diplomas(){
// 	// Set the arguments based on our get parameters
// 	// $today = date('Ymd',strtotime('today'));
// 	$args = array (
// 		'post_type'     => 'diploma',
// 		'posts_per_page'    => -1
// 	);
// 	// Run a custom query
// 	$meta_query = new WP_Query($args);
// 	if($meta_query->have_posts()) {
// 		//Define and empty array
// 		$i = 0;
// 		$data = array();
// 		// Store each post's data in the array
// 		while($meta_query->have_posts()) {
// 			$meta_query->the_post();
// 			$data[$i]['title']          =   get_the_title(); 
// 			$data[$i]['thumbnail']      =   get_the_post_thumbnail_url(get_the_ID(), 'full');
// 			$data[$i]['link']           =   get_the_permalink();
// 			$data[$i]['fecha']			=   get_field('diploma_fecha');
// 			$data[$i]['horas']			=   get_field('diploma_horas');
// 			$data[$i]['precio']			=   get_field('diploma_precio');
// 			$i++;
// 		}
// 		// Return the data
// 		return $data;
// 	}else{
// 		return [];
// 	}
// }

// Desactivar Editor gutenber
//  add_filter('use_block_editor_for_post', '__return_false', 10);
 



