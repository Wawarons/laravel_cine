@extends('base')

@section('style')
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
@endsection

@section('title', 'Page d\'accueil')
@section('header_title', 'Titre')
@section('content')

    @include('components/header')

@endsection

