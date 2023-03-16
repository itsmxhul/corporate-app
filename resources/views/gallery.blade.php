@include('header')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .img-container-grid{
  display:flex;
  flex-wrap: wrap;
}

.smallsquare{
  max-width:20%;
  height:auto;
  flex:0 0 20%;
  padding-top:20%;
  display:grid;
  position:relative;
}

.h_rectangle{
  max-width: 40%;
  flex: 0 0 40%;
  padding-top:20%;
  position:relative;
}

.bigsquare{
  max-width:40%;
  height:auto;
  flex:0 0 40%;
  padding-top:40%;
  display:grid;
  position:relative;
}
.bigsquare_blank{
  max-width:40%;
  height:auto;
  flex:0 0 40%;
  display:flex;
  flex-wrap: wrap;
}
.inner_square{
  max-width:50%;
  flex: 0 0 50%;
  height:50%;
  position:relative;
}
.v_rectangle{
  max-width: 20%;
  flex: 0 0 20%;
  padding-top:40%;
  position:relative;
}

.img-grid-c{
  width:100%;
  height:100%;
  top:0;
  left:0;
  position:absolute;
  object-fit:cover;
  object-position:center;
  padding:2.5px;
}
    </style>
    <title>Image Grid</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="img-container-grid">
        <div class="smallsquare"><img src="https://cdn.pixabay.com/photo/2018/05/28/22/11/message-in-a-bottle-3437294__340.jpg" class="img-grid-c"></div>
        <div class="smallsquare"><img src="https://media.istockphoto.com/photos/view-of-sydney-harbour-australia-picture-id535455441?k=6&m=535455441&s=612x612&w=0&h=jVkW0bOqvffn2SzvUdncgkwHGScJRzak0oaQGij__h8=" class="img-grid-c"></div>
          <div class="h_rectangle"><img src="https://images.pexels.com/photos/248797/pexels-photo-248797.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-grid-c"></div>
          <div class="smallsquare"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3WnzXzbr2hiB8lPq3n_p5fnQdvOMc3Ouummyk11uVylX-7rtdXA" class="img-grid-c"></div>
          <div class="bigsquare"><img src="https://thumbs-prod.si-cdn.com/N-_fU5xNOvR2T25teuPAdtGkBhY=/800x600/filters:no_upscale()/https://public-media.si-cdn.com/filer/90/b2/90b2dfe5-a9ab-4821-9ccc-45ae1d52fa8a/blackholewithclouds_c-1-941x519.jpg" class="img-grid-c"></div>
          <div class="bigsquare_blank">
            <div class="inner_square"><img src="https://www.w3schools.com/w3css/img_lights.jpg" class="img-grid-c"></div>
            <div class="inner_square"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTR-oo8-jn28YVesncpNZ4cBHocvHtKLwzmpVDbq1k7KNa5jEiL" class="img-grid-c"></div>
            <div class="inner_square"><img src="https://media.cntraveller.in/wp-content/uploads/2018/10/GettyImages-990972132-866x487.jpg" class="img-grid-c"></div>
            <div class="inner_square"><img src="https://www.w3schools.com/howto/img_snow.jpg" class="img-grid-c"></div>
          </div>
          <div class="v_rectangle"><img src="https://images.unsplash.com/photo-1541233349642-6e425fe6190e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-grid-c"></div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
@include('footer')
