<!-- Site footer markup goes here -->

<?php if(!is_page('1ra-feria-digital-mama')){?>
    <?php get_template_part( 'templates/partials/document-close' );?>
 <?php } else{ ?>
    <footer  class="bg-secondary-500 w-full py-6 " > 
        <div  class="container" >
        <p  class="text-white text-xs font-medium text-justify text-gray-400 tracking-wider  " >La 1ra Feria Digital es una iniciativa solidaria para apoyar sin costo a empresas que necesitan vender online sus servicios respetando la cuarentena. La modalidad de entrega
            del producto o servicio se hará con gift card digitales o via delivery propio autorizado de la misma empresa participante. Nuestro apoyo solo es a nivel de difusión no nos
            responsabilizamos por las transacciones entre empresa y comprador final así como de la entrega del regalo. #YoMeQuedoEnCasa</p> 
        </div>
    </footer>
<?php } ?>  

<?php wp_footer() ?>  

</body>
</html>

