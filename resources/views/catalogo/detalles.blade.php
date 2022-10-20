<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Detalles</title>
    @include('comprador.navbar')
</head>
<body><br><br>
        <center><h2>Detalles del producto</h2></center><br><br><br>
    <center><table class="table table-bordered" style="width: 60%;">
        <tr>
            <td rowspan="5">
                <center><img src="/public/{{$productos->vchFoto1}}" style="width: 250px;height: 250px;">
                <br>
                {{$productos->vchNombre}}
                <br>
                <h6 class="text-success">${{number_format($productos->fltPrecio,2)}} MXN</h6></center>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Descripción:&nbsp;
                {{$productos->txtDescripcion}}
            </td>
        </tr>
        <tr>
            <td>Categoria:&nbsp;{{$productos->vchCategoria}}</td>
            <td>Existencia:&nbsp;{{$productos->intExistencia}}</td>
        </tr>
        <tr>
            <td colspan="2">
                <center>
                    Contacto:&nbsp;{{$productos->vchProveedor}}<br><br>
                    WhatsApp:&nbsp;<i class="fab fa-whatsapp"></i>&nbsp;{{$productos->vchWhatsApp }}
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Llamada:&nbsp; <i class="fa-solid fa-phone"></i>&nbsp;{{$productos->vchTelefono}}
                </center>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <center><button class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i>&nbsp;Agregar al carrito</button>
                <button class="btn btn-success"><i class="fa-solid fa-credit-card"></i>&nbsp;Comprar</button>
                <a href="{{ URL::previous() }}" class="btn btn-danger"><i class="fa-solid fa-arrow-rotate-left"></i>&nbsp;Regresar</a></center>
            </td>
        </tr>
    </table></center>
    <style>
        .fa-whatsapp{
            color:green;
            size: 20px;
        }
        .fa-phone{
            color:#00acee;
            size: 20px;
        }
    </style>
</body>
<footer>
     @include('comprador.footer')
</footer>
</html>
