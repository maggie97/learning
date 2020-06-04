@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/memoryGameFunctions.js') }}"></script>
<link href="{{ asset('css/memoryGame.css') }}" rel="stylesheet">
<link href="{{ asset('css/game.css') }}" rel="stylesheet">
<script>
    $('document').ready(function(){
        $('#myModal').modal('show');

        $('.btn-card').click(function(){
            $childId = $(this).attr('id');
            $('#childId').val($childId);
            $('audio#myAudio').trigger('play') ;
        });

        $('#sendRecord').click(function(){
            var childID = $("input[name=childId]").val();
            var score = $("input[name=score]").val();
        })

        $('.memory-card').click(function(id){
            //alert(id.delegateTarget.id.split('c')[1]);
            var audioId = id.delegateTarget.id.split('c')[1];
            switch(audioId){
                case "2":
                case "1":
                    $('audio#abeja').trigger('play');
                    break;
                case "4":
                case "3":
                    $('audio#caracol').trigger('play');
                    break;
                case "6":
                case "5":
                    $('audio#gato').trigger('play');
                    break;
                case "8":
                case "7":
                    $('audio#pajaro').trigger('play');
                    break;
                case "10":
                case "9":
                    $('audio#perro').trigger('play');
                    break;
                case "12":
                case "11":
                    $('audio#vaca').trigger('play');
                    break; 
                default:
                    break;
            }
            
        })
    })
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="col-10 text-center"> Memorama </h1>
    </div>
    <div class="row justify-content-center">
        <div class="p text-center">Voltea las tarjetas buscando su par</div>
    </div>
    <audio id="myAudio" >
        <source src="{{ url('audio/memoria0.mp3') }} " type="audio/mpeg">
    </audio>
    <audio id="abeja"> <source src="{{ url('Audio_Memoria/abejaA.mp3') }} " type="audio/mpeg"> </audio>
    <audio id="caracol"> <source src="{{ url('Audio_Memoria/CaracolA.mp3') }} " type="audio/mpeg"> </audio>
    <audio id="gato"> <source src="{{ url('Audio_Memoria/Gatoa.mp3') }} " type="audio/mpeg"> </audio>
    <audio id="pajaro"> <source src="{{ url('Audio_Memoria/PajaroA.mp3') }} " type="audio/mpeg"> </audio>
    <audio id="perro"> <source src="{{ url('Audio_Memoria/perroa.mp3') }} " type="audio/mpeg"> </audio>
    <audio id="vaca"> <source src="{{ url('Audio_Memoria/VacaA.mp3') }} " type="audio/mpeg"> </audio>
    
    <div class="row justify-content-center" id="div_puntation">
        <div class="col-4 d-flex justify-content-center align-content-center text-center">
            <h3>Aciertos:</h3>
            <p id="aciertos"></p>
        </div>
        
        <div class="col-4 d-flex">
            <h3>Puntuacion:</h3>
            <p id="puntaje"></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
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
        </div>
    </div>
</div>

<div class="row m-1 justify-content-center">
    <form action=" {{route('records.store')}} " class="col-md-2 d-flex justify-content-center" method="POST">
        @csrf
        <input type="hidden" id="childId" name="childId" value="">
        <input type="hidden" id="scoreTotal" name="score" value="0">
        <input type="hidden" id="gameId" name="childId" value="2">
        <button id="sendRecord" type="submit" class="btn btn-dark bg-dark" >
            Guardar Puntuacion
        </button>
    </form>
    <button type="reset" class="btn btn-dark bg-dark col-md-2" >
        Salir
    </button>
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
                        <button id="{{$child->id}}" class="btn m-2 btn-dark bg-dark btn-card col-5" data-dismiss="modal" >
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