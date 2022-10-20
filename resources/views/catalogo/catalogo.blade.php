<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Galeria</title>
<link rel="stylesheet" href="public/css/carrusel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    @include('comprador.navbar')
    <link rel="stylesheet" type="text/css" href="public/scroll/dist/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="public/scroll/examples/examples.css" />
 
</head>
<body><br><br>

 <div id="fullpage">
	<div class="section" id="section0">
		<div class="intro">
<center>
    
                    <div class="breadcrumbs">
                        {{Breadcrumbs::render('catalogo')}}
                    </div>
                   <div class="container">
                       <div class="row">
                            <div class="col-xl-12">
                                <form action="catalogo" method="get">
                                  <div class="form-row">
                                        <div class="col-sm-4 my-1">
                                            <input class="form-control" type="text" id="busca" name="texto" value="{{$texto}}" placeholder="Buscar por nombre">
                                        </div>
                                        <div class="col-auto my-1">
                                            <input class="btn btn-primary" type="submit" value="Buscar">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                        
   
                        <br><br>
                        <div id="ajax" class="content">
                            @include('catalogo.carrusel')
                        </div>
                        <br><br>
                
                       @if(count($productos)<=0)
                            <h1>Busqueda NO encontrada</h1>
                        @endif
                
                    <table>
                
                @php $cuantos=0 @endphp
                    @foreach($productos as $producto)
                        @if($cuantos==0)
                        <tr>
                        @endif
                            @php $cuantos++ @endphp
                
                            <td align="center" width="20%">
                                <div class="card table-bordered table-condensed" style="width: 15rem;border-radius:10px; color: #222;">
                                   <center><br> <img src="public/{{$producto->vchFoto1}}"  class="card-img-top" style="width: 180px;height:180px;">
                                    </center><div class="card-body">
                                        <h4 class="card-title">{{$producto->vchNombre}}</h4>
                                        <h6 class="text-success">Precio: ${{number_format($producto->fltPrecio,2)}} MXN</h6><br>
                
                                        <p class="card-text">
                                            <a href="{{route('catalogo.show',$producto->intId)}}" class="btn btn-primary">Ver más</a>
                                        </p>
                                    </div>
                
                                    <br>
                
                                </div>
                            </td>
                            <td></td>
                
                            @if($cuantos==4)
                                @php $cuantos=0 @endphp
                        </tr>
                        <tr height="40px"></tr>
                            @endif
                    @endforeach
                
                </table>
                   </div>
                   
                    <footer>
                         @include('comprador.footer')
                    </footer>
                 <h1></h1>
                </center>
  		</div>
	</div>
</div>
	


 <script src="public/js/carrusel.js"></script>
<script type="text/javascript" src="public/scroll/vendors/scrolloverflow.js"></script>
<script type="text/javascript" src="public/scroll/dist/fullpage.js"></script>
<script type="text/javascript" src="public/scroll/examples/examples.js"></script>


<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['secondPage', '3rdPage', '4thPage'],
        sectionsColor: [ ],
        scrollOverflow: true
    });
</script>
</body>

</html>
