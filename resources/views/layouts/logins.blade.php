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



<body class="login-page access-page has-full-screen-bg" >
    <div class="upper-wrapper" style="background: url('https://nneditch.github.io/wall-of-us/assets/images/background/bg-screen-1.jpg') no-repeat 50% top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        <!-- ******HEADER****** -->
        <header class="header">  
            <div class="container">       
                <h1 class="logo">
                    <a href="/"><span class="logo-icon"></span><span class="text">Wall-of-Us</span></a>
                </h1><!--//logo-->
                                     
            </div><!--//container-->
        </header><!--//header-->           
      
    @yield('content')
    
	@include ('layouts.footer')
	
	
	</body>
	</html> 