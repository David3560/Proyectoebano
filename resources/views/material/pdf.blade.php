<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <link href="{{ public_path('css/pdf.css')}}" rel="stylesheet" type="text/css">
    <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0px;
          background-color: #b97103;
          overflow: hidden;

        }
        li {
    display: inline;
        }

        li a {

        color: white;
        text-align: center;
        padding: 30px 30px;
        text-decoration: none;
        font-size: 30px;


        }

        .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
    background-color: #535353c5;
}
    p{
        text-align: center;
    }

        </style>
</head>
<body>
    <ul>
        <li><a class="active" href="#home">Madwud</a></li>

      </ul>

      <br>
      <center><h1> Lista de materiales</h1></center>

      <table id="roles" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre material</th>
            <th scope="col">Descripcion material</th>
            <th scope="col">Costo material</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($material as $material)
            <tr>
                <td>{{$material->idMaterial}}</td>
                <td>{{$material->nombreMaterial}}</td>
                <td>{{$material->descripcionMaterial}}</td>
                <td>{{$material->costoMaterial}}</td>

            </tr>
            @endforeach
          </tbody>
        </table>

<footer>
        <div class="footer">
            <p>Copyright © Todos los derechos reservados</p>
        </div>

</footer>
</body>
</html>
