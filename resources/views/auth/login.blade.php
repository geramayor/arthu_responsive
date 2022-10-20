<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body.darkmode {
            background-color: rgb(32, 32, 44);
            color: white;
        }
    </style>

    <script>
        const bdark = document.querySelector('#bdark');
        const body = document.querySelector('body');
        bdark.addEventListener('click', e => {
            body.classList.toggle('darkmode');
        })
    </script>
</head>

<body>
    @include('comprador.navbar')


    <section class="vh-50">

    <section class="vh-100">

        <div class="container py-5 h-50">
            <div class="row d-flex align-items-center justify-content-center h-50">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                </div>

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                    <br><br>
                    <form>
                        <!-- Email input -->
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Ingresa el correo electronico">
                            <label for="floatingInput">Correo electronico</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                            <label for="floatingPassword">Contraseña</label>
                        </div><br><br>

                        <div class="d-flex justify-content-around align-items-center mb-4 ">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <a href="#!">Recuperara contraseña</a>
                            </div>
                            <a href="#!">Pregunta secreta</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>
<footer>
    @include('comprador.footer')
</footer>

</body>

