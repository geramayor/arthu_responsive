<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ</title>
  @include('comprador.navbar')
</head>

<br><br>
<center>
  <div class="breadcrumbs">
    {{Breadcrumbs::render('faq')}}
  </div>
</center>

<body>
  <br><br>
  <div id="box">
    <div class="item">
      <img src="public/uploads/log.png" height="150px" width="200px">
      <h2 class="card-title h4">¿Como iniciar sesion?</h2>
      <button type="button" class="open-modal" data-open="modal1">
        Ver
      </button>
    </div>
    <div class="item">
      <img src="public/uploads/comoin.jpg" height="150px" width="200px">
      <h2 class="card-title h4">¿Qué necesito para Iniciar sesion?</h2>
      <button type="button" class="open-modal" data-open="modal2">
        Ver
      </button>
    </div>
    <div class="item">
      <img src="public/uploads/com.jpg" height="150px" width="200px">
      <h2 class="card-title h4">¿Cómo realizar compras?</h2>
      <button type="button" class="open-modal" data-open="modal3">
        Ver
      </button>
    </div>
    <div class="item">
      <img src="public/uploads/can.jpg" height="150px" width="200px">
      <h2 class="card-title h4">¿Cómo realizar Cancelaciones? </h2>
      <button type="button" class="open-modal" data-open="modal4">
        Ver
      </button>
    </div>
    <div class="item">
      <img src="public/uploads/dev.jpg" height="150px" width="200px">
      <h2 class="card-title h4">¿Cómo realizar Devoluciones?</h2>
      <button type="button" class="open-modal" data-open="modal5">
        Ver
      </button>
    </div>
    <div class="item">
      <img src="public/uploads/sus.png" height="150px" width="200px">
      <br>
      <h2 class="card-title h4">¿Cómo Suscribirme?</h2>
      <button type="button" class="open-modal" data-open="modal6">
        Ver
      </button>
    </div>

  </div>


  <!---INFORMACION DE LA VENTANA MODAL--->
  <div class="modal" id="modal1" data-animation="slideInOutLeft">
    <div class="modal-dialog">
      <header class="modal-header">
        <b>
          <h2>
            <p class="text-dark">Inicio de sesion</p>
          </h2>
        </b>
        <button class="close-modal" aria-label="close modal" data-close>
          ✕
        </button>
      </header>
      <section class="modal-content">
        <p class="text-dark"><strong>Para iniciar sesion sigue los siguientes pasos:</strong></p>
        <p class="text-dark">Paso 1: Debe dirigirse al apartado <FONT COLOR="red"><b>Inicia sesión</b></FONT> <a href="https://artesaniash.com/public/login/login.php">
            <FONT COLOR="blue">https://artesaniash.com/public/login/login.php</FONT>
          </a></p>
        <p class="text-dark">Paso 2: Ingresa el <FONT COLOR="red"><b>correo</b></FONT> y la <FONT COLOR="red"><b>contraseña</b></FONT>
        <p class="text-dark">paso 3: Click en en boton de </p>
        <FONT COLOR="red"><b>Entrar</b></FONT>
        </p>
        <p class="text-dark">paso 4: si son validos lo redirige a la seccion correspondiente</p>
      </section>
      <footer class="modal-footer">
        <b>
          <p class="text-dark">Espero te haya servido la información</p>
        </b>
      </footer>
    </div>
  </div>
  <!--******************************************************2222******************************************************--->
  <div class="modal" id="modal2" data-animation="slideInOutLeft">
    <div class="modal-dialog">
      <header class="modal-header">
        <b>
          <h2>
            <p class="text-dark"> Inicio de sesion</p>
          </h2>
        </b>
        <button class="close-modal" aria-label="close modal" data-close>
          ✕
        </button>
      </header>
      <section class="modal-content">
        <p class="text-dark"><strong>Para inicar sesión necesita lo siguiente:</strong></p>
        <p class="text-dark">1.- Estar registrado</p>
        <p class="text-dark">2.- <FONT COLOR="red"><b>Correo y contraseña</b></FONT> validas</p>
      </section>
      <footer class="modal-footer">
        <b>
          <p class="text-dark">Espero te haya servido la información</p>
        </b>
      </footer>
    </div>
  </div>
  <!--******************************************************3333******************************************************--->
  <div class="modal" id="modal3" data-animation="slideInOutLeft">
    <div class="modal-dialog">
      <header class="modal-header">
        <b>
          <h2>
            <p class="text-dark"> Compras</p>
          </h2>
        </b>
        <button class="close-modal" aria-label="close modal" data-close>
          ✕
        </button>
      </header>
      <section class="modal-content">
        <p class="text-dark"><strong>Para realizar una compra, sigue los siguientes pasos:</strong></p>
        <p class="text-dark">Paso 1: Dirigirse al apartado de <FONT COLOR="red"><b>cataogo</b></FONT>
        </p>
        <p class="text-dark">Paso 2: Seleccionar un producto</p>
        <p class="text-dark">Paso 3: Dar click en <FONT COLOR="red"><b>ver más</b></FONT>
        </p>
        <p class="text-dark">Paso 4: Seleccionar la opcion de comprar</p>
        <p class="text-dark">Paso 5: Registrar los datos del metodo de pago</p>
      </section>
      <footer class="modal-footer">
        <b>
          <p class="text-dark">Espero te haya servido la información</p>
        </b>
      </footer>
    </div>
  </div>
  <!--******************************************************444******************************************************--->
  <div class="modal" id="modal4" data-animation="slideInOutLeft">
    <div class="modal-dialog">
      <header class="modal-header">
        <b>
          <h2>
            <p class="text-dark"> Cancelacion
            <p>
          </h2>
        </b>
        <button class="close-modal" aria-label="close modal" data-close>
          ✕
        </button>
      </header>
      <section class="modal-content">
        <p class="text-dark"><strong>Para realizar cancelaciones sigue los siguientes pasos:</strong></p>
        <p class="text-dark">Paso 1: Debe iniciar sesion como <FONT COLOR="red"><b>comprador</b></FONT>
        </p>
        <p class="text-dark">Paso 2: Dirigirse al apartado de compras</p>
        <p class="text-dark">paso 3: Seleccionar el producto pedido</p>
        <p class="text-dark">paso 4: Dar click en <FONT COLOR="red"><b>cancelar</b></FONT> y confirmar la cancelación</p>
      </section>
      <footer class="modal-footer">
        <b>
          <p class="text-dark">Espero te haya servido la información</p>
        </b>
      </footer>
    </div>
  </div>
  <!--******************************************************3333******************************************************--->
  <div class="modal" id="modal5" data-animation="slideInOutLeft">
    <div class="modal-dialog">
      <header class="modal-header">
        <b>
          <h2>
            <p class="text-dark">Devoluciones</p>
          </h2>
        </b>
        <button class="close-modal" aria-label="close modal" data-close>
          ✕
        </button>
      </header>
      <section class="modal-content">
        <p class="text-dark"><strong>Para realizar devoluciones, sigue los siguientes pasos:</strong></p>
        <p class="text-dark">Paso 1: Iniciar sesion como <FONT COLOR="red"><b>comprador</b></FONT>
        </p>
        <p class="text-dark">Paso 2: Dirigirse al apartado de compras</p>
        <p class="text-dark">paso 3: Seleccionar el producto</p>
        <p class="text-dark">paso 4: Dar click en la opcion <FONT COLOR="red"><b>Devolver Gratis</b></FONT>
        </p>
        <p class="text-dark">paso 5: Se le enviara una etiqueta de envio para imprimirlo y peguarlo en el paquete</p>
        <p class="text-dark">Paso 6: Llevar el paquete a paqueteria</p>
        <p class="text-dark">Paso 7: <FONT COLOR="red"><b>¡Listo!</b></FONT> Se te devuelve el dinero</p>
      </section>
      <footer class="modal-footer">
        <b>
          <p class="text-dark">Espero te haya servido la información</p>
        </b>
      </footer>
    </div>
  </div>

  <!--******************************************************3333******************************************************--->
  <div class="modal" id="modal6" data-animation="slideInOutLeft">
    <div class="modal-dialog">
      <header class="modal-header">
        <b>
          <h2>
            <p class="text-dark"> Suscripción </p>
          </h2>
        </b>
        <button class="close-modal" aria-label="close modal" data-close>
          ✕
        </button>
      </header>
      <section class="modal-content">
        <p class="text-dark"><strong>Para suscribirse, sigue los siguientes pasos:</strong></p>
        <p class="text-dark">Paso 1: Entrar al siguinete enlace: </p>
        <p class="text-dark">Paso 2: Llenar todos los apartados</p>
        <p class="text-dark">Paso 3: Confirmar los <FONT COLOR="red"><b>correos</b></FONT> y las <FONT COLOR="red"><b>contraseñas</b></FONT>
        </p>
        <p class="text-dark">Paso 4: Aceptar los <FONT COLOR="red"><b>terminos y condiciones</b></FONT>
        </p>
        <p class="text-dark">Paso 6: Dar click en <FONT COLOR="red"><b>Registrar</b></FONT>
        </p>
      </section>
      <footer class="modal-footer">
        <b>
          <p class="text-dark">Espero te haya servido la información</p>
        </b>
      </footer>
    </div>
  </div>



  @if(Session::has('mensaje'))
  @if(Session::get('mensaje')==('Se ha enviado tu respuesta a los administradores del sitio'))
  <center>
    <div class="alert alert-success alert-dismissible" style="width:41%" role="alert">
      @endif
      {{Session::get('mensaje')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </center>
  @endif


  <div class="container">
    <button type="button" class="btn btn-primary btn-sm btn-flotante" data-toggle="modal" data-target="#modal-buzon">
      Buzon de quejas
    </button>
  </div>

  @include('buzon.quejas')


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  <br><br>
  <br><br>
  <footer>
    @include('comprador.footer')
  </footer>

  <style>
    .btn-flotante {
      font-size: 14px;
      /* Cambiar el tamaño de la tipografia */
      color: white;
      /* Color del texto */
      letter-spacing: 2px;
      /* Espacio entre letras */
      padding: 18px 30px;
      /* Relleno del boton */
      position: fixed;
      bottom: 100px;
      /*lo deja abajo*/
      right: 40px;
      transition: all 300ms ease 0ms;
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);


    }

    .btn-flotante:hover {
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
      transform: translateY(-7px);
    }

    @media only screen and (max-width: 100px) {
      .btn-flotante {
        font-size: 14px;
        padding: 12px 20px;
        bottom: 20px;
        right: 20px;
      }
    }
  </style>

  <script>
    jQuery(function($) {
      $.fn.hScroll = function(amount) {
        amount = amount || 120;
        $(this).bind("DOMMouseScroll mousewheel", function(event) {
          var oEvent = event.originalEvent,
            direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta,
            position = $(this).scrollLeft();
          position += direction > 0 ? -amount : amount;
          $(this).scrollLeft(position);
          event.preventDefault();
        })
      };
    });

    $(document).ready(function() {
      $('#box').hScroll(40);
    });
  </script>


  <script>
    //que necesita
    const openEls = document.querySelectorAll("[data-open]");
    const closeEls = document.querySelectorAll("[data-close]");
    const isVisible = "is-visible";

    for (const el of openEls) {
      el.addEventListener("click", function() {
        const modalId = this.dataset.open;
        document.getElementById(modalId).classList.add(isVisible);
      });
    }

    for (const el of closeEls) {
      el.addEventListener("click", function() {
        this.parentElement.parentElement.parentElement.classList.remove(isVisible);
      });
    }

    document.addEventListener("click", e => {
      if (e.target == document.querySelector(".modal.is-visible")) {
        document.querySelector(".modal.is-visible").classList.remove(isVisible);
      }
    });

    document.addEventListener("keyup", e => {
      // if we press the ESC
      if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
        document.querySelector(".modal.is-visible").classList.remove(isVisible);
      }
    });
  </script>



  <style>
    #box {
      overflow-y: visible;
      overflow-x: auto;
      white-space: nowrap;
      vertical-align: text-top;
      margin: 0;
      padding: 0;
      clear: both;
      border-spacing: 5px;
    }

    .item {
      display: table-cell;
      min-width: 240px;
      width: 200px;
      font-size: 23px;
      border: 2px solid #8ccfe9;
      border-radius: 5px;
      padding: 5px;
      margin: 5px;
      white-space: normal;
      line-height: 1.6;
      vertical-align: top;
      text-align: center;
    }

    /* RESET RULES 
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    :root {
      --lightgray: #efefef;
      --blue: rgb(46, 80, 230);
      --white: #fff;
      --black: rgba(0, 0, 0, 0.8);
      --bounceEasing: cubic-bezier(0.51, 0.92, 0.24, 1.15);
    }

    * {
      padding: 0;
      margin: 0;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    body {
      font: 16px/1.5 sans-serif;
    }

    .open-modal {
      font-weight: bold;
      background: var(--blue);
      color: var(--white);
      padding: 0.75rem 1.75rem;

      border-radius: 30px;
    }

    /* MODAL
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .modal {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
      background: var(--black);
      cursor: pointer;
      visibility: hidden;
      opacity: 0;
      transition: all 0.35s ease-in;
    }

    .modal.is-visible {
      visibility: visible;
      opacity: 1;
    }

    .modal-dialog {
      position: relative;
      max-width: 800px;
      max-height: 80vh;
      border-radius: 5px;
      background: var(--white);
      overflow: auto;
      cursor: default;
    }

    .modal-dialog>* {
      padding: 1rem;
    }

    .modal-header,
    .modal-footer {
      background: var(--lightgray);
    }

    .modal-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
  </style>

</body>

</html>