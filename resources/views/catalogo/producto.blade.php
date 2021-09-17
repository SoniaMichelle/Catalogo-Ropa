@section('content')
    <div class="site-section bg-light mt-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-9 order-2">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="float-md-left mb-4">
                                <h2 class="text-black h5">Catalogo</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        @foreach($products as $product)
                        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                            <div class="block-4 text-center border">
                                <figure class="block-4-image">
                                    <img src="{{asset($product->imagen)}}" alt="Image placeholder" class="img-fluid">

                                </figure>
                                <div class="block-4-text p-4">
                                    <h3>{{$product->nombre}}</h3>
                                    <p class="mb-0">{{$product->descripcion}}t</p>
                                    <p class="text-primary font-weight-bold">${{number_format($product->precio,2)}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>