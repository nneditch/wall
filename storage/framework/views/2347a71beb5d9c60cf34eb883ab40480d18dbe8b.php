<?php $__env->startSection('content'); ?>
    
    <div class="sections-wrapper" style="margin-top:60px;">   
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
      
			<div class="container" style="max-width:800px;">
                <h2 class="intro" style="text-align:left;">ARCHIVE</h2>
				
			
				<div class="blog-list blog-category-list">
                    <?php $__currentLoopData = $archive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php echo $__env->make('posts.archive', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                </div><!--//blog-list-->  
				
                
                
                
            </div><!--//container-->
        </section><!--//why-->  
        
        
        
        
        
        
        
		</div><!--//section-wrapper-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>