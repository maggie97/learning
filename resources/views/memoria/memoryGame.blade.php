@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/memoryGameFunctions.js') }}"></script>
<link href="{{ asset('css/memoryGame.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="memory-game">
  <div class="memory-card" data-framework="abeja" id="c1"  onclick="flipCard('c1')">
      <img class="front-face" src="{{url('img/abeja.jpg')}}" alt= "Abeja"  />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa"/>
  </div>
  <div class="memory-card" data-framework="abeja" id="c2" onclick="flipCard('c2')">
      <img class="front-face" src="{{url('img/abeja1.jpg')}}" alt= "Abeja1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="caracol" id="c3"  onclick="flipCard('c3')">
      <img class="front-face" src="{{url('img/caracol.jpg')}}" alt= "Caracol" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="caracol" id="c4" onclick="flipCard('c4')">
      <img class="front-face" src="{{url('img/caracol1.jpg')}}"alt= "Caracol1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="gato" id="c5" onclick="flipCard('c5')">
      <img class="front-face" src="{{url('img/gato.jpg')}}" alt= "Gato" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="gato" id="c6" onclick="flipCard('c6')">
      <img class="front-face" src="{{url('img/gato1.jpg')}}" alt= "Gato1"  />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"  alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="pajaro" id="c7" onclick="flipCard('c7')">
      <img class="front-face" src="{{url('img/pajaro.jpg')}}" alt= "Pajaro"  />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="pajaro" id="c8" onclick="flipCard('c8')">
      <img class="front-face" src="{{url('img/pajaro1.jpg')}}" alt= "Pajaro1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="perro" id="c9" onclick="flipCard('c9')">
      <img class="front-face" src="{{url('img/perro.jpg')}}" alt= "Perro" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}"  alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="perro" id="c10" onclick="flipCard('c10')">
      <img class="front-face" src="{{url('img/perro1.jpg')}}"  alt= "Perro1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="vaca" id="c11" onclick="flipCard('c11')">  
      <img class="front-face" src="{{url('img/vaca.jpg')}}"  alt= "Vaca" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
  <div class="memory-card" data-framework="vaca" id="c12" onclick="flipCard('c12')">
      <img class="front-face" src="{{url('img/vaca1.jpg')}}" alt= "Vaca1" />
      <img class="back-face" src="{{url('img/tapa.jpg')}}" alt="Tapa" />
  </div>
</section>

@endsection