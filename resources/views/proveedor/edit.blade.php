<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="public/js/sweetAlert.js"></script>
    <title>Proveedor</title>
</head>
@include('proveedor.navbar')
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
                <div class="card-header"><label id="8">Editar mi perfil</label></div>

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
                        <label for="nombre" id="9">Nombre completo</label>
                        <input class="form-control" type="text" onkeypress="return letters(event);" id="nombre" name="nombre" value="{{Auth::user()->name}}" >
                    </td>
                    <td>
                        <label for="correo" id="10">Email</label>
                        <input class="form-control" type="email" id="correo" name="correo" value="{{Auth::user()->email}}" >
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <label for="codigop" id="11">Codigo Postal</label>
                        <input class="form-control" type="text" id="codigo" onkeypress="return numbers(event);"  name="codigop" value="{{Auth::user()->codigopostal}}"  maxlength="5">
                    </td>
                    <td>
                        <label for="estado" id="12">Estado</label>
                        <input class="form-control" type="text" onkeypress="return letters(event);" id="estado" name="estado" value="{{Auth::user()->estado}}"  maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td>
                         <label for="municipio" id="13">Municipio</label>
                         <input class="form-control" type="text" onkeypress="return letters(event);" id="municipio" name="municipio" value="{{Auth::user()->municipio}}"  maxlength="100">
                    </td>
                     <td>
                        <label for="colonia" id="14">Colonia o Localidad</label>
                        <input class="form-control" type="text" onkeypress="return letters(event);" id="localidad" name="colonia" value="{{Auth::user()->colonia}}"  maxlength="100">
                    </td>
                </tr>
                <tr>
                   
                    <td>
                        <label for="telefono" id="15">Telefono</label>
                        <input class="form-control" type="tel" onkeypress="return numbers(event);" pattern="[0-9]{10}" id="telefono" name="telefono" value="{{Auth::user()->telefono}}"  maxlength="10">
                    </td>
                    <td>
                        <label for="rfc" id="16">WhatsApp</label>
                        <input class="form-control" type="text" onkeypress="return numbers(event);" id="what" name="what" value="{{Auth::user()->whatsapp}}"  maxlength="10">
                    </td>
                </tr>
                <tr>
                     <td>
                        <label for="rfc" id="17">CURP</label>
                        <input class="form-control" type="text" id="curp" name="curp" value="{{Auth::user()->curp}}" maxlength="18">
                    </td>
                    <td>
                        <label for="foto" id="18">Foto</label>
                        <input accept="image/*" class="form-control" type="file" name="foto" maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br>
                    <center>
                        <input class="btn btn-primary" id="btnEnviar" onclick="return vacios();" type="submit" value="Actualizar">
                        
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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="public/js/validaredit.js"></script>


</body>

