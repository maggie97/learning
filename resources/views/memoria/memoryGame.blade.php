@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/memoryGameFunctions.js') }}"></script>
<link href="{{ asset('css/memoryGame.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="memory-game">
  <div class="memory-card" data-framework="abeja">
      <img class="front-face" src="{{url('img/abeja.jpg')}}"
        alt= "Abeja" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="abeja">
      <img class="front-face" src="{{url('img/abeja1.jpg')}}" alt= "Abeja1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="caracol">
      <img class="front-face" src="{{url('img/caracol.jpg')}}"
        alt= "Caracol" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="caracol">
      <img class="front-face" src="{{url('img/caracol1.jpg')}}"
        alt= "Caracol1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="gato">
      <img class="front-face" src="{{url('img/gato.jpg')}}"
        alt= "Gato" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="gato">
      <img class="front-face" src="{{url('img/gato1.jpg')}}"
        alt= "Gato1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="pajaro">
      <img class="front-face" src="{{url('img/pajaro.jpg')}}"
        alt= "Pajaro" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="pajaro">
      <img class="front-face" src="{{url('img/pajaro1.jpg')}}"
        alt= "Pajaro1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="perro">
      <img class="front-face" src="{{url('img/perro.jpg')}}"
        alt= "Perro" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="perro">
      <img class="front-face" src="{{url('img/perro1.jpg')}}"
        alt= "Perro1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="vaca"> 
      <img class="front-face" src="{{url('img/vaca.jpg')}}"
        alt= "Vaca" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="vaca">
      <img class="front-face" src="{{url('img/vaca1.jpg')}}"
        alt= "Vaca1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"
         alt="Tapa" />
  </div>
</section>

@endsection