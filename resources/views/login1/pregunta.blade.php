<br><br><br><br>
<div class="container" style="width:50%;">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <div class="card">
        <div class="card-header bg-ligth text-black"><center> Recuperacion de contraeña</center></div>
        <div  class="card-body">
            <form action="{{route('recuperar.index')}}" method="post">
            @csrf
                    <div>
                        <div>
                            <input class="form-control" type="hidden" id="correo" name="correo" value="{{$correo}}" required>
                            <center><div>
                            <label for="nombre"><p class="text-dark"><b>{{$pregunta}}</b></p></label>
                                    <input class="form-control" type="text" id="respuesta" name="respuesta" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Obtnener nueva contraseña </button>
                                    <a href="{{ route('login') }}" class="btn btn-danger">
                                        Regresar
                                    </a>
                                </div>
                                </center>
                        </div>
                    </div>
            </form>
    </div>
</div>





