<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('proveedor.navbar')
    <title>Editar producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="public/scroll/dist/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="public/scroll/examples/examples.css" />
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
<body>

<div id="fullpage">
    <div class="section" id="section0">
        <div class="intro">
    <br><br>
    <center>
        <div class="breadcrumbs">
            {{Breadcrumbs::render('editarproducto')}}
        </div>
    </center>

<div class="container table-bordered" style="width:30%"><br>
        <h4>Editar Producto</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('producto.actualiza',$producto->intId)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="{{$producto->vchNombre}}" required maxlength="100">
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
                        <input class="form-control" type="number" name="precio" value="{{$producto->fltPrecio}}" required mixlength="8" maxlength="10">
                    </div>
                    <div class="form-group">
                        <label for="">Existencia</label>
                        <input class="form-control" type="number" name="existencia" value="{{$producto->intExistencia}}" required maxlength="5">
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        
                        <input class="form-control"  rows="5" cols="60" type="text" name="descripcion" value="{{$producto->txtDescripcion}}" required maxlength="100">
                    </div>                    
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input class="form-control" type="file" name="foto1" accept="image/*">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Actualizar">
                        <a href="{{route('producto.index')}}" class="btn btn-danger"> Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript" src="public/scroll/vendors/scrolloverflow.js"></script>
<script type="text/javascript" src="public/scroll/dist/fullpage.js"></script>
<script type="text/javascript" src="public/scroll/examples/examples.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
        sectionsColor: [],
        scrollOverflow: true
    });
</script>  

       
</html>