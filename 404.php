
<?php 
get_header(); ?>
<?php 
get_header();?>
 <div class="notfound"> 
    <div class="notfound-content ">
        <h1 class="notfound__title">¡Oops!... Página no encontrada</h1>
        <p class="notfound__description">
            La página que buscas no existe, probablemente el enlace que usaste es erróneo, intenta ubicarlo en la página principal o usa el buscador para encontrar lo  que buscas:
        </p> 
        <div class="notfound-search">
            <?php get_search_form(true); ?>
        </div> 
        <a class="notfound__link" href="<?php esc_url(home_url("/"));?>">Volver a la página principal</a>
    </div> 
 </div>    
 
 <?php 
get_footer();
?>