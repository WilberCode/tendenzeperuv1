<div class="services pt-20" id="packsonline" >
    <div class="container ">
        <div class="services-grid grid sm:grid-cols-2  lg:grid-cols-3 col-gap-5 md:col-gap-12 row-gap-16 ">
        <?php
            // Query post services
            $args = array(
                'post_type'		=> 'servicio',
                'numberposts'	=> -1,
                'post_status' => 'publish',
                'posts_per_page'   => 6
            ); 
            // query
            $the_query = new WP_Query( $args );  
            if( $the_query->have_posts() ): 
                while( $the_query->have_posts() ) :$the_query->the_post(); ?>   
                    <a class="card" href="<?php the_permalink(); ?>" id="<?php echo get_the_ID(); ?>" >
                        <img class="w-full flex-1" src="<?php echo thumbnail_image_url('full'); ?>" alt="<?php the_title(); ?>">
                        <div class="card-body">  
                            <h1  class="card__title"><?php the_title();  ?></h1>
        
                            <div class="card-descriptions" > 
                                <?php  if( have_rows('servicio_descripciones')):  
                                            while ( have_rows('servicio_descripciones') ) : the_row();   	
                                                $servicio_descripcion = get_sub_field('servicio_descripcion');   
                                            ?>
                                                <p> <?php echo  $servicio_descripcion ?> </p>  
                                        <?php   
                                            endwhile; 
                                    else : 
                                            echo '<span class="bg-info">Sin descripcion</span>'; 
                                    endif; 
                                    ?>
                            </div>  
                        </div>
                        <div class="card-footer">
                            <div  class="card-price" >
                                <div class="card-price-description" >
                                    <span class="card-price-from">desde</span>
                                    <span class="card-price-simbol" >US$</span>
                                </div>
                                <var><?php the_field('servicio_precio'); ?>  </var>
                            </div>
                            <button class="btn card__more ">quiero ver más</button> 
                        </div> 
                    </a> 
        
                <?php endwhile;
            else:
                printf('<p>No hay entradas</p>');
            endif;
            rewind_posts();  ?>    
            <!-- End While post type services -->
        </div>
    </div>
</div>
 
 