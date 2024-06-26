@extends('layout')

@section('content')
    <!-- Aqui está o conteúdo específico da página Home/index -->
    @include('Components.Banner.index')

    @include('Components.Sobre.index')
    @include('Components.Skills.index')
    @include('Components.Tech.index')
    @include('Components.Projetos.index')
    @include('Components.Certificados.index')
    @include('Components.Formulario.index')

    @include('Components.Footer.index')
@endsection
