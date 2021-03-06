<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
    <title>Wall-of-Us</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
	<script src="https://use.typekit.net/oht7xro.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
	<link rel="stylesheet" href="https://nneditch.github.io/wall-of-us/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/flexslider.css">
    <!-- Theme CSS -->
	 <!-- social media buttons -->
	 <link rel="stylesheet" href="https://nneditch.github.io/wall-of-us/assets/plugins/rrssb/css/rrssb.css" />
	
    <link id="theme-style" rel="stylesheet" href="/css/app.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 


<body class="blog-page blog-page-single">    
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header id="header" class="header header-blog">  
            <div class="container">       
                <h1 class="logo">
                    <a href="/"><span class="text">wall-of-us</span></a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->
                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a href="/">Home</a></li>
						<li class="nav-item"><a href="/actions">Weekly Acts</a></li>
						<li class="nav-item"><a href="/bricks">Brick-by-brick</a></li>
						<?php if(Auth::check()): ?>
							<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php else: ?> 
							<li class="nav-item"><a href="/login">Log in</a></li>
							<li class="nav-item cta"><a class="btn btn-cta btn-cta-secondary" href="/signup">Sign Up</a></li>
						<?php endif; ?>
                        </ul><!--//nav-->
                        
                        
                        
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->                     
            </div><!--//container-->
        </header><!--//header-->                
      
    <?php echo $__env->yieldContent('content'); ?>
    
	<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	
	</body>
	</html> 