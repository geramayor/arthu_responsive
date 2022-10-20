
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<br><br><br>
    <center><div class="card" style="width:50%;">
        <div class="card-header bg-ligth text-success"><center> <h3>Contraseña restablecida exitosamente</h3></center></div>
        <div  class="card-body">
            <div style="width:100%%;">
                <div class="contenedor">
                    ¡¡ Hola <b> {{$correo}} </b> !!
                    <br>
                    <p>Se ha restablecido su contraseña. Usted ya puede iniciar sesión y usar las herramientas y recursos que el sistema ARTHU
                        le proporciona.
                        <br><br><br>
                        Saludos.
                        <br>
                        Administrador del sitio
                    </p>
                </div>

                <div class="form-group">
                    <a href="{{ route('login') }}" class="btn btn-danger">
                        Salir
                    </a>
                </div>


            </div>
        </div>
    </div></center>