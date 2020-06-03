@extends('layouts.app')
@section('scripts')
<link href="{{ asset('css/game.css') }}" rel="stylesheet">
<script src="{{ asset('js/bubbleGame.js') }}"></script>
<script>
    $('document').ready(function(){
        $('#myModal').modal('show');
        $('.btn-card').click(function(){
            $childId = $(this).attr('id');
            $('#childId').val($childId);
        })
    })
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 " id="info">
        <h1 class="h1">Captura las burbujas </h1>
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
        <div class="col d-flex justify-content-center">
            <input type="hidden" id="childId" name="childId" value="">
            <button id="play"class="btn btn-dark" onclick="onclickStartButton()" {{-- data-toggle="modal" data-target="#staticBackdrop" --}}>
                Play
            </button>
        </div>
    </div>
</div>

<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Elige tu perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row justify-content-around">
                    @foreach (Auth::user()->children as $child)
                        <button id="{{$child->id}}" class="btn btn-dark bg-dark btn-card col-5" data-dismiss="modal" >
                            {{$child->name}}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection