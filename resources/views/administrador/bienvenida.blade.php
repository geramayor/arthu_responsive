<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Hola, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('login.navbar')
<style>
    div{
        width: 150px;
        backgroundColor:transparent;
    }
    img{
        border-radius: 50%;
        width: 45px;
        height: 45px;
    }
</style>
<nav id="navb" class="navbar" style="background-color:#151C2E;">
  <ul>
     <li class="lis"><div id="1"><img src="public/img/alert.jpg" alt="">{{$proveedor->vchNombre}}</div></li>
     <a  href="#"><li class="lis"><div class="btn btn-primary" id="1">Inicio</div></li></a>
     <a  href="#"><li class="lis"><div  class="btn btn-primary" id="4">Editar perfil</div></li></a>
     <a  href="#"><li class="lis"><div  class="btn btn-primary" id="6">FAQ</div></li></a>
     <a  href="#"><li class="lis"><div class="btn btn-primary" id="7">Cerrar sesion</div></li></a>
     <li class="lis">
</li>
  </ul>
</nav>

Hola
{{$proveedor->vchNombre}}
<center><br><br><br><br>
    <h1>Bienvenido a la seccion del administrador</h1>

<br><br>
        <div class="col-md-10">
                <img src="public/uploads/login.png" width="100"/>   
        </div>
    </center>

</body>
</html>
