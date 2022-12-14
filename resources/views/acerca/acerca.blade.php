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
    <!-- Responsive navbar-->
    <div class="superNav border-bottom py-2 gray-300">
        @include('comprador.navbar')

        <section class="bg-light">
            <div class="container px-4 text-center py-4">
                <h1 class="fw-bolder">Artesanias Huasteca</h1>
            </div>
    </div>
</section>


    <!-- About section-->
    <section>
        <div class=" container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Mision</h2>
                    <p class="lead">Somos una empresa que busca mantener el compromiso con los artesanos de la cuidad
                        de Huejutla de ayudarlos a promocionar y vender los productos artesanales de madera que
                        permita la visualizaci??n de sus productos a nivel nacional a traves de internet actuando
                        con respeto y tomando en cuenta los principios ??ticos y morales que intervienen durante este proceso.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- Services section-->
    <section class="">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Vision</h2>
                    <p class="lead">ArtHu se proyecta como una empresa lider en la promoci??n y venta de artesan??as de madera a nivel nacional siendo
                        reconocida como una marca sin??nimo de calidad, buen gusto, mediante su constante innovaci??n y adquisici??n de tecnolog??as
                        que permita la creaci??n de esta empresa y as?? mismo darle realce a los productos de los artesanos de Huejutla.</d>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section>
        <div class="container px-4 mb-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Desarrolladores</h2>
                    <li>Yarasmin Tejada Lucero</li>
                    <li>Karla anah?? Hern??ndez Zavala</li>
                    <li>Gerardo Miguel Mayor</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->

    <footer>
        @include('comprador.footer')

    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>