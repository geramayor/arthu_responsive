<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Empleados</title>
</head>
@include('comprador.navbar')

<body>
    <br><br>
    <center>
        <div class="breadcrumbs">
            {{Breadcrumbs::render('empleado')}}
        </div>
    </center>
    <div class="container">
        <br><br> @if(Session::has('mensaje')){
        <div class="alert alert-success alert-dismissible" role="alert">
            {{Session::get('mensaje')}}
            }
            <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                <span arial-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <nav class="navbar navbar-light float-right">
            <form class="form-inline">

                <div class="col-auto">
                    <select class="form-control" name="tipo" id="exampleFormControlSelet">
                        <option>Buscar por tipo</option>
                        <option>Nombre</option>
                        <option>ApellidoPaterno</option>
                        <option>Correo</option>
                    </select>
                </div>
                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>
        </nav>

        <a class="btn btn-success">Registrar nuevo empleado</a>
        <br><br>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            @if(count($empleados)<=0) <td>Busqueda NO encontrada</td>
                @endif

                <tbody>
                    @foreach($empleados as $empleado)
                    <tr>
                        <td>{{$empleado->id}}</td>

                        <td>{{$empleado->Nombre}}</td>
                        <td>{{$empleado->ApellidoPaterno}}</td>
                        <td>{{$empleado->ApellidoMaterno}}</td>
                        <td>{{$empleado->Correo}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm">
                                Editar
                            </a>
                            <form action="" class="d-inline" method="post">
                                @csrf

                                <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        {{--{!! $empleados->links() !!}--}}
    </div>

</body>
<br><br><br><br>
<footer>
    @include('comprador.footer')
</footer>

</html>