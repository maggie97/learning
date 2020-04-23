@extends('layouts.app')

@section('content')
<script type="text/javascript">
 
    //Definimos las variables:
    var y=0;          
    var x=0;
    var controlY=1; 
    var controlX=1; 
    var velocidad=1;

    var widthXheightBubble = 100;

    // Cada 6 mili-segundos se va a ejecutar la función mover que comprueba
            // las colisiones de la pelota
    var intervalo=setInterval("mover()",6);

    function moveInAxisY(){
        //Eje Y
        if(controlY==1){
            y+=velocidad;
        }else{        
            y-=velocidad;
        }
        if(y<=0){
            controlY=1;
            y=0;
        }else if(y>=document.getElementById("lienzo").offsetHeight - widthXheightBubble ){
            // Esto significa si y es mayor o igual a la altura que tiene el lienzo menos el tamaño de la imagen

            controlY=0;
            y=document.getElementById("lienzo").offsetHeight - widthXheightBubble;
        }
    }
    function moveInAxisX(){
        //Eje X
        if(controlX==1){
            x+=velocidad;
        }else{        
            x-=velocidad;
        }
        if(x<=0){
            controlX=1;
            x=0;
        }else if(x>=document.getElementById("lienzo").offsetWidth - widthXheightBubble ){
            controlX=0;
            x=document.getElementById("lienzo").offsetWidth - widthXheightBubble;
        }
       /*  document.getElementById("imagen").style.left=String(x)+"px";
        document.getElementById("imagen").style.top=String(y)+"px"; */

        document.getElementById("b_1").style.left=String(x)+"px";
        document.getElementById("b_1").style.top=String(y)+"px";
    }
    function mover(){
        moveInAxisY();
        moveInAxisX();
    }
    function pressBubble(id){
        alert(id);
    }
    class Bubble{
        constructor(width, height, posInitX, posInitY, speed){
            this.width = width;
            this.height = height;
            this.speed = speed;
            this.X = posInitX;
            this.Y = posInitY;
            this.
        }

        var controlY=1; 
        var controlX=1; 
        var velocidad=1;

        var widthXheightBubble = 100;

        // Cada 6 mili-segundos se va a ejecutar la función mover que comprueba
                // las colisiones de la pelota
        var intervalo=setInterval("mover()",6);

        function moveInAxisY(){
            //Eje Y
            if(controlY==1){
                y+=velocidad;
            }else{        
                y-=velocidad;
            }
            if(y<=0){
                controlY=1;
                y=0;
            }else if(y>=document.getElementById("lienzo").offsetHeight - widthXheightBubble ){
                // Esto significa si y es mayor o igual a la altura que tiene el lienzo menos el tamaño de la imagen

                controlY=0;
                y=document.getElementById("lienzo").offsetHeight - widthXheightBubble;
            }
        }
        function moveInAxisX(){
            //Eje X
            if(controlX==1){
                x+=velocidad;
            }else{        
                x-=velocidad;
            }
            if(x<=0){
                controlX=1;
                x=0;
            }else if(x>=document.getElementById("lienzo").offsetWidth - widthXheightBubble ){
                controlX=0;
                x=document.getElementById("lienzo").offsetWidth - widthXheightBubble;
            }
        /*  document.getElementById("imagen").style.left=String(x)+"px";
            document.getElementById("imagen").style.top=String(y)+"px"; */

            document.getElementById("b_1").style.left=String(x)+"px";
            document.getElementById("b_1").style.top=String(y)+"px";
        }
        function mover(){
            moveInAxisY();
            moveInAxisX();
        }
    }
</script>

<h2>Mover elemento en Eje Z</h2>
<div id="lienzo">
    <div class="bubble" id="b_1" onclick="pressBubble('b_1')" ></div>
    {{-- <img src="{{ asset('img/ball-black-bubble.jpg')}}" id="imagen" alt="eclipse"/> --}}
</div>

@endsection