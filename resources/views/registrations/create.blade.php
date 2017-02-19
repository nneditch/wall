@extends ('layouts.logins')

@section ('content')




<!-- ******Login Section****** --> 
        <section class="login-section access-section section">
            <div class="container">
                <div class="row">
                    <div class="form-box col-md-offset-2 col-sm-offset-0 xs-offset-0 col-xs-12 col-md-8">     
                        <div class="form-box-inner">
                            <h2 class="title text-center">Sign Up</h2>                 
                            <div class="row">
                                <div class="form-container col-xs-12 col-md-5">
                                    <form class="login-form" method="POST" action="/signup"> 
										{{ csrf_field() }}	
										<div class="form-group name">
                                            <label class="sr-only" for="name">Name</label>
                                            <input id="name" name="name" type="text" class="form-control login-email" placeholder="Name">							
										</div><!--//form-group-->	
                                        <div class="form-group email">
                                            <label class="sr-only" for="email">Email or username</label>
                                            <input id="email" name="email" type="email" class="form-control login-email" placeholder="Email">
                                        </div><!--//form-group-->
                                        <div class="form-group password">
                                            <label class="sr-only" for="password">Password</label>
                                            <input id="password" name="password" type="password" class="form-control login-password" placeholder="Password">
										</div><!--//form-group-->
										<div class="form-group password">
                                            <label class="sr-only" for="password_confirmation">Password</label>
                                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control login-password" placeholder="Confirm Password">
                                            <p class="forgot-password"><a href="reset-password.html">Forgot password?</a></p>
                                        </div><!--//form-group-->
										@include ('layouts.errors')
                                        <button type="submit" class="btn btn-block btn-cta-primary">Sign Up</button>
                                        <div class="checkbox remember">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div><!--//checkbox-->
                                         <p class="lead">Already have a Wall-of-Us account yet? <br /><a class="signup-link" href="/login">Log in now</a></p>  
										  
                                    </form>
                                </div><!--//form-container-->
                                <div class="social-btns col-md-offset-1 col-sm-offset-0 col-sm-offset-0 col-xs-12 col-md-5">  
                                    <div class="divider"><span>Or</span></div>                      
                                    <ul class="list-unstyled social-login">
                                        <li><button class="twitter-btn btn" type="button"><i class="fa fa-twitter"></i>Log in with Twitter</button></li>
                                        <li><button class="facebook-btn btn" type="button"><i class="fa fa-facebook"></i>Log in with Facebook</button></li>
                                        <li><button class="github-btn btn" type="button"><i class="fa fa-github-alt"></i>Log in with Github</button></li>
                                        <li><button class="google-btn btn" type="button"><i class="fa fa-google-plus"></i>Log in with Google</button></li>
                                    </ul>
                                </div><!--//social-btns-->
                            </div><!--//row-->
                        </div><!--//form-box-inner-->
                    </div><!--//form-box-->
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//contact-section-->
    </div><!--//upper-wrapper-->

@endsection