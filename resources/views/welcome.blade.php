<html>
    <head>
        <style>
            body {
        height:100%;
     background-image: url("https://www.todofondos.net/wp-content/uploads/wood-wallpaper-wood-background-hd-134649-descargar-fondo-de-pantalla-hd.-imagen-hd-1080p-de-madera-768x432.jpg");
     background-size: cover;


    }
    h1{
        color:fff;
        margin-left:20px;
    }

    h2{
        color:fff;
        margin-left:40px;
    }
    a {
         float: right;



    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;


    margin-left: 20px !important;


    overflow:auto;
    }

        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <br>


        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a >.</a>
                <a href="{{ route('login') }}" class="btn btn-warning">Entrar</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-warning">Registrarme</a>
                @endif
            @endauth
        </div>
    @endif




        <h1>Bienvenidos a: <p style=" display: inline-block; color: Black"> Madwud, madera y calidad para tu hogar</p> </h1>


        <h2>Promociones:</h2>

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.amoblando.co/uploads/amoblando/product_images/589/full/juego-comedor-italia-140-4-puestos_bBDrr.jpg" class="d-block w-100" alt="..." with="100px" height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: Black">Promocion del dia</h5>
        <p>Mesa y 4 sillas con madera de ebano y con un suave cogin de lana</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://falabella.scene7.com/is/image/Falabella/14758715_2?wid=600&hei=600&qlt=70" class="d-block w-100" alt="..."  with="100px" height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: Black; font-weight: bolder;">Promocion de la semana</h5>
        <p>Escritorio con madera de ebano y con metal para que se pueda sostener.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/564x/db/e0/10/dbe0106f99531212667630c7a7ddeae5.jpg" class="d-block w-100" alt="..."  with="80px" height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5 >Promocion del mes</h5>
        <p style="color: Black; font-weight: bolder;">Base cama echa con madera de bambu traida de China incluye colchon</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
