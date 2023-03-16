@include('header')

<section class="contact py-5">
    <div class="container py-md-3 mt-5">
        <div class="heading ">
            <h3 class="head text-center">Create Blog Post </h3>


            {{-- <input style="z-index: 999; opacity: ; width: 100px; height: 100; position: absolute; right: 0px; left: 10px; margin-right: auto; margin-left: auto;" name="files[]" id="filer_input2" multiple="multiple" type="file"/> --}}
        {{-- <div class="Neon Neon-theme-dragdropbox "> --}}
            {{-- <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
            </div> --}}
            {{-- <p class="my-3 head text-center"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p> --}}
        </div>
        <div class="contact-form mt-5">
            <div class="row">
                <div class="col-lg-7 col-md-10 mx-auto">
                    <form name="contactform" id="contactform" method="post" action="" onsubmit="return(validate());" novalidate="novalidate">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control border-2" id="title" placeholder="Title" name="title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea style="width: 100%; resize: none;" name="description" id="description" cols="10" rows="10" class="border outline-primary"></textarea>
                            {{-- <input type="text" class="form-control" id="description" placeholder="Description" name="description"> --}}
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
