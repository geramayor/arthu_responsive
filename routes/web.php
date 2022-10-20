<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompradorController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\EntrevistasController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\BuzonController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ModopagoController;
use App\Http\Controllers\RecuperarController;
use App\Http\Controllers\ForgotPasswordController;

Route::get('/',[CatalogoController::class,'index'])->middleware('guest')->name('catalogo.index');
Route::get('/login',[SessionsController::class,'create'])->middleware('guest')->name('login');
Route::get('/logout',[SessionsController::class,'destroy'])->name('login.destroy');
Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('register.index');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');
//Route::post('/password',[PasswordController::class,'store'])->name('register.store');
Route::get('/catalogo',[CatalogoController::class,'index'])->middleware('guest')->name('catalogo.index');
Route::get('/catalogo/{id}',[CatalogoController::class,'show'])->middleware('guest')->name('catalogo.show');


Route::get('/faq',[FaqsController::class,'index'])->middleware('guest')->name('faq.index');
Route::get('/entrevista',[EntrevistasController::class,'index'])->middleware('guest')->name('entrevista.index');
Route::get('/acerca',[AcercaController::class,'index'])->middleware('guest')->name('acerca.index');

Route::get('/producto',[ProductoController::class,'index'])->middleware('auth.proveedor')->name('producto.index');
Route::post('/producto',[ProductoController::class,'store'])->middleware('auth.proveedor')->name('producto.store');
Route::get('/producto/create',[ProductoController::class,'create'])->middleware('auth.proveedor')->name('producto.create');
Route::any('/producto/{id}/edit',[ProductoController::class,'edit'])->middleware('auth.proveedor')->name('producto.edit');
Route::post('/producto/update/{id}',[ProductoController::class,'actualiza'])->middleware('auth.proveedor')->name('producto.actualiza');
Route::any('/producto/{id}/destroy',[ProductoController::class,'destroy'])->middleware('auth.proveedor')->name('producto.destroy');
Route::get('/pedido',[PedidoController::class,'index'])->middleware('auth.proveedor')->name('pedido.index');

Route::resource('/comprador',CompradorController::class);
Route::resource('/proveedor',ProveedorController::class);
//Route::resource('/catalogo',CatalogoController::class);
Route::resource('/modopago',ModopagoController::class);
//Route::resource('/login',LoginController::class);
Route::match(['get', 'post'], 'botman', [BotManController::class , "handle"]);
Route::resource('/buzon',BuzonController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth.proveedor')->name('home');
Route::get('/homecomprador', [App\Http\Controllers\CompradorController::class, 'show'])->middleware('auth.comprador')->name('homecomprador');
Route::get('/pedidos',[PedidoController::class,'create'])->middleware('auth.comprador')->name('pedidos.create');
Route::get('/miscompras',[CompradorController::class,'compras'])->middleware('auth.comprador')->name('pedidos.compras');



Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::get('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


Route::any('/recuperar/response', [App\Http\Controllers\RecuperarController::class, 'store'])->name('recuperar.store');
Route::any('/recuperar/question', [App\Http\Controllers\RecuperarController::class, 'index'])->name('recuperar.index');
Route::any('/recuperar/password', [App\Http\Controllers\RecuperarController::class, 'reset'])->name('recuperar.reset');
