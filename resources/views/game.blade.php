@extends('layouts.app')

<style>
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  color: black;
  font-size: 4em;
}
.hover a img{
    -webkit-filter: grayscale(0) blur(0);
	filter: grayscale(0) blur(0);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover a:hover img{
    opacity: 0.3;
    -webkit-filter: grayscale(90%) blur(3px);
	filter: grayscale(90%) blur(3px);
}
.hover a:hover .middle{
    opacity: 1;
}

</style>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 text-center">  
            <h2>Juegos</h2> 
        </div>
    </div>
    
    <div class="row justify-content-center hover mt-4">
        <div class="col-4" style="height: 200px">
            <a href="{{ route('bubbles') }}" class="hov1">
                <img src="{{ url('img/bubblesGame.jpg')}}" alt="" style="width:100%; height: 100%">
                <div class="middle" id="">Burbujas</div>
            </a>
        </div>
        <div class="col-4" style="height: 200px; width:100% ">
            <a href="{{ route('memory')}}" class="hov2">
                <img src="{{ url('img/memoryGame.jpg')}}" alt="" style="width:100%; height: 100%">
                <div class="middle" id="">Memorama</div>
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="links mt-4">
            <a href="{{ route('masInfo') }}">Información</a>
        </div>
    </div>
</div>

@endsection
         