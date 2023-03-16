@include('header')
    <!-- banner -->
    <section class="inner-banner">
        <div class="container">
        </div>
    </section>
    <!-- //banner -->


    <!-- Contact -->
    <section class="contact py-5">
        <div class="container py-md-3">
            <div class="heading">
                <h3 class="head text-center">Contact Us </h3>
                <p class="my-3 head text-center"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class="contact-form mt-5">
                <div class="row">
                    <div class="col-lg-7 col-md-10 mx-auto">
                        <form name="contactform" id="contactform" method="post" action="#" onsubmit="return(validate());" novalidate="novalidate">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                            </div>

                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                            </div>
                            <div class="form-group">
                                <label>How can we help?</label>
                                <textarea name="issues" class="form-control" id="iq" placeholder="Enter Your Message Here"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->

    <!-- map -->
    <section class="agileits-w3layouts-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
            allowfullscreen=""></iframe>
    </section>
    <!-- //map -->

@include('footer')
