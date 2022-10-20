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
    <div class="superNav border-bottom py-2 gray-300 ">

    @include('comprador.navbar')

        <div class="container py-4  mb-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <body>
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://img.freepik.com/foto-gratis/mesa-madera-3d-vistas-moderna-sala-estar-desenfocada_1048-9817.jpg?w=1380&t=st=1665389588~exp=1665390188~hmac=215b913de091b197a8afe1c4bfed3c5790989ce1242b24ae7d1f64708bc6659d" class="d-block w-100" alt="..." height="400">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://img.freepik.com/psd-gratis/habitacion-o-habitacion-hotel-cama-doble-grandes-ventanales_176382-383.jpg?t=st=1665389662~exp=1665390262~hmac=d8ca5ad78c1b87176338c7d64efaa73e0f5b832e0b7a5cfb1a702d16987808a3" class="d-block w-100" alt="..." height="400">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://img.freepik.com/foto-gratis/primer-plano-sencilla-silla-moderna-patas-metalicas-habitacion-paredes-grises_181624-46229.jpg?w=1060&t=st=1665389431~exp=1665390031~hmac=1aa1a56a590cfd78afe5ebe2220b362d71c2dcdd425359d32688a3341f4a2c91" class="d-block w-100" alt="..." height="400">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://img.freepik.com/foto-gratis/vestidor-madera-escandinava-lujo-renderizado-3d-armario-mesa-maquillaje_105762-2147.jpg?w=1060&t=st=1665389831~exp=1665390431~hmac=c54bd8d2d65e07155640e20c669af24676dfe8087e3542a1086fe2031245ba4e" class="d-block w-100" alt="..." height="400">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden"></span>
                                </button>
                            </div>
                        </body>

                    </div>

                    <!-- Nested row for non-featured blog posts-->

                    <!-- Pagination-->
                    <!-- <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav> -->
                </div>

                <!-- buscar -->

                <div class="col-lg-4">
                    <div class="breadcrumbs">
                        {{Breadcrumbs::render('catalogo')}}
                    </div>
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Buscar </div>
                        <div class="card-body">
                        <form action="catalogo" method="get">
                            <div class="input-group">
                                <input class="form-control" type="text" id="busca" name="texto" value="{{$texto}}" placeholder="Buscar por nombre" aria-label="Enter search term..." aria-describedby="button-search" />
                                <input class="btn btn-primary" type="submit" value="Buscar">
                            </div>
                        </form>
                        </div>
                    </div>
                    @if(count($productos)<=0)
                            <h1>Busqueda NO encontrada</h1>
                    @endif


                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @php $cuantos=0 @endphp
            @foreach($productos as $producto)
        @if($cuantos==0)
        <div class="row">
        @endif
        @php $cuantos++ @endphp
            <div class="col col-lg-3">
                <!-- Blog post-->
                <div class="col-sm">
                    <a href="#!"><img class="card-img-top" src="public/{{$producto->vchFoto1}}"></a>
                    <div class="card-body">
                        <div class="small text-muted">{{$producto->vchNombre}}</div>
                        <h2 class="card-title h4">Precio: ${{number_format($producto->fltPrecio,2)}} MXN</h2>
                        <a class="btn btn-primary" href="{{route('catalogo.show',$producto->intId)}}">Ver más</a>
                    </div>
                </div>
                @if($cuantos==4)
                @php $cuantos=0 @endphp
            </div>
            @endif
            @endforeach
        </div>



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
<footer>
    @include('comprador.footer')
</footer>
</html>
