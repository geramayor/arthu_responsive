<?php

// Inicio
Breadcrumbs::for('catalogo', function ($trail) {
    $trail->push('Inicio', route('catalogo.index'));
});

//Inicio->Crear cuenta
Breadcrumbs::for('comprador', function ($trail) {
    $trail->parent('catalogo');
    $trail->push('Crear cuenta', route('comprador.create'));
});
//Inicio->Crear cuenta->Entrevistas
Breadcrumbs::for('entrevista', function ($trail) {
    $trail->parent('catalogo');
    $trail->push('Entrevistas', route('entrevista.index'));
});

//Inicio->Crear cuenta->entrevistas->acerca
Breadcrumbs::for('acerca', function ($trail) {
    $trail->parent('catalogo');
    $trail->push('Acerca de', route('acerca.index'));
});
//Inicio->Crear cuenta->entrevistas->acerca->faq
Breadcrumbs::for('faq', function ($trail) {
    $trail->parent('catalogo');
    $trail->push('FAQ', route('faq.index'));
});
//Inicio->buscar
Breadcrumbs::for('empleado', function ($trail) {
    $trail->parent('catalogo');
    $trail->push('Empleado', route('faq.index'));
});


Breadcrumbs::for('proveedor', function ($trail) {
    $trail->push('Inicio', route('home'));
});
Breadcrumbs::for('pedido', function ($trail) {
    $trail->parent('proveedor');
    $trail->push('Pedido', route('pedido.index'));
});

Breadcrumbs::for('producto', function ($trail) {
    $trail->parent('proveedor');
    $trail->push('Productos', route('producto.index'));
});

Breadcrumbs::for('agregarproducto', function ($trail) {
    $trail->parent('producto');
    $trail->push('Agregar', route('producto.create'));
});

Breadcrumbs::for('editarproducto', function ($trail) {
    $trail->parent('producto');
    $trail->push('Editar');
});
?>
