@extends('errors::minimal')

@section('title', __('Error 404'))
@section('header', __('¡¡ Alerta !!'))
@section('img',__('public/img/error404.gif'))
@section('code', 'Error: 404')
@section('message', __('¡¡ Vaya !! No hemos podido encontrar la pagina que busca'))