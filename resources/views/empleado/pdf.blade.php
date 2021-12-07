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
          background-color: #ff9900;
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

      <br><br>
      <center><h1> Lista de empleados</h1></center>

    <table>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Empleado</th>
            <th scope="col">Documento Empleado</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Telefono Empleado</th>
            <th scope="col">Usuario</th>
            <th scope="col">F. de creacion</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($empleado as $empleado)
            <tr>
                <td>{{$empleado->idEmpleado}}</td>
                <td>{{$empleado->nombreEmpleado}}</td>
                <td>{{$empleado->documentoEmpleado}}</td>
                <td>{{$empleado->fechaNacimiento}}</td>
                <td>{{$empleado->telefonoEmpleado}}</td>
                <td>{{$empleado->usuarioFK}}</td>
                <td>{{$empleado->created_at}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <div class="footer">
            <p>Copyright © Todos los derechos reservados</p>
          </div>
</body>
</html>
