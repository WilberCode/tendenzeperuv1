 
 
    
   <div class="max-w-6xl m-auto  shadow">  
         <!-- <img  class="w-full " src="https://d2fc2l3thsf47o.cloudfront.net/images/e-content-banner.jpg" alt="">    -->
       
        <div class="flex">
            <div class="w-2/3">
                 <h1 class="" >Contenido Principal 1</h1>
                <h2  class="" >Contenido Principal 2</h2>
                <h3  class="" >Contenido Principal 3</h3>
                <h4  class="" >Contenido Principal 4</h4>     
                <h5  class="" >Contenido Principal 5</h5>
            </div>
            <div class="w-1/3 p-4">
                
            </div>
        </div> 
   </div>     
   <div class="container h-10"> 
   </div>  
   <div class="container m-auto">
       <div class="grid grid-cols-3 gap-5">
           <div class="main col-span-2 ">
            <!-- tabs -->
            <div  class="" >
                <ul class="tab" id="tab" >
                    <li class="tab-item" > <a href="#temario">Temario</a> </li>
                    <li class="tab-item" > <a href="#certificado">Certificado</a> </li>
                    <li class="tab-item" > <a href="#conferencistas">Conferencistas</a> </li>
                    <li class="tab-item" > <a href="#inversion">Inversion</a> </li> 
                </ul>
            </div> 
            <!-- tab contenido -->
            <div class="tab-body pt-5">  
                <?php
                    // args
                    $args = array(
                        'numberposts'	=> -1,
                        'posts_per_page'   => 2,
                        'post_type'		=> 'mis_congresos'
                    ); 
                    // query
                    $the_query = new WP_Query( $args );  
                    if( $the_query->have_posts() ): 
                        while( $the_query->have_posts() ) :$the_query->the_post(); ?>  
                                <div  > 
                                  <?php  if( have_rows('congreso_presentacion')):  
                                                    while ( have_rows('congreso_presentacion') ) : the_row();   	
                                                        $congreso_presentacion_titulo = get_sub_field('congreso_presentacion_titulo');  
                                                        $congreso_presentacion_descripcion = get_sub_field('congreso_presentacion_descripcion');
                                                    ?>
                                                      <div class="mt-8">
                                                         <h2> <?php echo $congreso_presentacion_titulo ?> </h2>  
                                                         <?php echo $congreso_presentacion_descripcion ?> 
                                                      </div>  
                                                <?php   
                                                    endwhile; 
                                            else : 
                                                    echo '<span class="bg-info">Sin Presentacion</span>'; 
                                            endif; 
                                            ?>
                                </div>
                                <div   id="temario" class=" temario section scrollspy" > 
                                    <h2>Ejes temáticos</h2>
                                   <div class="text-center">
                                        <a class="py-3 px-4 rounded bg-blue-500 text-white inline-block " href="http://#">Descargar Temario</a>
                                    </div> 
                                    <ul class="collapsible">
                                    <?php 
                                        if( have_rows('congreso_temario')):  
                                            while ( have_rows('congreso_temario') ) : the_row(); 	      ?>	
                                                        <li class="collapsible-item" >  
                                                            <div class="collapsible-header"><h4><?php echo get_sub_field('congreso_temario_titulo');  ?></h4></div>
                                                            <div class="collapsible-body"><?php echo get_sub_field('congreso_temario_descripcion');  ?> </div>
                                                        </li>
                                            <?php   
                                            endwhile; 
                                            else : 
                                            echo '<span class="bg-info">Sin Temario</span>'; 
                                         endif; 
                                        ?>
                                  </ul> 
                               </div>  
                               <div id="conferencistas" class="mb-8  section scrollspy"> 
                                <h2  class="tabs-info__show-title" > Conferencistas Magistrales </h2>
                                <div class="mt-3 "> 
                                <?php 
                                    if( have_rows('congreso_conferencistas')):  
                                            while ( have_rows('congreso_conferencistas') ) : the_row();  
                                                        $image = get_sub_field('congreso_conferencista_foto');  	
                                                        $biografia = get_sub_field('congreso_conferencista_biografia');  
                                                ?>
                                                <div class="flex flex-wrap ">
                                                    <div class=" w-full  md:w-1/3  flex items-center justify-center "> 
                                                       <div class="text-center" >
                                                       <picture>
                                                            <img class="rounded-full w-24 m-auto"  src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                                        </picture>   
                                                        <?php if( have_rows('congreso_conferencista_datos') ):  
                                                                while( have_rows('congreso_conferencista_datos') ): the_row(); ?>   
                                                                    <h4 class="mt-2" > <?php echo get_sub_field('congreso_conferencista_nombres');?> </h4>
                                                                    <span class="text-sm" >(<?php echo get_sub_field('congreso_conferencista_especialidad');?>)</span> 
                                                                <?php endwhile; ?> 
                                                        <?php else: echo '<span class="bg-info">No hay Conferencistas</span>';  
                                                    endif; ?>  
                                                       </div>
                                                    </div>
                                                    <div class=" w-full md:w-2/3">
                                                        <div class=" text-center md:text-left text-sm">
                                                            <?php echo $biografia; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php   
                                            endwhile; 
                                    else : 
                                            echo '<span class="bg-info">No hay Conferencistas</span>'; 
                                    endif;

                                    ?>                    
                        </div> 
                               
                    <!-- End While post type -->
                    <?php endwhile;
                    else:
                        printf('<p>No hay entradas</p>');
                    endif;
                    rewind_posts();  ?> 
                  
               
                <div id="certificado" class="mb-8  section scrollspy">
                    <h2>Certificado</h2>  
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                      <p class="mt-12" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    
                </div>  
                <div id="inversion" class="mb-8  section scrollspy">
                    <h2>Inversion</h2>  
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    <p class="mt-12" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    <p class="mt-12" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos optio facere, obcaecati alias soluta, dolore porro fugit eos eaque praesentium voluptate dolores non rem earum voluptatem distinctio nihil consequatur incidunt!</p>
                    
                    
                </div> 
            </div>
           </div>
            <div class="aside">
                <article  class="rounded shadow overflow-hidden" > 
                        <a href="#">
                        <figure>
                            <img src="https://i.ytimg.com/vi/x_JbIl9SS0E/maxresdefault.jpg" alt="">
                        </figure> 
                        <div  class="p-6" >
                            <h1>Title</h1>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet. dw</p>
                        </div>
                        </a>
                  </article>
            </div>
       </div>
   </div>


 

   <div class="mb-8"    >
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa esse deleniti error, pariatur, tempore fugiat in commodi voluptatibus cupiditate quia possimus, nulla asperiores! Ratione, alias. Iusto magnam officiis quis quod.</p>
   </div>
  
   <div class="mb-8 h-56"   >
    </div>
  
   <div class="mb-8 h-56"   >
    </div>
   <div class="mb-8 h-56"   >
    </div>