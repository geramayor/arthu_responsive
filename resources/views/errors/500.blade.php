@extends('errors::minimal')

@section('title', __('Error 500'))
@section('header', __('¡¡ Alerta !!'))
@section('img',__('public/img/error500.gif'))
@section('code', 'Error: 500')
@section('message', __('¡¡ Vaya !! Hemos encontrado un error interno en el servidor'))