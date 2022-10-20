
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<br><br><br>
    <center><div class="card" style="width:50%;">
        <div class="card-header bg-ligth text-danger"><center> <h3>Ha ocurrido un error</h3></center></div>
        <div  class="card-body">
            <div style="width:100%%;">
                <div class="contenedor">
                    ¡¡ Alerta !! El correo <b> {{$correo}} </b> no existe.
                    <br>
                    <p>El correo proporcionado no se encuentra registrado, revise la escritura y vuelva a intentarlo mas tarde.
                    Si el problema continua comunicate al correo sitiowebarhu@gmail.com para detallar lo que sucede y poder brindar una
                    pronta solución.
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
