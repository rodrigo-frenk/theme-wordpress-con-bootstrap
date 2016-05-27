<?php get_header(); ?>



<?php 
if( have_posts() ) :
	while( have_posts() ) :
		the_post();
?>

<!--.container-->
<div class="container">

    <h1>
        <?php echo get_the_title(); ?>
    </h1>



	<div class="row">
    <!--.imagen.col-md-4+.contenido.col-md-8-->
	
	<div class="contenido col-md-9">
		<?php echo get_the_content(); ?>    
    </div>
    
    <div class="imagen col-md-3">
    	<?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
    </div>
    
    </div>

</div>

   <?php endwhile; endif; ?>


<?php get_footer(); ?>