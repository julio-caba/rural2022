@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/home.css">
<div class="instagram-photo">
        <h2 class="h1 pl-2" style="color: #00A27F;">Selecciona una de las siguientes opciones:</h2>        
        <a href="{{ url('/vocacional') }}">
        <div class="insta-item set-bg">
            <div class="inside-text">
            </div>
        </div>                          
        </a>
        <a href="{{ url('/preguntas') }}">
        <div class="insta-item set-bg2">
            <div class="inside-text">
            </div>
        </div>
        </a>
        
       
    </div>

@endsection
