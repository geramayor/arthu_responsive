@include('comprador.navbar')
<br><br>
    <link rel="stylesheet" type="text/css" href="public/scroll/dist/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="public/scroll/examples/examples.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<title>Registro</title>

<body>

<div id="fullpage">
	<div class="section" id="section0">
		<div class="intro">       
    
    
    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <p class="text-dark">Registrarse</p></div>
               
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="user" class="col-md-4 col-form-label text-md-end text-dark" >{{ __('Tipo de usuario') }}</label>

                            <div class="col-md-6">
                                <select id="user_tipo" class="form-control" name="tipousuario" required autofocus>
                                    <option>Selecciona una opcion</option>
                                    <option value="Proveedor">Proveedor</option>
                                    <option value="Comprador">Comprador</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Nombre completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" onkeypress="return letters(event);" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus required maxlength="100">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" onblur="corr();" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Confirmar correo') }}</label>

                            <div class="col-md-6">
                                <input id="emailconfirm" type="email" onblur="corre();" class="form-control @error('emailconfirm') is-invalid @enderror" name="emailconfirm" value="{{ old('emailconfirm') }}" required autocomplete="emailconfirm">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pass" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" onblur="pass1();" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" required minlength="8" maxlength="10">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cont-confirm" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" onblur="pass2();" class="form-control" name="password_confirmation" required autocomplete="new-password" required minlength="8" maxlength="10">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="curp" class="col-md-4 col-form-label text-md-end text-dark">{{ __('CURP') }}</label>

                            <div class="col-md-6">
                                <input id="curp" onkeyup="javascript:this.value=this.value.toUpperCase();" onblur="validarInput(this)" type="text" class="form-control" value="{{ old('curp') }}" name="curp" required autocomplete="curp" required maxlength="18">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="user" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Pregunta secreta') }}</label>

                            <div class="col-md-6">
                                <select id="preguntas" class="form-control" name="preguntas" required autofocus>
                                    <option>Selecciona una opcion</option>
                                    <option value="¿Cuál es el nombre de tu mascota?">¿Cuál es el nombre de tu mascota?</option>
                                    <option value="¿Cómo se llama tu mejor amigo?">¿Cómo se llama tu mejor amigo?</option>
                                    <option value="¿Cuál es tu equipo favorito?">¿Cuál es tu equipo favorito?</option>
                                    <option value="¿Cuál es el libro que mas te gusta?">¿Cuál es el libro que mas te gusta?</option>
                                    <option value="¿Quién es tu artista favorito?">¿Quién es tu artista favorito?</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="respuesta" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Respuesta') }}</label>

                            <div class="col-md-6">
                                <input id="respuesta" type="text" onkeypress="return letters(event);" class="form-control" value="{{ old('respuesta') }}" name="respuesta" required autocomplete="respuesta">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button onclick="return vacios();" type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    <footer>
         @include('comprador.footer')
    </footer>
		
		
		</div>
	</div>
</div>

</body>
<script>
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
</script>

		</div>
	</div>
</div>
<script type="text/javascript" src="public/scroll/vendors/scrolloverflow.js"></script>
<script type="text/javascript" src="public/scroll/dist/fullpage.js"></script>
<script type="text/javascript" src="public/scroll/examples/examples.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="public/js/validarCreate.js"></script>


<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
        sectionsColor: [],
        scrollOverflow: true
    });
</script>
            
            
            
    <link rel="stylesheet" href="" type="text/css" >

<script>
    var botmanWidget={
        aboutText:"Welcome",
        introMessage:"Bienvenido a nuestro sitio"
    }
</script>
<style>
    .swal2-styled.swal2-confirm.swalBtnColor {
    color: black;
    font: size 20px;
    box-shadow: none;
    }
</style>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/js/main.js"></script>
<script src="public/js/sweetAlert.js"></script>
