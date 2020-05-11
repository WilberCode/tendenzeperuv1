
<?php 
get_header();?>

<div class="banner bg-primary-500 ">
    <?php echo do_shortcode('[metaslider id="15"]'); ?>
</div> 
    <?php get_template_part( 'templates/views/front-bio');?>   



<?php //dynamic_sidebar('advisory'); ?>


<?php get_template_part( 'templates/views/front-advisory');?> 

<?php get_template_part( 'templates/post/services-grid'); ?> 
 
<div class="container">
    <div class="line w-full border-t border-secondary-600 my-12  max-w-5xl m-auto"></div>
</div>

 <?php get_template_part( 'templates/views/front-foundress');?>

 <?php  
get_footer();
?>