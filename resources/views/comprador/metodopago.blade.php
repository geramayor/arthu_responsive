<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Compras</title>
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
table {
   width: 50%;
   border: 1px solid #000;
   color: #000;
   align-content: flex-end;
}
    th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<nav class="navbar" style="background-color:#151C2E;">
  <ul>
     <a href="#"><li>Inicio</li></a>
     <a href="/catalogo"><li>Catalogo</li></a>
     <a href="/laravel/laravel/public/login/compras.php"><li>Compras</li></a>
     <a href="/laravel/laravel/public/login/perfil.php"><li>Perfil</li></a>
     <a href="/laravel/laravel/public/login/login.php"><li>Cerrar sesion</li></a>
  </ul>
</nav>
<body>
<br><br>
    <center>
        <div class="breadcrumbs">
        <ul class="breadcrumb">
        <li><a href="#">Inicio</a></li>
            <li style="color:gray">Agregar Método</li>
        </ul>
    </div>
    </center>  
    <center><br><br><br><br>
    <h1>Agregar Tarjeta de Débito </h1>
    <div class="container table-bordered" style="width:30%"><br>
            <form action="{{route('modopago.store')}}" method="post">
                <div class="form-group">
                 <label for="nombre">Nombre de la Tarjeta</label>
                 <input class="form-control" type="text" name="nombre" id="nombre"required maxlength="50">
                 </div>
                <div class="form-group">
               <label for="numtarj">Numero de la Tarjeta</label>
               <input class="form-control" type="numer" name="numtarj" id="numtarj"required>
                </div>
                <div class="form-group">
                <label for="fecha">Fecha de vencimiento</label> 
                <input class="form-control" type="date" name="fecha" id="fecha"value="fecha" required></tr>
                 </div>
                <div class="form-group">
                 <label for="ccv">CCV</label>
                <input class="form-control" type="text"  name="ccv" id="ccv" required minlength="12" maxlength="15">
                 </div>
                <div class="form-group"><center>
                    <input class="btn btn-success" type="submit" value="Registrar">
                    <a href="#" class="btn btn-danger" type="reset">Cancelar</a></center>
                </div>
            </form>
        </div>
</table>
    </center>
</body>
<br><br><br><br>
<style type="text/css">
.footer{
    margin-top:50px;
    width:100%;
    height:100px;
    background-color:red;
    color:white;
   position: relative;
    bottom: 0px;/*lo deja abajo*/
}

</style>
<style>
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
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<br><br><br><br><br><br><br>
<nav class="footer" style="background-color:#151C2E;"><br>
 <center>ArtHu<br>
 Telefono: 7745216958<br>
 Correo: arthu@gmail.com</center>
</nav>
</html>