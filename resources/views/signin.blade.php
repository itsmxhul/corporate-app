@include('header')
    <!-- banner -->
    <section class="inner-banner">
        <div class="container">
        </div>
    </section>
    <!-- //banner -->


    <!-- signin -->
    <section class="signin py-5">
        <div class="container">
            <div class="row main-content-agile">
                <div class="col-lg-6 col-md-9 mx-auto">
                    <div class="sub-main-w3 text-center">
                        <h3>Sign in to your account</h3>
                        <p class="mt-2 mb-4">Enter your email and password to get sign in.</p>
                        <form action="#" method="post">
                            @csrf
                            <div class="icon1">
                                <input placeholder="Username or Email" name="email" id="email" type="email" required="">
                            </div>
                            <div class="icon2">
                                <input placeholder="Password" name="password" id="password" type="password" required="">
                            </div>
                            <label class="anim">
						<input type="checkbox" class="checkbox">
							<span>Remember Me</span>
							<a href="#">Forgot Password</a>
						</label>
                            <div class="clearfix"></div>
                            <input type="submit" value="Sign in">
                            <p>Don’t know an Account ? <a href="register" class="ml-2"><strong>Create your Account</strong></a></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="images/banner.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- //signin -->
@include('footer')
