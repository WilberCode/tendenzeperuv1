
<?php 
get_header();?>

<div class="banner bg-primary-500 ">
    <?php echo do_shortcode('[metaslider id="15"]'); ?>
</div>

<main class="main" >
   <div class="container">
        <section  class="main-excerpt m-auto text-center pt-12 md:pt-16" >
            <h2  class="text-4xl font-normal main__title" >Seguimos las tendencias para poder crear en el cambio y adelantarnos a lo que se viene </h2>
            <p class="text-xl" >Con más de 15 años de experiencia en marketing y publicidad nuestro rol en esta época difícil para
            todos pero principalmente para las pequeñas empresas es apoyarlas.
            “Nuestro compromiso es convertirnos en tu aliado para hacer crecer tu negocio. El mundo no para,
            solo cambia. Cambia tú también la forma de comunicar con soluciones creativas y digitales”</p>
        </section>
   </div>
</main> 
<?php get_template_part( 'templates/post/services-grid'); ?> 
<div class="advisory mt-26 bg-gray-300" id="advisory">
    <div class="container">
        <div class="md:flex py-12 w-full">
            <div class=" w-full md:w-1/2 " >
              <img class=" w-full max-w-md md:pl-3 md:pr-5" src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/Asesoría.png" >
            </div>
            <div class=" w-full md:w-1/2 mt-8 md:mt-0">
                <span  class="text-xl font-bold text-secondary-800 " >Asesoría</span>
                <h2  class="text-4xl font-normal " >Brand Journey</h2>
                <h3 class="text-xl font-semibold mt-3 leading-6 text-secondary-600 " >Tu marca ¿Tiene una propuesta <br>
de valor para el nuevo mundo?</h3>

            <p  class=" text-lg tracking-wide text-secondary-400  " >
            Nuestro servicio de consultoría comprende una metodología única
para encontrar la esencia de la marca. <br>
                A través de un proceso de investigación del análisis de la información,
                la categoría, la competencia y las motivaciones del consumidor identificamos el rol que tu marca debe cumplir para desarrollar relaciones
                sólidas y auténticas con el consumidor.
                </p>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=998315039&text=Hola%20Tendenze%20Per%C3%BA.%20Necesito%20m%C3%A1s%20informaci%C3%B3n"  class=" inline-block mt-5 py-2 px-8 text-black  border border-black font-bold   tracking-widest " >me interesa</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="line w-full border-t border-secondary-600 my-12  max-w-5xl m-auto"></div>
</div>

<div class="foundress bg-primary-500 py-20" id="foundress" >
    <div class="container">
        <div class=" grid md:grid-cols-2 gap-10 md:gap-16 lg:gap-24 ">
            <div class="  flex justify-end items-center" >
                <div  class="text-right pr-8 " >
                    <h2 class="font-semibold text-secondary-600" >Martina Anfossi</h2>
                        <h3 class="text-secondary-500 leading-6 mt-1 font-medium " >Fundadora <br>
                        Directora de cuentas <br>
                        & estrategia</h3>
                </div>
                <img class="foundress-avatar  rounded-full " src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/Screen-Shot-2020-04-15-at-6.01.24-PM.png" alt="">
            </div>
            <div class="flex justify-start items-center" >
                <img class="foundress-avatar  rounded-full " src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/karina.jpg" alt="">
                <div  class="pl-8" >
                        <h2 class="font-semibold text-secondary-600" >Martina Anfossi</h2>
                            <h3 class="text-secondary-500 leading-6 mt-1 font-medium " >Fundadora <br>
Directora Creativa</h3>
                </div> 
            </div>
        </div>
        <div>
            <p  class="text-center max-w-5xl font-medium m-auto mt-8 text-secondary-500 text-lg " >Grupo Tendenze Comunicaciones. Más de 15 años de trayectoria en publicidad, marketing y comunicación digital. <br>
            Como tú sabemos que la comunicación es lo más importante para tu empresa. Hemos trabajado <br>
            campañas offline, online y 360 para variedad de categorías. ¿Listo para el cambio?</p>
        </div>
    </div>
 </div>  
 <?php 
 //get_template_part( 'templates/views/front' ); 
get_footer();
?>