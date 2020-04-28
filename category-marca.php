<?php
/*
 * Template Name: Celebración
 * Template Post Type: post, page, whatever
 */
get_header();?> 
<div class="marcas pt-20 px-4 lg:px-0">   
   <div class="container">
        <?php 
            $args = array( 
                'taxonomy' => 'marca',
                'show_option_all' => 'All',
                'exclude' => '1,8',
                'title_li' => __('')
                
            );
            wp_list_categories($args);  
        ?> 
        <main class=" grid grid-cols-4 ">    

            <?php
                // Query post services
                $args = array(
                    'post_type'		=> 'marca',
                    'numberposts'	=> -1,
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                ); 
                // query
                $the_query = new WP_Query( $args );  
                if( $the_query->have_posts() ): 
                    while( $the_query->have_posts() ) :$the_query->the_post(); ?>   
                        <a class="text-lg text-black block mb-3" href="<?php the_permalink(); ?>" >  <?php the_title();  ?>  </a> 
                        <?php endwhile;
                    else:
                        printf('<p>Sin contenido</p>');
                    endif;
                    rewind_posts();  ?>    
                    <!-- End While post type services -->  
            </main>
   </div>   
 </div>
<div class="mt-20 h-56" >

</div>

 <?php get_footer(); ?>