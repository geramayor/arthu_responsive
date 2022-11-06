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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/principal_catalogo.css" rel="stylesheet" />

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
    @include('comprador.navbar')

    <div class="superNav border-bottom py-0 gray-300 ">
        <div class="container py-4  mb-1">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">

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


                    </div>
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
                </div>

            </div>

        </div>



        <div>
            @php $cuantos=0
            @endphp

            <div class="container px-4 px-lg-5 mt-5 ">
                @if(count($productos)<=0) <div class="text-center jumbotron w-100">
                    <h1>Busqueda NO encontrada</h1>
            </div>
            @endif

            @foreach($productos as $producto)
            @if($cuantos==0)

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @endif
                @php $cuantos++ @endphp
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="public/{{$producto->vchFoto1}}" alt="..." />
                        <!-- Product details-->

                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$producto->vchNombre}}</h5>
                                <!-- Product price-->
                                MX ${{number_format($producto->fltPrecio,2)}}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('catalogo.show',$producto->intId)}}">Ver detalles</a></div>
                        </div>
                    </div>
                </div>

                @if($cuantos==3)

            </div>

            @php $cuantos=0 @endphp
            @endif
            @endforeach
        </div>



        <div class="demo">
            <nav class="pagination-outer" aria-label="Page navigation">
                <ul class="pagination">

                    <li  class="page-item"> {{$productos->links()}}</li>

                </ul>
            </nav>
        </div>
        <style>
            .pagination-outer {
                text-align: center;
            }

            .pagination {
                font-family: 'Poppins', sans-serif;
                display: inline-flex;
                position: relative;
            }

            .pagination li a.page-link {
                color: #555;
                background-color: #eee;
                font-size: 18px;
                font-weight: 500;
                line-height: 38px;
                height: 35px;
                width: 35px;
                padding: 0;
                margin: 0 5px;
                border-radius: 3px;
                border: 3px solid #555;
                position: relative;
                z-index: 1;
                transition: all 0.4s ease 0s;
            }

            .pagination li:first-child a.page-link,
            .pagination li:last-child a.page-link {
                font-size: 25px;
                line-height: 35px;
                font-weight: 500;
            }

            .pagination li a.page-link:hover,
            .pagination li a.page-link:focus,
            .pagination li.active a.page-link:hover,
            .pagination li.active a.page-link {
                color: rgb(6, 98, 134);
                background-color: #eee;
                line-height: 30px;
                border: 3px solid rgb(6, 98, 134);
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            }

            @media only screen and (max-width: 480px) {
                .pagination {
                    font-size: 0;
                    display: inline-block;
                }

                .pagination li {
                    display: inline-block;
                    vertical-align: top;
                    margin: 10px 0;
                }
            }
        </style>

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