<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Comprador</title>
</head>
@include('comprador.navcomprador')
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

<body>
<body>
    <style>
        .form-control{
            width: 250px;
            height: 45px;
        }
        #editar-perfil{
            margin: 0 auto;
        }
        .contenedor{
            width: 43%;
            height: 60%;
            border:grey 1px solid ;
            margin: 0 auto;
            border-radius:5px;
        }
        td{
            width: 300px;
            padding: 10px;
        }

    </style>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Editar mi perfil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><div style="width:90%;">
            @if(Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{Session::get('mensaje')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div></center>
        <form action="{{route('proveedor.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <table id="editar-perfil">
                <tr>
                    <td>
                        <label for="nombre">Nombre completo</label>
                        <input class="form-control" type="text" name="nombre" value="{{Auth::user()->name}}" required maxlength="100">
                    </td>
                    <td>
                        <label for="correo">Email</label>
                        <input class="form-control" type="email" name="correo" value="{{Auth::user()->email}}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" value="" required mixlength="8" maxlength="10">
                    </td>
                    <td>
                        <label for="codigop">Codigo Postal</label>
                        <input class="form-control" type="text" name="codigop" value="" required maxlength="5">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="estado">Estado</label>
                        <input class="form-control" type="text" name="estado" value="" required maxlength="100">
                    </td>
                    <td>
                         <label for="municipio">Municipio</label>
                         <input class="form-control" type="text" name="municipio" value="" required maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="colonia">Colonia o Localidad</label>
                        <input class="form-control" type="text" name="colonia" value="" required maxlength="100">
                    </td>
                    <td>
                        <label for="telefono">Telefono</label>
                        <input class="form-control" type="tel" pattern="[0-9]{10}" name="telefono" value="" required maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="rfc">RFC</label>
                        <input class="form-control" type="text"  name="rfc" value="" required maxlength="13">
                    </td>
                    <td>
                        <label for="foto">Foto</label>
                        <input accept="image/*" class="form-control" type="file" name="foto" maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br>
                    <center>
                        <input class="btn btn-success" type="submit" value="Actualizar">
                        <input class="btn inline btn-danger" type="reset" value="Cancelar">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

