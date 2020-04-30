<?php
/*
 * Template Name: Celebración
 * Template Post Type: post, page, whatever
 */

get_header();?>
<?php $file = './tailwind.js';?>  
 <!-- <code> 
                    <pre>
                    <?php // print_r($categories);?>
                    </pre>
                </code> -->
<div class="celebration">
    <div class="celebration-banner bg-white">
        
             <?php   

                if (file_exists(dirname(__FILE__) . $file)) {  
                    echo do_shortcode('[metaslider id="108"]');
                }else{
                    echo do_shortcode('[metaslider id="186"]');
                }
                ?> 
    </div>  
</div>

<div class=" pt-10 sm:pt-20 px-4 xl:px-0">   
   <div class="max-w-5xl m-auto">
        <!-- Start - Categories Lists -->
        <ul  class="  marca-categories mb-10 " >
            <li class="marca-category-filter marca-category-active" > <a id="marca-todos" href="<?= get_home_url('/')."/1ra-feria-digital-mama/" ?>">Todo</a>/</li>
            <?php 
                $cat_args = array(
                    'post_type'		=> 'marca',
                    'exclude' => array(1),
                    'option_all' => 'All'
                );  
                $categories = get_categories($cat_args);
                $i = 1?> 
                <?php   foreach($categories as $cat):?>
                  
                    <li class="marca-category-filter" >   <a data-categorymarca ="<?= $cat->slug ?>" href="<?= get_category_link($cat->term_id); ?>"> <?= $cat->name;?></a> <?php if($i== 6){ echo ""; }else{ echo "/";} ?> </li> 
                    <?php 
                     $i++; 
                      ?>
                <?php endforeach; ?>
        </ul>  
        <!-- End - Categories Lists -->

        <!-- Start - Grid Marcas-->
        <div id="marca-grid"  class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4  row-gap-12 sm:row-gap-16  col-gap-4 sm:col-gap-6" > 
        <?php
        //Query post services
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
                       <div class="marca-card" data-postidmarca="<?php the_ID(); ?>" >
                             <div  class="marca-card-image flex justify-center items-center h-56 sm:h-65 p-4 " >
                                 <img  class="w-full"   src=" <?php  echo thumbnail_image_url('full');  ?>" >  
                             </div>
                            <h2  class="text-lg font-medium text-secondary-300 mt-2 " >Ver Regalos</h2>
                        </div> 
                        <?php  endwhile;
                else:
                    printf('<p>Sin contenido</p>');
                endif;
                rewind_posts(); 
                ?>  
        </div> 

        <div class="marca-modal"  id="marca-modal" > 
            <div class="marca-modal-body" id="marca-modal-body" >
                <span  class="marca-modal-close">X</span>
                <div class="marca-modal-info" id="marca-modal-info">  
                </div>
            </div> 
        </div>     
  </div>
 </div>
 <!-- <div  class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-20 " >
    <div>
        <img  class=" w-20 sm:w-auto "  src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/corazon.png" alt="">
        <p  class=" text-lg sm:text-2xl sm:mt-32 pt-12 " >Aquí una reseña de lo que es la marca.
        Que estilo de regalos y qué variedad
        pueden encontrar. Lo más destacado
        de la marca. Lo que la diferencia.</p>
        <p class="text-base sm:text-lg">Aquí irían condiciones de la marca. Como de
        envio, de procesos. Algo que destacar.</p>
        <h2  class="text-lg sm:text-xl font-bold mt-10 sm:mt-20" >¿Dónde comprar?
        </h2>
        <p class="text-lg sm:text-xl" >Dirección 1 - web <br>
        Dirección 2 - facebook <br>
        Dirección 3 - instagram <br>
        Teléfono</p>
    </div>
    <div>
        <img  class="mt-6 sm:mt-10" src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/iStock-1143611754.jpg" alt="">
        <img  class="mt-3" src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/iStock-1097629546.jpg" alt="">
        <img  class="mt-3" src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/iStock-1097629546.jpg" alt="">
    </div>  
</div> -->


<div class="h-20" >

</div>

 <?php get_footer(); ?>