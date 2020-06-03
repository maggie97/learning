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
    font-size: 60px;
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
<title>Nosotros</title>
</head>
@section('content')
<body class="cuerpo">
<h1 class="encabezado">¡Aprendamos a leer!</h1>
<p class="parrafo">Nuestro objetivo es ayudar a niños <br>
    que estén cursando el último grado de la eduación preescolar y/o <br>
    los primeros grados de primaria, a que su aprendizaje en la lectura<br>
    sea más divertida, entretenida y fácil para que ellos no pierdan el interés.<br>
</p>
<h1 class="encabezado">Creado por </h1>
<p class="parrafo2">MARGARITA NEFTALÍ MÉNDEZ RODRÍGUEZ<br>
    CARMEN VIRDIANA SOLIS PÉREZ
</p>

</body>
@endsection

</html>