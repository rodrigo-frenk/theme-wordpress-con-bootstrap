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
    
    	<div class="col-xs-4">
        	<div>ISBN</div>
	        <?php echo get_post_meta( get_the_ID(), 'isbn', true  ); ?>
        </div>
    	<div class="col-xs-4">
	        <div>Precio</div>
			<?php echo get_post_meta( get_the_ID(), 'precio', true  ); ?>
        </div>
        <div class="col-xs-4">
       		 <div>Sello editorial</div>
	        <?php echo get_post_meta( get_the_ID(), 'sello_editorial', true  ); ?>
        </div>
    
    </div>


	<div class="row">
    <!--.imagen.col-md-4+.contenido.col-md-8-->
	<div class="imagen col-md-4">
    	<?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
    </div>
	<div class="contenido col-md-8">
		<?php echo get_the_content(); ?>    
    </div>
    
    </div>

</div>

   <?php endwhile; endif; ?>


<?php get_footer(); ?>