<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>compras</title>
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
    <br><br>
<center>
    <div class="breadcrumbs">
        {{Breadcrumbs::render('comprador')}}
    </div>
</center>
<div class="container">
    <br><br>    @if(Session::has('mensaje')){
    <div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje')}}
    }
    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
        <span arial-hidden="true">&times;</span>    
    </button>
</div>
    @endif
   
    <center><h1>Compras</h1></center>
    <br><br>
<table class="table table-bordered">
    <thead >
        <tr class="table-active">
            <th>#</th>
            <th>Producto</th>            
            <th>Cantidad</th>
            <th>Fecha de pedido</th>
            <th>Fecha de entrega</th>
            <th>Estado</th>  
            <th>Subtotal</th> 
            <th>Total</th> 
        </tr>
    </thead>
    <tbody>       
        <tr>
            <td>1</td>
            <td>Mascara</td>
            <td>5</td>
            <td>19-03-2022</td>
            <td>15-03-2022</td>
            <td>Entregado</td>
            <td>$100</td>
            <td>$500</td> 
        </tr>
    </tbody>
</table>

</div>

</body>
<br><br><br><br>
<footer>
     @include('comprador.footer')
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>