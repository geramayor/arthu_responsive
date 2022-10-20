<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
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
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@include('comprador.navbar')
<body>
    <br><br>
    <center>
        <div class="breadcrumbs">
        <ul class="breadcrumb">
            <li><a href="/catalogo">Inicio</a></li>
        <li style="color:gray">sig in</li>
        </ul>
    </div>
    </center>
<br><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header bg-success"><center><b>Inicia Sesión</b></center></div>

                <div class="card-body">
                    <form action="{{route('login.store')}}" method="post">
                    @csrf

                       <center>
                        <div class="col-md-10">
                            <img src="public/uploads/login.png" width="100"/>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-5">
                            <label for="email" class="col-md-8 col-form-label text-md-end">Correo electronico</label>
                            <br>
                                <input id="email" type="email" class="form-control" name="email"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row mb-4">
                            <label for="password" class="col-md-6 col-form-label text-md-end">Contraseña</label>
                               <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                      Entrar
                                    </button>
                            </div>
                            <div class="col-md-4 offset-md-2">

                                    <a class="btn btn-link" href="#" data-toggle="modal" data-target="#modal-buzon">
                                        ¿Olvidaste tú contraseña?
                                        Recuperala AQUI
                                    </a>
                            </div>
                        </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
@include('login.resetpass')</center>
</body>

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
