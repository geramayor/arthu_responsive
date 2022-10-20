<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor-Crear cuenta</title>
    @include('comprador.navbar')
    <link rel="stylesheet" type="text/css" href="public/scroll/dist/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="public/scroll/examples/examples.css" />
</head>

<body>

<div id="fullpage">
	<div class="section" id="section0">
		<div class="intro">    
    
            <br><br>
        <center><div class="breadcrumbs">
        {{Breadcrumbs::render('comprador')}}
        </div></center>
        
                <div class="container table-bordered" style="width:30%"><br>
                    <h4>Completa tus datos</h4>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <form id="form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre completo</label>
                            <input class="form-control" type="text"  id="nombre" onkeypress="return letters(event);" name="nombre" value="{{old('nombre')}}" required maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input class="form-control" type="email" id="correo" onblur="corr();" name="correo" value="{{old('correo')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="correo2">Confirmar correo</label>
                            <input class="form-control" type="email" id="correo2" onblur="corre();" name="correo2" value="{{old('correo2')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contrase&ntilde;a</label>
                            <input class="form-control" type="password" id="password" onblur="pass1();" name="password" value="{{old('password')}}" required minlength="8" maxlength="10">
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirmar contrase&ntilde;a</label>
                            <input class="form-control" type="password" id="password2" onblur="pass2();" name="password2" value="{{old('password2')}}" required minlength="8" maxlength="10">
                        </div>
                        <div class="form-group">
                            <label for="rfc">RFC</label>
                            <input class="form-control" type="text" id="rfc" name="rfc" value="{{old('rfc')}}" required maxlength="13">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Numero de Telefono</label>
                            <input class="form-control" type="tel"  id="telefono"  name="telefono" value="{{old('telefono')}}" required maxlength="10" onkeypress='return validaNumericos(event)'>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">Numero de WhatsApp</label>
                            <input class="form-control" type="tel"  id="whatsapp" name="whatsapp" value="{{old('whatsapp')}}" required maxlength="10" onkeypress='return validaNumericos(event)'>
                        </div>
                        <div class="form-group">
                            <input class="check" type="checkbox" id="chek" name="terminos" required>
                            <d for="terminos" class="d-inline" style="text-align:justify;">Declaro que soy mayor de edad, acepto los Terminos y condiciones
                                    y autorizo el uso de mis datos de acuerdo a la Declaraci&oacute;n de Privacidad.
                            </d>
                        </div>
                        <div class="form-group"><center>
                            <input class="btn btn-success" id="enviar" type="submit" value="Registrar">
                            <a href="create" class="btn btn-danger" type="reset">Cancelar</a></center>
                        </div>
                    </form>
                </div>
                <footer>
                 @include('comprador.footer')
            </footer>
            </div>
        </div>
        
    
  		</div>
	</div>
</div>
	
<script>
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
</script>


<script type="text/javascript" src="public/scroll/vendors/scrolloverflow.js"></script>
<script type="text/javascript" src="public/scroll/dist/fullpage.js"></script>
<script type="text/javascript" src="public/scroll/examples/examples.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="public/js/validacionesCreate.js"></script>


<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
        sectionsColor: [],
        scrollOverflow: true
    });
</script>
            
            
            
    <link rel="stylesheet" href="" type="text/css" >

<script>
    var botmanWidget={
        aboutText:"Welcome",
        introMessage:"Bienvenido a nuestro sitio"
    }
</script>
<style>
    .swal2-styled.swal2-confirm.swalBtnColor {
    color: black;
    font: size 20px;
    box-shadow: none;
    }
</style>
<script>
    $(document).ready(function () {
    $("form").submit(function(e){
      e.preventDefault();
         $.ajax({
            url : "{{route('proveedor.store')}}",
            method : "POST",
            data : $("form").serializeArray(),
            success:function(mensaje){
                var msj=mensaje[0];
                //alert(msj);
    
                if(msj=='Se ha registrado exitosamente'){
                    Swal.fire({
                        title:'Registrado',
                        icon:'success',
                        text:msj,
                        confirmButtonText:'Aceptar',
                        width:'25%',
                        confirmButtonColor:'green',
                    })
                    $("#form-data")[0].reset();
                }else if((msj=='Las contrase\u00F1as no coinciden') || ( msj=='Los correos no coinciden') || (msj=='El correo ya esta asociado a una cuenta')){
                    Swal.fire({
                        title:'Advertencia',
                        icon:'warning',
                        text:msj,
                        confirmButtonText:'Aceptar',
                        width:'25%',
                        confirmButtonColor:'gold',
                        customClass: {
                            confirmButton: 'swalBtnColor',
                            title:'swalBtnColor',
                        },
                    })
                }
                else{
                    Swal.fire({
                        title:'Error',
                        icon:'error',
                        text:'Error al enviar formulario',
                        confirmButtonText:'Aceptar',
                        width:'25%',
                        confirmButtonColor:'gold',
                        customClass: {
                            confirmButton: 'swalBtnColor',
                            title:'swalBtnColor',
                        },
                    })
                        
                }
    
            }
        });
    });
});
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/js/main.js"></script>
<script src="public/js/sweetAlert.js"></script>
<script src="public/js/validacionesCreate.js"></script>



</body>
<footer>
     @include('comprador.footer')
</footer>
</html>
