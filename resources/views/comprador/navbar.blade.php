<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
    ul {
        list-style-type: none;
    }

    .lis {
        float: left;
        margin-right: 10px;
        padding: 0 4px;
        font-size: 18px;
        color: white;
    }

    .breadcrumbs {
        width: 80%;
    }

    .navbar {
        height: 100px;
    }

    h1 {
        color: #32a852;
    }

    .modo {
        float: right;
    }

    .cambiar {
        cursor: pointer;
        border: 2px solid rgb(224, 209, 209);
        text-align: center;
        padding: 5px;
        margin-left: 8px;
    }

    .oscuro {
        background-color: #222 !important;
        color: #e6e6e6;
    }
</style>

<!-- empece a trabajar  px-4 text-center py-4-->
<header>

    <body>
        <div class="superNav border-bottom py-2 gray-300">
            <nav class="navbar navbar-expand-lg bg-gray-300 sticky-top navbar-light p-3 shadow-sm">
                <nav class="navbar navbar-light">
                    <div class="container">
                        <a class="navbar-brand">
                            <img src="https://artesaniash.com/public/img/logo.png" width="60" height="60">
                        </a>
                    </div>
                </nav>
                <a href="{{route('catalogo.index')}}" class="navbar-brand" href="#"></i> <strong>ArtHu</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="container">
                    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item">
                                <a id="1" href="{{route('catalogo.index')}}" class="nav-link mx-2 text-uppercase " aria-current="page"><i class="fas fa-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a id="2" href="{{route('entrevista.index')}}" class="nav-link mx-2 text-uppercase"><i class="fas fa-film"></i> Entrevistas</a>
                            </li>
                            <li class="nav-item">
                                <a id="4" href="{{route('acerca.index')}}" class="nav-link mx-2 text-uppercase"> <i class="fas fa-info-circle"></i> Acerca de</a>
                            </li>
                            <li class="nav-item">
                                <a id="5" href="{{route('faq.index')}}" class="nav-link mx-2 text-uppercase"> <i class="fas fa-question-circle"></i> FAQ</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item">
                                <a id="8" class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-moon"></i></a>
                            </li>
                            <li class=" nav-item">
                                <a id="6" href="{{route('login')}}" class="nav-link mx-2 text-uppercase" href="#"><i class="fas fa-sign-in""></i> Iniciar</a>
                        </li>

                        <li class=" nav-item">
                                        <a id="7" href="{{route('register')}}" class="nav-link mx-2 text-uppercase"><i class="fas fa-user-plus"></i> Registrar </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </body>
</header>

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
<!-- termine  -->

<!-- <nav id="navb" class="navbar" style="background-color:#151C2E;">
    <ul>
        <a href="{{route('catalogo.index')}}">
            <li class="lis">
                <div id="1"><i class="fas fa-home"></i>&nbsp;Inicioooo</div>
            </li>
        </a>
        <a href="{{route('register')}}">
            <li class="lis">
                <div id="2"><i class="fas fa-user-plus"></i>&nbsp;Crear cuenta</div>
            </li>
        </a>

        <a href="{{route('entrevista.index')}}">
            <li class="lis">
                <div id="4"><i class="fas fa-film"></i>&nbsp;Entrevistas</div>
            </li>
        </a>
        <a href="{{route('acerca.index')}}">
            <li class="lis">
                <div id="5"><i class="fas fa-info-circle"></i>&nbsp;Acerca de</div>
            </li>
        </a>
        <a href="{{route('faq.index')}}">
            <li class="lis">
                <div id="6"><i class="fas fa-question-circle"></i>&nbsp;FAQ</div>
            </li>
        </a>
        <a href="{{route('login')}}">
            <li class="lis">
                <div id="7"><i class="fas fa-sign-in"></i>&nbsp;Iniciar sesion</div>
            </li>
        </a>
        <div class="modo">
            <li class="lis">
                <div id="8"> Modo nocturno:</div>
            </li>
            
            <button class="cambiar btn btn-success"> Encender</button>
        </div>
    </ul>
</nav> -->

<script>
    $(".cambiar").on("click", function() {
        if ($("body").hasClass("oscuro")) {
            $("body").removeClass("oscuro");
            $(".cambiar").text("Apagado");
            var elem = document.getElementById('navb');
            elem.style.backgroundColor = "#151C2E";
            localStorage.setItem('dark-mode', 'false');
            var tex = document.getElementById('1').style.color = '#fff';
            tex = document.getElementById('2').style.color = '#fff';
            tex = document.getElementById('4').style.color = '#fff';
            tex = document.getElementById('5').style.color = '#fff';
            tex = document.getElementById('6').style.color = '#fff';
            tex = document.getElementById('7').style.color = '#fff';
            tex = document.getElementById('8').style.color = '#fff';
        } else {
            $("body").addClass("oscuro");
            $(".cambiar").text("Encendido");
            var elem = document.getElementById('navb');
            elem.style.backgroundColor = "#fff";
            //var tex = document.getElementById('navt');
            var tex = document.getElementById('1').style.color = '#000000';
            tex = document.getElementById('2').style.color = '#000000';

            tex = document.getElementById('4').style.color = '#000000';
            tex = document.getElementById('5').style.color = '#000000';
            tex = document.getElementById('6').style.color = '#000000';
            tex = document.getElementById('7').style.color = '#000000';
            tex = document.getElementById('8').style.color = '#000000';

            // tex.style.backgroundColor="#0000";
            // var elem2 = document.getElementsByClassName('texto');
            //elem2.style.color="#222";
            localStorage.setItem('dark-mode', 'true');
        }
    });

    if (localStorage.getItem('dark-mode') === 'true') { //modo oscuro
        document.body.classList.add('oscuro');
        document.getElementById('navb').style.backgroundColor = '#fff';
        document.getElementById('1').style.color = '#000000';
        document.getElementById('2').style.color = '#000000';
        document.getElementById('4').style.color = '#000000';
        document.getElementById('5').style.color = '#000000';
        document.getElementById('6').style.color = '#000000';
        document.getElementById('7').style.color = '#000000';
        document.getElementById('8').style.color = '#000000';
    } else {
        document.body.classList.remove('oscuro');
    }
</script>

<style type="text/css">
    ul {
        list-style-type: none;
    }

    .lis {
        float: left;
        margin-right: 10px;
        padding: 0 4px;
        font-size: 18px;
        color: white;
    }

    .breadcrumbs {
        width: 80%;
    }

    .navbar {
        height: 100px;
    }

    h1 {
        color: #32a852;
    }

    .modo {
        float: right;
    }

    .cambiar {
        cursor: pointer;
        border: 2px solid rgb(224, 209, 209);
        text-align: center;
        padding: 5px;
        margin-left: 8px;
    }

    .oscuro {
        background-color: #222 !important;
        color: #e6e6e6;
    }
</style>