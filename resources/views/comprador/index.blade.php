@include('comprador.tutorial')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de compradores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style type="text/css">
       ul{
        list-style-type: none;
    }
    li{
        float: left;
        margin-right: 10px;
        padding: 0 4px;
        color:white;
        font-size:18px;
    }
    .breadcrumbs{
        width:80%;
    }
    .navbar{
        height:100px;
    }
     h1{ 
        color: #32a852;
    }

    .modo{ 
        float:right;
    } 

    .cambiar {   
        cursor: pointer; 
        border: 2px solid rgb(224, 209, 209);   
        text-align: center;   
        padding: 5px;  
        margin-left: 8px;
    } 

    .oscuro{  
        background-color: #222!important;  
        color: #e6e6e6;
    } 
    
    ul.breadcrumb {
      padding: 10px 16px;
      list-style: none;
      background-color: #eee;
    }
    ul.breadcrumb li {
      display: inline;
      font-size: 18px;
    }
    ul.breadcrumb li+li:before {
      padding: 8px;
      color: black;
      content: "/\00a0";
    }
    ul.breadcrumb li a {
      color: #0275d8;
      text-decoration: none;
    }
    ul.breadcrumb li a:hover {
      color: #01447e;
      text-decoration: underline;
    }
    
    #foo{
    margin-top:50px;
    width:100%;
    height:100px;
    background-color:red;
    color:white;
   
    position: relative;
    bottom: 0px;/*lo deja abajo*/
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<nav id="navb" class="navbar" style="background-color:#151C2E;">
  <ul>      
     <a href="public/login/bienvenido.php"><li><div id="1"><i class="fas fa-home"></i>&nbsp;Inicio</div></li></a>
     <a href="#"><li><div id="2"><i class="fas fa-home"></i>&nbsp;Catalogo</div></li></a>
     <a href="comprador"><li><div id="2"><i class="fas fa-home"></i>&nbsp;Compradores</div></li></a>
     <a href="#"><li><div id="3"><i class="fas fa-home"></i>&nbsp;Facturas</div></li></a>
     <a href="public/login/compras.php"><li><div id="4"><i class="fas fa-home"></i>&nbsp;Compras</div></li></a>
     <a href="#"><li><div id="5"><i class="fas fa-home"></i>&nbsp;Perfil</div></li></a>
     <a href="public/login/login.php"><li><div id="6"><i class="fas fa-home"></i>&nbsp;Cerrar sesion</div></li></a>
     <div class="modo" > 
         <li><div id="7">Modo nocturno:</div></li>
         <!--<img src="http://localhost/Proyecto_Laravel/laravel/public/public/uploads/1.jpg" width="1%">-->
         <button class="cambiar btn btn-success"> Encender</button> 
    </div>
  </ul>
</nav>
<body>
    
    <div class="container"><br><br>
        
    <br><br>
    <h4>Gestion de compradores</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('comprador.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-2">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}" id="texto">
                        </div>
                        <div class="col-auto my-2">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>

                    </div>
                </form>
            </div>
            <div class="container">
                @if(Session::has('mensaje'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{Session::get('mensaje')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="col-xl-14">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Nombre completo</td>
                                <td>Email</td>
                                <td>Telefono</td>
                                <td>Dirección</td>
                                <td>Rol</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($compradores)<=0)
                                <tr>
                                    <td colspan="8">
                                        No hay resultados para su busqueda
                                    </td>
                                </tr>
                            @else
                                @php $cont=1 @endphp
                                @foreach($compradores as $comprador)
                                    <tr>
                                        <td>@php echo $cont @endphp</td>
                                        <td>{{$comprador->name}}</td>
                                        <td>{{$comprador->email}}</td>
                                        <td>{{$comprador->telefono}}</td>
                                        <td>{{$comprador->estado.' '.$comprador->municipio.' '.$comprador->colonia}}</td>
                                        <td>{{$comprador->tipo_usuario}}</td>
                                        <td><a href="{{route('comprador.edit',$comprador->id)}}" class="btn btn-warning btn-sm"> Editar</a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$comprador->id}}">
                                        Eliminar
                                        </button>
                                        </td>
                                    </tr>
                                    @php $cont++ @endphp
                                    @include('comprador.delete')
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$compradores->links()}}
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
