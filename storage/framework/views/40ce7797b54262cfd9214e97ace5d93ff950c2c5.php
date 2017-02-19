
<article class="post col-xs-12 col-md-12">
    <div class="post-inner">
        <div class="content">
            <div class="date-label">
                <span class="month"><?php echo e(Carbon\Carbon::parse($post->week)->format('F j, Y')); ?></span>
            </div>
            <h3 class="post-title"><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
			
            <div class="post-entry">
                <p><?php echo str_limit($post->body, $limit = 300, $end = '...'); ?></p>
                <a class="read-more" href="/posts/<?php echo e($post->id); ?>">Read more <i class="fa fa-long-arrow-right"></i></a>
            </div>                                
        </div><!--//content-->
    </div><!--//post-inner-->
</article><!--//post-->