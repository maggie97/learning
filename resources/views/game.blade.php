@extends('layouts.app')
<!DOCTYPE html>
    <html>
        <head> 
            <style>
             .content {
                text-align: center;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .full-height {
                height: 15vh;
            }
            .links > a {
                color: #636b6f;
                padding: 0 100px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            </style>
        </head>
    
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
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="links">
                    <a href="{{ route('bubbles') }}">Bubbles</a>
                    <a href=" {{ route('memory') }} ">Memoria</a><br><br>
                    <a href="{{ route('masInfo') }}">Información</a>
                    
                </div>
            </div>
        </div>
         @endsection
    </html>