<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

  <div class="site-wrap">

    <!-- CARRUCEL -->
    <section>
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="{{asset('img/imagenes/1.jpg')}}" alt="First slide" width="1350px" height="550px">
              <div class="carousel-caption">
                <div class="row justify-content-end">
                  <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">Finding Your Perfect Shoes</h1>
                    <div class="intro-text text-center text-md-left">
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
                      <p>
                        <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block" src="{{asset('img/imagenes/6.jpg')}}" alt="Second slide" width="1350px" height="550px">
              <div class="carousel-caption">
                <div class="row align-items-start align-items-md-center justify-content-end">
                  <div class="col-md-5  text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">Finding Your Perfect Shoes</h1>
                    <div class="intro-text text-center text-md-left">
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
                      <p>
                        <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block" src="{{asset('img/imagenes/8.jpg')}}" alt="Third slide" width="1350px" height="550px">
              <div class="carousel-caption">
                <div class="row align-items-start align-items-md-center justify-content-end">
                  <div class="col-md-4  text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">Finding Your Perfect Shoes</h1>
                    <div class="intro-text text-center text-md-left">
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
                      <p>
                        <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- CARDS -->
    <section>
      <div class="site-section site-section-sm site-blocks-1">
        <div class="container mt-4">
          <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
              <div class="icon mr-4 align-self-start">
                <span class="icon-truck" style=" color: rgba(255, 255, 255, 0.746);"></span>
              </div>
              <div class="text">
                <h2 class="text-uppercase">Free Shipping</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
              <div class="icon mr-4 align-self-start">
                <span class="icon-refresh2" style=" color: rgba(255, 255, 255, 0.746);"></span>
              </div>
              <div class="text">
                <h2 class="text-uppercase">Free Returns</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
              <div class="icon mr-4 align-self-start">
                <span class="icon-help" style=" color: rgba(255, 255, 255, 0.746);"></span>
              </div>
              <div class="text">
                <h2 class="text-uppercase">Customer Support</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CATEGORIAS -->
    <section>
      <div class="site-section site-blocks-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="{{asset('img/imagenes/woman1.jpg')}}" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">Collecion</span>
                  <h3>Mujer</h3>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="{{asset('img/imagenes/accesorios.jpg')}}" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">Collecion</span>
                  <h3>Accesorios</h3>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="{{asset('img/imagenes/men1.jpg')}}" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">Collecions</span>
                  <h3>Hombre</h3>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Nuevos productos -->
    <section>
      <div class="site-section block-3 site-blocks-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
              <h2>Featured Products</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="nonloop-block-3 owl-carousel">
                <div class="item">
                  <div class="block-4 text-center">
                    <figure class="block-4-image">
                      <img src="{{asset('img/imagenes/p1.webp')}}" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-3">
                      <h3><a href="#" style="color: #272727;">Tank Top</a> </h3>
                      <p class="mb-0">Finding perfect t-shirt</p>
                      <p class="text-primary font-weight-bold">$50</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="block-4 text-center">
                    <figure class="block-4-image">
                      <img src="{{asset('img/imagenes/p2.webp')}}" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-3">
                      <h3><a href="#" style="color: #272727;">Corater</a></h3>
                      <p class="mb-0">Finding perfect products</p>
                      <p class="text-primary font-weight-bold">$50</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="block-4 text-center">
                    <figure class="block-4-image">
                      <img src="{{asset('img/imagenes/p3.webp')}}" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-3">
                      <h3><a href="#" style="color: #272727;">Polo Shirt</a></h3>
                      <p class="mb-0">Finding perfect products</p>
                      <p class="text-primary font-weight-bold">$50</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="block-4 text-center">
                    <figure class="block-4-image">
                      <img src="{{asset('img/imagenes/p4.webp')}}" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-3">
                      <h3><a href="#" style="color: #272727;">T-Shirt Mockup</a></h3>
                      <p class="mb-0">Finding perfect products</p>
                      <p class="text-primary font-weight-bold">$50</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="block-4 text-center">
                    <figure class="block-4-image">
                      <img src="{{asset('img/imagenes/p5.webp')}}" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-3">
                      <h3><a href="#" style="color: #272727;">Corater</a></h3>
                      <p class="mb-0">Finding perfect products</p>
                      <p class="text-primary font-weight-bold">$50</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="block-4 text-center">
                    <figure class="block-4-image">
                      <img src="{{asset('img/imagenes/p6.webp')}}" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-3">
                      <h3><a href="#" style="color: #272727;">Corater</a></h3>
                      <p class="mb-0">Finding perfect products</p>
                      <p class="text-primary font-weight-bold">$50</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col text-center">
              <a class="btn btn-primary" href="producto">VER MÀS</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</body>

</html>