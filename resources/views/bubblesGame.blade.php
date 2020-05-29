@extends('layouts.app')
@section('scripts')
<link href="{{ asset('css/game.css') }}" rel="stylesheet">
<script src="{{ asset('js/bubbleGame.js') }}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 " id="info">
            <h1 class="h1">Captura las burbujas</h1>
            <p id="instruction"></p>
            <div class="row " style="visibility: hidden" id="div_puntation">
                <div class="col-4 d-flex justify-content-center align-content-center">
                    <h3>Aciertos:</h3>
                    <p id="aciertos"></p>
                </div>
                
                <div class="col-4 d-flex">
                    <h3>Puntuacion:</h3>
                    <p id="puntaje"></p>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div id="lienzo" class="col-10" > </div>
    </div>
    <div class="row m-1 justify-content-center">
        <div class="col d-flex justify-content-center"><button class="btn btn-dark" onclick="onclickStartButton()">Play</button></div>
    </div>
    
</div>
    
@endsection