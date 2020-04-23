
<?php get_template_part( 'templates/partials/document-open' ); ?>

<!-- Site header markup goes here -->
<header class="shadow bg-white header">
    <div class=" w-full bg-secondary-500 relative  z-40 " >
       <div class="container m-auto flex h-12 md:h-16  justify-between">
             <div class="h-full"> 
                <a class="text-white  block h-full" href="<?php echo home_url();?>" rel="home">
                    <?php echo  '<h1 class=" text-sm md:text-base lowercase h-full flex items-center font-semibold ">'.get_bloginfo( "name" ).'</h1>'; ?>
                </a> 
            </div>
            <div class=" "> 
            <a  class="h-full  flex items-center text-white " target="_blank"  href="https://api.whatsapp.com/send?phone=+51998315039&text=Hola%20Tendenze%20Per%C3%BA.%20Necesito%20m%C3%A1s%20informaci%C3%B3n"> Contacto </a>
            </div>
       </div>
    </div>
    <div class="header-wrap container m-auto flex h-20 md:h-26 justify-center "> 
        <div class=" flex  justify-center items-center " >
             <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'main',
                    'container'       => 'nav',
                    'container_class' => 'header-nav',
                    'container_id'    => 'header-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'header-menu',
                    'menu_id'         => 'header-menu',
                ));  
            ?> 
            <div class="mobile-nav-wrap" id="mobile-nav-wrap"  > 
                <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'mobile',
                    'container'       => 'nav',
                    'container_class' => 'mobile-nav',
                    'container_id'    => 'mobile-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'mobile-menu',
                    'menu_id'         => 'mobile-menu' ,
                ));  
            ?> 
            </div>
             <div class="nav-toggle-wrap block md:hidden ">
                <button  id="nav-toggle" class="nav-toggle focus:outline-none border-none">  
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span>  
                </button>
             </div>   
        </div>
    </div>
</header>