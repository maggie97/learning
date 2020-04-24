@extends('layouts.app')
@section('scripts')
<link href="{{ asset('css/game.css') }}" rel="stylesheet">
<script>

    var y=0;          
    var x=0; 
    var velocidad=1;

    var widthXheightBubble = 100;
    let gameSpace = 0;
    var burbujas = new Array();

    var topLienzo = 0;
    let alphabet = ['A', 'B', 'C', 'D', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    var nivel = 0, aciertos = 0, puntaje = 0;


    function Bubble(id, width, posInitX, posInitY, speed, text){
        this.id = 'b' + id;
        this.width = width;
        this.X = posInitX;
        this.Y = posInitY;
        this.speed = speed;
        this.text = text;

        this.dirX = (-1) * (id + 1);
        this.dirY = (-1) * (id + 1);
    }

    var burbuja = new Bubble('b_2', 100, 100, 0, 0, 10);
    
    
    function moveInAxisY(i){
        //Eje Y
        y = burbujas[i].Y;
        y += velocidad *  burbujas[i].dirY;

        if(y <= topLienzo || y >= gameSpace.offsetHeight + topLienzo - 1 - widthXheightBubble ){
            burbujas[i].dirY *= -1
            y += velocidad *  burbujas[i].dirY ;
        }
    }
    function moveInAxisX(i){
        //Eje X
        x = burbujas[i].X;

        x += velocidad * burbujas[i].dirX;

        if(x <= 0 || x >= gameSpace.offsetWidth - widthXheightBubble ){
            burbujas[i].dirX *= -1
            x += velocidad * burbujas[i].dirX ;
        }
        burbujas[i].X = x;
        burbujas[i].Y = y;
        document.getElementsByClassName("bubble")[i].style.left=String(x)+"px";
        document.getElementsByClassName("bubble")[i].style.top=String(y)+"px";
    }
    function mover(){
        for(var i=0; i<burbujas.length; i++)
        {
            moveInAxisY(i);
            moveInAxisX(i);
        }
    }

    function pressBubble(id){
        var bubble=document.getElementById(id);
        let index  = burbujas.findIndex(e => e.id == id);
        console.log(id);
        switch(nivel){
            case 0:
                burbujaRevienta(index, bubble);
            break;
            case 1:
                if(['A', 'E', 'I', 'O', 'U'].indexOf(burbujas[index].text) > -1)
                {
                    console.log("vocal");
                    burbujaRevienta(index, bubble);
                }
                break;
            default:
                console.log('fuera de rango');
                break;
        }
        if (aciertos  == puntaje ){
            alert("Ganaste");
        }
        
    }
    function burbujaRevienta(index, bubble){
        lienzo.removeChild(bubble);
        burbujas.splice(index, 1);
        console.log(burbujas);
        puntaje += 1;
        document.getElementById('puntaje').innerHTML = puntaje;
    }
    function onclickStartButton(){
        gameSpace = document.getElementById('lienzo');
        document.getElementById("instruction").innerHTML = "Elimina todas las burbujas";
        document.getElementById('div_puntation').style="";
        init();
        var intervalo=setInterval("mover()",100);
    }
    function textoInstruccion(){

    }
    function init(){

        difficultad = 10;
        for(var i = 0; i< 10; i++){
            var posX = Math.floor(Math.random() * (gameSpace.offsetWidth - 100)) ;
            var posY =  Math.floor(Math.random() * (gameSpace.offsetHeight - 100)) + topLienzo;
            var bubb = new Bubble(i, 100, posX ,posY, 1, alphabet[i]);
            gameSpace.innerHTML +=  "<div class='bubble d-flex justify-content-center align-items-center' id='"
                                    + bubb.id+ "' onclick='pressBubble( \""+ bubb.id +"\" )' style='width:"+bubb.X+" ; height: "+bubb.Y+"' ><p>"
                                    + bubb.text + "</p></div>";
            burbujas.push( bubb);
            determineAcerts(bubb.text);
        }
        document.getElementById('aciertos').innerHTML = aciertos;
        document.getElementById('puntaje').innerHTML = puntaje;
    }
    function determineAcerts(letter){
        switch( nivel){
            case 0:
                aciertos += 1;
            break;
            case 1: 
                if (['A', 'E', 'I', 'O', 'U'].indexOf(letter) > -1){
                    aciertos+=1;
                }
            default:
            break;
        }
    }
</script>   
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