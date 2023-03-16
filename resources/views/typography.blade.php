@include('header')
    <!-- banner -->
    <section class="inner-banner">
        <div class="container">
        </div>
    </section>
    <!-- //banner -->


    <!-- typography -->
    <section class="typo py-5">
        <div class="container py-md-3">
            <div class="heading">
                <h3 class="head text-center">Typography </h3>
                <p class="my-3 head text-center"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class="row typo-grids mt-5">

                <div class="typo-grid col-lg-4">
                    <div class="bg-light py-4 pl-4">
                        <div class="container">
                            <div class="row">
                                <h3 class="mb-4">Buttons With Labels</h3>
                                <div class="col-md-12 pl-0">
                                    <button type="button" class="btn btn-labeled btn-success">
									<span class="btn-label"><span class="fa fa-check"></span></span>Success</button>
                                    <button type="button" class="btn btn-labeled btn-danger">
									<span class="btn-label"><span class="fa fa-times"></span></span>Cancel</button>
                                    <br />
                                    <button type="button" class="btn btn-labeled btn-warning">
									<span class="btn-label"><span class="fa fa-bookmark"></span></span>Bookmark</button>
                                    <button type="button" class="btn btn-labeled btn-primary">
									<span class="btn-label"><span class="fa fa-camera"></span></span>Camera</button>
                                    <br />
                                    <button type="button" class="btn btn-labeled btn-default">
									<span class="btn-label"><span class="fa fa-chevron-left"></span></span>Left</button>
                                    <button type="button" class="btn btn-labeled btn-default">
									<span class="btn-label"><span class="fa fa-chevron-right"></span></span>
									Right</button>
                                    <br />
                                    <button type="button" class="btn btn-labeled btn-success">
									<span class="btn-label"><span class="fa fa-thumbs-up"></span></span>Thumbs
									Up</button>
                                    <button type="button" class="btn btn-labeled btn-danger">
									<span class="btn-label"><span class="fa fa-thumbs-down"></span></span>Thumbs
									Down</button>
                                    <br />
                                    <button type="button" class="btn btn-labeled btn-info">
									<span class="btn-label"><span class="fa fa-sync-alt"></span></span>Refresh</button>
                                    <button type="button" class="btn btn-labeled btn-danger">
									<span class="btn-label"><span class="fa fa-trash"></span></span>Trash</button>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="typo-grid col-lg-4 mt-lg-0 mt-4">
                    <div class="bg-light py-4 pl-4">
                        <div class="container">
                            <div class="row">
                                <h3 class="mb-4">Group Buttons</h3>
                                <div class="col-md-12 pl-0">
                                    <div class="ui-group-buttons">
                                        <a href="#" class="btn btn-success" role="button"><span class="fa fa-thumbs-up"></span></a>
                                        <div class="or"></div>
                                        <a href="#" class="btn btn-danger" role="button"><span class="fa fa-thumbs-down"></span></a>
                                    </div>
                                    <div class="ui-group-buttons">
                                        <a href="#" class="btn btn-success" role="button"><span class="fa fa-file"></span></a>
                                        <div class="or"></div>
                                        <a href="#" class="btn btn-danger" role="button"><span class="fa fa-trash"></span></a>
                                    </div>
                                    <br />
                                    <div class="ui-group-buttons">
                                        <a href="#" class="btn btn-success" role="button"><span class="fa fa-check"></span> Sign Up</a>
                                        <div class="or"></div>
                                        <a href="#" class="btn btn-info" role="button"><span class="fa fa-times"></span> Reset</a>
                                    </div>
                                    <br />
                                    <div class="ui-group-buttons">
                                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                        <div class="or or-lg"></div>
                                        <button type="button" class="btn btn-success btn-lg">Large button</button>
                                    </div>
                                    <br />
                                    <div class="ui-group-buttons">
                                        <button type="button" class="btn btn-primary">Default</button>
                                        <div class="or"></div>
                                        <button type="button" class="button btn btn-success">Success</button>
                                    </div>
                                    <br />
                                    <div class="ui-group-buttons">
                                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                        <div class="or or-sm"></div>
                                        <button type="button" class="btn btn-success btn-sm">Small button</button>
                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="typo-grid col-lg-4 mt-lg-0 mt-4">
                    <div class="bg-light py-4 pl-4">
                        <h3 class="mb-4">File Upload</h3>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group mt-5">
                                <label for="exampleFormControlFile1">Choose a file to upload</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile2">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="typo-grid mt-5 pt-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 pl-0 tabs">
                                <h3 class="mb-5">Tabs with Icons on Card</h3>

                                <!-- Tabs with icons on Card -->
                                <div class="card card-nav-tabs">
                                    <div class="card-header card-header-primary">
                                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#profile" data-toggle="tab">
                                                            <span class="fa fa-user"></span> Profile
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                                            <span class="fa fa-user"></span> Messages
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#settings" data-toggle="tab">
                                                            <span class="fa fa-cogs"></span> Settings
                                                        </a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="profile">
                                                <p> Donec auctor diam quis lectus scelerisque porta. Suspendisse rhoncus, nunc quis facilisis ullamcorper, libero libero finibus mauris, ac hendrerit nulla massa at leo. Sed accumsan turpis id placerat maximus.
                                                    Etiam tincidunt porttitor tristique. </p>
                                            </div>
                                            <div class="tab-pane" id="messages">
                                                <p> Nunc quis nunc eget mauris laoreet faucibus nec eget eros. Maecenas malesuada faucibus enim, nec varius massa consectetur ac. Fusce fermentum interdum magna nunc. Vestibulum ac nunc elementum, mollis turpis
                                                    id, viverra.</p>
                                            </div>
                                            <div class="tab-pane" id="settings">
                                                <p> Suspendisse rhoncus, nunc quis facilisis ullamcorper, Donec auctor diam quis lectus scelerisque porta. libero libero finibus mauris, ac hendrerit nulla massa at leo. Etiam tincidunt Sed porttitor tristique.
                                                    accumsan turpis id placerat maximus </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tabs with icons on Card -->

                            </div>
                            <div class="col-lg-6 tabs">
                                <h3 class="mb-5">Tabs on Plain Card</h3>

                                <!-- Tabs on Plain Card -->
                                <div class="card card-nav-tabs card-plain">
                                    <div class="card-header card-header-danger">
                                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#updates" data-toggle="tab">Updates</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#history" data-toggle="tab">History</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home">
                                                <p> Donec auctor diam quis lectus scelerisque porta. Suspendisse rhoncus, nunc quis facilisis ullamcorper, libero libero finibus mauris, ac hendrerit nulla massa at leo. Sed accumsan turpis id placerat maximus.
                                                    Etiam tincidunt porttitor tristique. </p>
                                            </div>
                                            <div class="tab-pane" id="updates">
                                                <p> Nunc quis nunc eget mauris laoreet faucibus nec eget eros. Maecenas malesuada faucibus enim, nec varius massa consectetur ac. Fusce fermentum interdum magna nunc. Vestibulum ac nunc elementum, mollis turpis
                                                    id, viverra.</p>
                                            </div>
                                            <div class="tab-pane" id="history">
                                                <p> Suspendisse rhoncus, nunc quis facilisis ullamcorper, Donec auctor diam quis lectus scelerisque porta. libero libero finibus mauris, ac hendrerit nulla massa at leo. Etiam tincidunt Sed porttitor tristique.
                                                    accumsan turpis id placerat maximus </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tabs on plain Card -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="typo-grid card-styles mt-5">
                    <h3 class="mb-4">Card Styles</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Primary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-white bg-secondary mb-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Secondary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-white bg-success mb-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Success card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-white bg-danger mb-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Danger card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-white bg-warning mb-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Warning card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-white bg-info mb-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Info card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Light card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-white bg-dark mb-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Dark card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="typo-grid col-md-12 mt-5">
                    <h3 class="mb-4">Input Types</h3>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                    </div>

                    <label for="basic-url">Your vanity URL</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">With textarea</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- //typography -->

    <!-- subscribe -->
    <section class="subscribe py-5">
        <div class="container py-md-5">
            <div class="heading">
                <h3 class="head text-center">Sign in to get started</h3>
                <p class="my-3 head text-center"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <form action="#" method="post" class="mt-5">
                <div class="d-flex mb-2">
                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                    <input type="submit" value="Get Started">
                </div>
                <span class="text-white">We'll never share your email with anyone else.</span>
            </form>
        </div>
    </section>
    <!-- //subscribe -->
@include('footer')
