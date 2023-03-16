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
                <div class="col-md-6">
                    <div class="sub-main-w3 text-center">
                        <h3>Create account</h3>
                        <p class="mt-2 mb-4">Enter your details to create account.</p>
                        <form action="#" method="post">
                            @csrf
                            <div class="icon1">
                                <input placeholder="Full Name" name="name" id="name" type="text" required="">
                            </div>
                            <div class="icon1">
                                <input placeholder="Email" name="email" id="email" type="email" required="">
                            </div>
                            <div class="icon2">
                                <input placeholder="Phone number" name="phone" id="phone" type="text" required="">
                            </div>
                            <div class="icon2">
                                <input placeholder="Password" name="password" id="password" type="password" required="">
                            </div>
                            <input type="submit" value="Create Account">
                            <p>Already have an Account ? <a href="signin" class="ml-2"><strong>Sign in to your Account</strong></a></p>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/banner.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- //signin -->
@include('footer')
