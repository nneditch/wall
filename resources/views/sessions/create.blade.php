@extends ('layouts.logins')

@section ('content')




        <!-- ******Login Section****** --> 
        <section class="login-section access-section section">
            <div class="container">
                <div class="row">
                    <div class="form-box col-md-offset-2 col-sm-offset-0 xs-offset-0 col-xs-12 col-md-8">     
                        <div class="form-box-inner">
                            <h2 class="title text-center">Log in</h2>                 
                            <div class="row">
                                <div class="form-container col-xs-12 col-md-5">
                                    <form class="login-form" method="POST" action="/login"> 
										{{ csrf_field() }}										
                                        <div class="form-group email">
                                            <label class="sr-only" for="email">Email</label>
                                            <input id="email" name="email" type="email" class="form-control login-email" placeholder="Email or username">
                                        </div><!--//form-group-->
                                        <div class="form-group password">
                                            <label class="sr-only" for="password">Password</label>
                                            <input id="password" name="password" type="password" class="form-control login-password" placeholder="Password">
                                            <p class="forgot-password"><a href="reset-password.html">Forgot password?</a></p>
                                        </div><!--//form-group-->
										@include ('layouts.errors')
                                        <button type="submit" class="btn btn-block btn-cta-primary">Log in</button>
                                        <div class="checkbox remember">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div><!--//checkbox-->
                                         <p class="lead">Don't have a Wall-of-Us account yet? <br /><a class="signup-link" href="signup.html">Create your account now</a></p>  
										  
                                    </form>
                                </div><!--//form-container-->
                                <div class="social-btns col-md-offset-1 col-sm-offset-0 col-sm-offset-0 col-xs-12 col-md-5">  
                                    <div class="divider"><span>Or</span></div>                      
                                    <ul class="list-unstyled social-login">
                                        <li><button class="twitter-btn btn" type="button"><i class="fa fa-twitter"></i>Log in with Twitter</button></li>
                                        <li><button class="facebook-btn btn" type="button"><i class="fa fa-facebook"></i>Log in with Facebook</button></li>
                                        <li><button class="github-btn btn" type="button"><i class="fa fa-github-alt"></i>Log in with Github</button></li>
                                        
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