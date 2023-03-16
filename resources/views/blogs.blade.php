@include('header')
    <!-- banner -->
    <section class="inner-banner">
        <div class="container">
        </div>
    </section>
    <!-- //banner -->


    <!-- latest news -->
    <section class="latest-news py-5">
        <div class="container py-md-5">
            <div class="heading">
                <h3 class="head text-center">All blog posts of our team work </h3>
                <p class="my-3 head text-center"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
               @foreach ($blogs as $blog )

               <div class="row news_grids mx-auto mt-5 pt-3">
                   <div class="col-lg-4 col-md-6">
                       <div class="blog-post mb-4">
                           <div class="bg-light p-4">
                               <h5 class="card-title">{{$blog->title}}</h5>
                               <h4 class="">{{$blog->description}}</h4>
                            </div>
                        </div>
                        <a href="single"> Read Story </a>
                        @endforeach
                {{-- </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="blog-post mb-4">
                        <div class="bg-light p-4">
                            <h5 class="card-title">Management Values</h5>
                            <h4 class="">The working process of our team work</h4>
                        </div>
                        <img src="images/bp2.png" alt="" class="img-fluid" />
                    </div>
                    <a href="single"> Read Story </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="blog-post mb-4">
                        <div class="bg-light p-4">
                            <h5 class="card-title">Management Values</h5>
                            <h4 class="">The working process of our team work</h4>
                        </div>
                        <img src="images/bp3.jpg" alt="" class="img-fluid" />
                    </div>
                    <a href="single"> Read Story </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 pt-lg-5">
                    <div class="blog-post mb-4">
                        <div class="bg-light p-4">
                            <h5 class="card-title">Management Values</h5>
                            <h4 class="">The working process of our team work</h4>
                        </div>
                        <img src="images/bp4.jpg" alt="" class="img-fluid" />
                    </div>
                    <a href="single"> Read Story </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 pt-lg-5">
                    <div class="blog-post mb-4">
                        <div class="bg-light p-4">
                            <h5 class="card-title">Management Values</h5>
                            <h4 class="">The working process of our team work</h4>
                        </div>
                        <img src="images/bp5.jpg" alt="" class="img-fluid" />
                    </div>
                    <a href="#"> Read Story </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 pt-lg-5">
                    <div class="blog-post mb-4">
                        <div class="bg-light p-4">
                            <h5 class="card-title">Management Values</h5>
                            <h4 class="">The working process of our team work</h4>
                        </div>
                        <img src="images/bp6.jpg" alt="" class="img-fluid" />
                    </div>
                    <a href="single"> Read Story </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 pt-lg-5">
                    <div class="blog-post mb-4">
                        <div class="bg-light p-4">
                            <h5 class="card-title">Management Values</h5>
                            <h4 class="">The working process of our team work</h4>
                        </div>
                        <img src="images/bp1.jpg" alt="" class="img-fluid" />
                    </div>
                    <a href="single"> Read Story </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 pt-lg-5">
                    <div class="blog-post mb-4">
                        <div class="bg-light p-4">
                            <h5 class="card-title">Management Values</h5>
                            <h4 class="">The working process of our team work</h4>
                        </div>
                        <img src="images/bp2.png" alt="" class="img-fluid" />
                    </div>
                    <a href="single"> Read Story </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 pt-lg-5">
                    <div class="blog-post mb-4">
                        <div class="bg-light p-4">
                            <h5 class="card-title">Management Values</h5>
                            <h4 class="">The working process of our team work</h4>
                        </div>
                        <img src="images/bp3.jpg" alt="" class="img-fluid" />
                    </div>
                    <a href="single"> Read Story </a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- //latest news -->

@include('footer')
