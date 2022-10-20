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

<nav class="navbar" style="background-color:#151C2E;">
  <ul>
     <a href="{{route('catalogo.index')}}"><li>Inicio</li></a>
     <a href="{{route('pedidos.index')}}"><li>Pedidos</li></a>
     <a href="{{route('compras.index')}}"><li>Compras</li></a>
     <a href="{{route('Faq.index')}}"><li>FAQ</li></a>
     <a  href="{{route('comprador.edit',$comprador->intId)}}"><li class="lis"><div id="4">Editar perfil</div></li></a>
     <a href="{{route('login.index')}}"><li>Cerrar sesion</li></a>
  </ul>
</nav>