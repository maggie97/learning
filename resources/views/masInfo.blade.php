@extends('layouts.app')

<!DOCTYPE html>
     <html> 
    <style type="text/css">/*SecciÃ³n para las clases*/

    .cuerpo/*Clase que define las caracterÃ­sticas del cuerpo(toda la pantalla)*/
    {
        text-align: center;/*Texto alineado al centro*/
        background-color: #FFFFFF;/*Color de fondo*/
    }
    .encabezado/*Clase que define las caracterÃ­sticas del encabezado*/
    {
        text-align: center;/*Texto alineado al centro*/
        color: #636b6f;/*Color del encabezado */
        font-family:'Nunito', sans-serif;
        font-size: 35px;
    }
    .parrafo/*Clase que define las caracterÃ­sticas que tiene el pÃ¡rrafo */
    {
        font-family:'Nunito', sans-serif;/*Tipo de fuente*/
        font-size: 30px;/*TamaÃ±o del texto*/
    }
    .parrafo2/*Clase que define las caracterÃ­sticas que tiene el pÃ¡rrafo */
    {
        font-family: 'Nunito', sans-serif;/*Tipo de fuente*/
        font-size: 30px;/*TamaÃ±o del texto*/
    }
   
    </style>

    <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Ayuda</title>
    </head>
    @section('content')
    <body class="cuerpo">
    <h1 class="encabezado">Bubbles</h1>
    <p class="parrafo">El objetivo del juego es que el niño  <br>
        elimine las burbujas y con ayuda del sonido pueda identificar la letra <br>
        y poco a poco  pueda reconocerlas mas facil.<br>
        <br>
        <div class="row justify-content-center">
            <div class="col-4" style="height: 200px">
                <a href="{{ route('bubbles') }}">
                    <img src="{{ url('img/bubblesGame.jpg')}}" alt="" style="width:100%; height: 100%">
                </a>
            </div>
        </div>
    </p>
    <h1 class="encabezado">Memorama </h1>
    <p class="parrafo2"> Este juego le ayudará al niño a reconocer <br>
        algunos animales con nombres cortos, para asi facilitar su aprendizaje<br>
    </p>
    <div class="row justify-content-center">
        <div class="col-4" style="height: 200px; width:100% ">
            <a href="{{ route('memory')}}">
                <img src="{{ url('img/memoryGame.jpg')}}" alt="" style="width:100%; height: 100%">
            </a>
        </div>
    </div>

    </body>
    @endsection
    </html>