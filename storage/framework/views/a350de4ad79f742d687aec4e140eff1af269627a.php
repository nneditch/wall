<?php $__env->startSection('content'); ?>
	<div class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
            <ul class="slides">
                <li style="background: url('https://s3-us-west-1.amazonaws.com/wallofus/IMG_0132.JPG') no-repeat 50% top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;" class="slide slide-1" ></li>
				
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->     
	
	<section class="promo section section-on-bg">
        <div class="container text-center">                
            <h3 class="sub-title">he promised a wall.</h3><span class="title">he will be stopped by a wall of us.</span>
            <p class="intro">FOUR CONCRETE ACTS OF RESISTANCE
				DELIVERED TO YOUR INBOX EACH WEEK</p>
			<?php if(Auth::check()): ?>
            <p><a class="btn btn-cta btn-cta-secondary" href="/actions" target="_blank">Take Action</a></p>   
			<?php else: ?>
			<p><a class="btn btn-cta btn-cta-secondary" href="/signup" target="_blank">Sign Up Now</a></p>
			<?php endif; ?>
            <!--<button type="button" class="play-trigger btn-link " data-toggle="modal" data-target="#modal-video" ><i class="fa fa-youtube-play"></i> Watch the video</button>-->
        </div><!--//container-->
    </section><!--//promo-->
    
    <div class="sections-wrapper">   
    <!-- ******BLOG LIST****** --> 
	<section id="why" class="section why">
		<div class="container"  style="max-width:800px;">
            <h2 class="intro" style="text-align:left;">4 WEEKLY ACTS OF RESISTANCE</h2>
			
            <div class="row">
                <div id="blog-mansonry" class="blog-list">
                    
				<?php $__currentLoopData = $posts->slice(0, 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div><!--//blog-list-->  
			</div><!--//row-->
                
		</div><!--//container-->
	</section><!--//why-->  
	</div><!--//section-wrapper-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>