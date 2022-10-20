@extends('errors::minimal')

@section('title', __('Error 400'))
@section('header', __('¡¡ Alerta !!'))
@section('img',__('public/img/error400.gif'))
@section('code', 'Error: 400')
@section('message', __('¡¡ Vaya !! No hemos podido procesar tu petición'))
