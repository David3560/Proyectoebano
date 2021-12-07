<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.PNG') }}" style="width: 30%; margin: 0%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/tipoProducto">Tipo de Producto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/colorProducto">Color de Producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/material">Materiales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/empleado">Empleados</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/catalogo">Catalogo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/producto">Producto</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/imagen">Imagen</a>
            </li>

          </ul>

        </div>
      </nav>

    <div class="container">
        @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
