<?php get_header(); ?>


<section>
  <div class="jumbotron text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs12">
          <h1>Lorem ipsum dolor sit.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, deleniti, ea nisi suscipit atque tempore aspernatur harum unde veritatis neque rem dolores assumenda. Recusandae facilis dolores cum iste assumenda accusamus.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, magni, doloribus, possimus eum sapiente deleniti doloremque fugit ut expedita molestiae iusto debitis eveniet modi obcaecati ipsam quos quis labore dicta.</p>
      </div>
    </div>
  </div>
</section>



<section>
  <div class="container well">
    <div class="row">
    
    
    <?php
	if( have_posts() ) :
	while( have_posts() ) :
		the_post();
	?>
    
      <div class="col-lg-4 col-md-4 col-sm-6">
      
        <a href="<?php echo get_the_permalink(); ?>">
        
            <div class="media">
              <div class="media-left">
                <?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
              </div>
              <div class="media-body">
                <h2 class="media-heading">
                    <?php echo get_the_title(); ?>
                </h2>
                <?php echo get_the_excerpt(); ?>
                 </div>
            </div>
        
        </a>
        
      </div>
      
   <?php endwhile; endif; ?>
      
    </div>
  </div>
</section>


<section>
	<div class="container">
		<div class="row">
        	<div class="col-lg-12 text-center">
            	<h2>Latest Work</h2>
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, et, placeat !</p>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6 text-center">
            	<img src="images/400x400.gif" alt="">
                <h3>Lorem ipsum dolor sit amet, consectetur elit</h3>
                <h6>Lorem ipsum dolor sit amet, consectetur elit</h6>
            </div>
        	<div class="col-md-6 text-center">
            	<img src="images/400x400.gif" alt="">
                <h3>Lorem ipsum dolor sit amet, consectetur elit</h3>
                <h6>Lorem ipsum dolor sit amet, consectetur elit</h6>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-3 text-center col-sm-6 col-xs-6"><img src="images/200x200.gif" alt=""></div>
        	<div class="col-md-3 text-center col-sm-6 col-xs-6"><img src="images/200x200.gif" alt=""></div>
			<div class="col-md-3 text-center col-sm-6 col-xs-6 hidden-xs hidden-sm"><img src="images/200x200.gif" alt=""></div>
        	<div class="col-md-3 text-center col-sm-6 col-xs-6 hidden-xs hidden-sm"><img src="images/200x200.gif" alt=""></div>
      </div>
      <hr>
        <div class="row">
          <div class="col-md-3 text-center col-sm-6 col-xs-6"><img src="images/200x200.gif" alt=""></div>
          <div class="col-md-3 text-center col-sm-6 col-xs-6"><img src="images/200x200.gif" alt=""></div>
          <div class="col-md-3 text-center col-sm-6 col-xs-6 hidden-xs hidden-sm"><img src="images/200x200.gif" alt=""></div>
          <div class="col-md-3 text-center col-sm-6 col-xs-6 hidden-xs hidden-sm"><img src="images/200x200.gif" alt=""></div>
        </div>
	</div>
</section>
<hr>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, magni, doloribus, possimus eum sapiente deleniti doloremque fugit ut expedita molestiae iusto debitis eveniet modi obcaecati ipsam quos quis labore dicta.</p>
		<button type="button" class="btn btn-success">Get in touch</button>
      </div>
    </div>
  </div>
</section>
<hr>
<div class="section well">
    <div class="container">
   	  <div class="row">
		<div class="col-lg-4 col-md-4">
            <h3 class="text-center">WHO WE ARE</h3>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, ducimus, sit, quibusdam quidem recusandae veniam eos quod error nisi repellat excepturi laboriosam aspernatur suscipit possimus consectetur dolores nihil labore quas eius illo accusamus nulla sed blanditiis porro accusantium. Perspiciatis, perferendis!</h5>
        </div>
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">GET IN TOUCH</h3>
          <address class="text-center">
  <strong>MyCompany, Inc.</strong><br>
  Sunny Autumn Plaza, Grand Coulee,<br>
  CA, 91308-4075, US<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
</div>
		<div class="col-lg-4 col-md-4">
		  <h3 class="text-center">NEWSLETTER</h3>
          <form>
    <div class="form-group col-lg-9 col-md-8 col-sm-10 col-xs-10">
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
<button type="submit" class="btn btn-default">Subscribe<br>
</button>
</form>
		</div>
</div>
    </div>
	</div>

<?php get_footer(); ?>