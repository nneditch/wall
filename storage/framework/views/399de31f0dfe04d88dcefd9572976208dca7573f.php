

<article class="post col-6 col-sm-3">
	<div class="post-inner">
        <figure class="post-thumb">
            <a href="/posts/<?php echo e($post->id); ?>"><div style="height:235px; width:175px; background-image: url('<?php echo e($post->image); ?>'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;"  /></div>                                
        </figure><!--//post-thumb-->
        <div class="content">
            <h3 class="post-title" style="text-transform:uppercase"><a href="/posts/<?php echo e($post->id); ?>">ACTION <?php echo e($post->action); ?>: <?php echo e($post->title); ?></a></h3>
            <div class="post-entry">
                <p><?php echo e($post->shortbody); ?></p>
				<p><a href="/posts/<?php echo e($post->id); ?>">Read more -></a></p>
            </div>
            
        </div><!--//content-->
    </div><!--//post-inner-->
</article><!--//post-->
