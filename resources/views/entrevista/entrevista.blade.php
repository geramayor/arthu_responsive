<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrevistas</title>
    @include('comprador.navbar')

    <link rel="stylesheet" type="text/css" href="public/scroll/dist/fullpage.css" />
    <link rel="stylesheet" type="text/css" href="public/scroll/examples/examples.css" />
</head>


<body>

    <div id="fullpage">
        <div class="section" id="section0">
            <div class="intro">

                <br><br>
                <center>
                    <div class="breadcrumbs">
                        {{Breadcrumbs::render('entrevista')}}
                    </div>

                    <div class="container">

                        <h5 class="card-title">
                            <p class="text-dark">Entrevista a un Artesano (José María Yépez Villarruel)</p>
                        </h5>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/85eqbeH3L6w" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <p class="card-text">
                        <p class="text-dark">Entrevista realizada por <b>Artesanias Artisticas</p></b></p>


                    </div>
                </center>


                <footer>
                    @include('comprador.footer')
                </footer>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="public/scroll/vendors/scrolloverflow.js"></script>
    <script type="text/javascript" src="public/scroll/dist/fullpage.js"></script>
    <script type="text/javascript" src="public/scroll/examples/examples.js"></script>

    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
            sectionsColor: [],
            scrollOverflow: true
        });
    </script>



</body>

</html>