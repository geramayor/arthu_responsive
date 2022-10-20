
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón</title>
</head>
<body><br><br>
    <div class="container" style="width:30%"><br>
        <div class="modal fade" id="modal-buzon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="visibility: initial;">
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

               <form id="form-reset">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><p class="text-dark">Recuperación de contraseña</p></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for=""><p class="text-dark"><b>Requisito:</b><br>
                                    1. Correo electronico con el que se registró</p>
                                </label><br>
                                <img style="width: 200px;height: 150px;" id="carr" src="public/img/avatar.png"><br>
                            </div>
                            <div>
                                <label for="nombre"><p class="text-dark"><b>Correo electronico</b></p></label>
                                <input class="form-control" type="email" id="correo" name="correo" required maxlength="100">
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" id="enviar" name="enviar" class="btn btn-success">Solicitar</button>
                                <button type="reset" id="cancelar" name="cancelar" onclick="return confirmar()" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br>
    <style>
    .swal2-styled.swal2-confirm.swalBtnColor {
    color: black;
    font: size 20px;
    box-shadow: none;
    }
</style>
        <script>
    $(document).ready(function () {
        $("#form-reset").submit(function(e){
            e.preventDefault();
            $.ajax({
                url : "{{route('password.store')}}",
                method : "POST",
                data : $("#form-reset").serializeArray(),
                success:function(mensaje){
                    var msj=mensaje;

                   if(msj=='La clave de acceso ha sido enviada al correo proporcionado, revise su bandeja de entrada.'){
                    Swal.fire({
                        title:'Información',
                        icon:'success',
                        text:msj,
                        confirmButtonText:'Aceptar',
                        width:'25%',
                        confirmButtonColor:'green',
                    })
                    $("#form-reset")[0].reset();
                    }else if(msj=='El correo proporcionado no existe, intente de nuevo.'){
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
                   
                }
            });
        });
    });
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/js/sweetAlert.js"></script>



    <br><br>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
