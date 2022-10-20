
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
                <form action="{{route('buzon.store')}}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><p class="text-dark">Buzon de quejas y sugerencias</p></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nombre"><p class="text-dark">Nombre completo</p></label>
                                <input class="form-control" type="text" name="nombre" required maxlength="100">
                            </div>
                            <div class="form-group">
                            <label for="nombre"><p class="text-dark">Operacion</p></label>
                                <select class="form-control" name="buzonqs" id="buzonqs">
                                    <option><p class="text-dark">--Selecciona una opción--</p></option>
                                    <option value="Queja"><p class="text-dark">Queja</p></option>
                                    <option value="Sugerencia"><p class="text-dark">Sugerencia</p></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea align="left" class="form-control" type="text" name="comentario" required>Escribe...</textarea>
                            </div>
                            <div class="form-group">
                            <center> <label for=""><p class="text-dark">¡Tu opinion es importante, gracias!</p></label><br>
                                <input class="btn btn-success" type="submit" value="Enviar"></center>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>
