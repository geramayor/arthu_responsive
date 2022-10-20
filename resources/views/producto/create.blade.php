<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar nuevo producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<br>
<body>
    <center>
        <div class="breadcrumbs">
            {{Breadcrumbs::render('agregarproducto')}}
        </div>
    </center>
<div class="container table-bordered" style="width:30%"><br>
        <h4>Agregar Producto</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" onkeypress="return check(event)" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control" name="cbxcategoria" id="cbxcategoria" required>                                
                            <option value="">Seleccione categoria</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->intCat}}">{{$categoria->vchCategoria}}</option>
                            @endforeach
                        </select>
                    </div>      

                    <div class="form-group">
                        <label for="">Precio</label>
                        <input class="form-control" type="number" name="precio"  mixlength="8" maxlength="10" required>
                    </div>
                    <div class="form-group">
                        <label for="">Existencia</label>
                        <input class="form-control" type="number" name="existencia" maxlength="5" required>
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        
                        <input class="form-control"  rows="5" cols="60" type="text" name="descripcion"  maxlength="100" required>
                    </div> 
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input accept="image/*" class="form-control" type="file" name="foto1" id="foto1" class="hidden">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Registrar">
                        <a href="{{route('producto.index')}}" class="btn btn-danger"> Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        function check(e) {
           // tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8) {
                return true;
            }
            patron = /[A-Za-z]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
    </script>
</body>
</html>