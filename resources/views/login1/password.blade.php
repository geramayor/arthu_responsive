
<br><br><br><br>
<div class="container" style="width:50%;">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <div class="card">
        <div class="card-header bg-ligth text-black"><center> Recuperacion de contraeña</center></div>
            <div  class="card-body">
            
                <form action="{{route('recuperar.reset')}}" method="post">
                    @csrf
                    <div>
                        <div>
                            <label for="nombre"><p class="text-dark"><b>Correo electronico</b></p></label>
                            <input class="form-control" type="email" id="correo" name="correo" value="{{$correo}}" required maxlength="100">
                        </div>
                        <br>
                        <div>
                            <label for="nombre"><p class="text-dark"><b>Nueva contraseña</b><br>
                            <d style="color:red;">• Guarda tu nueva contraseña para poder inicar sesion</d></p></label>
                            <input class="form-control" type="text" id="newpass" name="newpass" value="{{$random}}" required maxlength="100">
                        </div>
                        <br>
                        <div class="form-group">
                            <center>
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                                <a href="{{ route('login') }}" class="btn btn-danger">
                                    Regresar
                                </a>
                            </center>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>



















