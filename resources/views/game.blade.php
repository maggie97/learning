@extends('layouts.app')

@section('scripts')
        <div class="row justify-content-center">
            <div class="content">
                <div class="links">
                    <a href="{{ route('bubbles') }}">Bubbles</a>
                    <a href=" {{ route('memory') }} ">Memoria</a><br><br>
                    <a href="{{ route('masInfo') }}">Información</a>
                    
                </div>
            </div>
        </div>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 text-center">  
            <h2>Juegos</h2> 
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-4" style="height: 200px">
            <a href="{{ route('bubbles') }}">
                <img src="{{ url('img/bubblesGame.jpg')}}" alt="" style="width:100%; height: 100%">
            </a>
        </div>
        <div class="col-4" style="height: 200px; width:100% ">
            <a href="{{ route('memory')}}">
                <img src="{{ url('img/memoryGame.jpg')}}" alt="" style="width:100%; height: 100%">
            </a>
        </div>
    </div>
</div>

@endsection
         