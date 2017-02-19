@extends ('layouts.master')


@section ('content')

		<!-- ******BLOG****** -->         
        <div class="blog-entry-wrapper"> 
            <!--
            <div class="blog-headline-bg">
            </div><!--//blog-headline-bg-->
            <div class="blog-entry">                 
                <article class="post">
                    <header class="blog-entry-heading"  style="background: url('{{ $post->image }}') no-repeat 50% top; background-size: cover;">
                        <div class="container text-center">                        
                            <h2 class="title" style="text-transform:lowercase">{{ $post->title }}</h2>
                            <div class="meta">
                                <ul class="meta-list list-inline">                                       
                                	<li class="post-time">{{ Carbon\Carbon::parse($post->week)->format('F j, Y') }}</li>
                            	</ul><!--//meta-list-->    	
                            </div><!--meta-->
                        </div><!--//container-->
						<nav class="post-nav post-nav-top">
							@if($previous)
    						<span class="nav-previous"><a href="{{ $previous->id }}" rel="prev"><i class="fa fa-long-arrow-left"></i><</a></span>
							@endif
							@if($next)
    						<span class="nav-next"><a href="{{ $next->id }}" rel="next">><i class="fa fa-long-arrow-right"></i></a></span>
							@endif
    				    </nav><!--//post-nav-->
                    </header><!--//blog-entry-heading-->

                    <div class="container">
                        <div class="row">
                            <div class="blog-entry-content col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                                {!! $post->body !!}
                            </div><!--//blog-entry-content-->
                            
                        </div>
                            <!--//Soical media buttons -->
                            <div class="share-container col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                                
                
                                <!-- Buttons start here. Copy this ul to your document. -->
			    						<ul class="social list-inline">
			                                <li><a href="https://twitter.com/1beautifulwall" target="_blank"><i class="fa fa-twitter"></i></a></li>
			                                <li><a href="https://www.facebook.com/1beautifulwall/"><i class="fa fa-facebook"></i></a></li>
											<li><a href="mailto:contact@wall-of-us.org"><i class="fa fa-envelope"></i></a></li> 
			                            </ul>
                                    </li>
                                    
                                </ul><!-- Buttons end here -->
                            </div><!--//share-container--> 
                            
                            
                            
                            <nav class="post-nav col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
									@if($previous)
            						<span class="nav-previous"><a href="{{ $previous->id }}" rel="prev"><i class="fa fa-long-arrow-left"></i>Previous Action</a></span>
									@endif
									@if($next)
            						<span class="nav-next"><a href="{{ $next->id }}" rel="next">Next Action<i class="fa fa-long-arrow-right"></i></a></span>
									@endif
            				</nav><!--//post-nav-->
            				
            				
            				
                        </div><!--//row-->
                    </div><!--//container-->                                               
                </article><!--//post-->                                      
            </div><!--//blog-entry-->
        </div><!--//blog-entry-wrapper-->  
    </div><!--//wrapper-->
@endsection
