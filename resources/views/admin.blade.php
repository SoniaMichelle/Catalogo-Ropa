<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
</head>

<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col mt-5">
                <h1>Administrador</h1>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <form action="/adminguardar" enctype="multipart/form-data" method="POST">
                            <!-- Toquen de laravel -->
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre del Producto</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="imagen">Producto</label>
                                    <input type="file" class="form-control" name="imagen" accept="image/*">
                                    @error('file')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="descripcion">Descripcion</label>
                                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="precio">Precio</label>
                                    <input type="text" name="precio" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
</body>

</html>