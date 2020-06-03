@extends('layouts.app')
@section('scripts')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script src="https://kit.fontawesome.com/2cb3c7d8dc.js" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#scoreTable').DataTable();
        } );
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Puntuaciones</h1>
            </div>
        </div>
@php
    $scores = 0;
@endphp


        <div class="row justify-content-center">
            <div class="col col-md-10">
                <table id="scoreTable" class="text-center">
                    <tr>
                        <th>Nombre de Niño</th>
                        <th>Puntuacion Total</th>
                        <th>Ultima fecha de Juego</th>
                    </tr>
                        @foreach ($children as $child)
                        <tr>
                            @php
                                $records = $child->records;
                                $scores += count($records);
                                $score = $records->sum('score')
                            @endphp
                            @if (count($records)>0)
                                <td> {{ $child->name }} {{ $child->lastname }} </td>
                                <td> {{ $score }} </td>
                                <td> {{ $records->last()->date }} </td> 
                            @endif
                        </tr>
                        @endforeach
                </table>

                @if ($scores == 0)
                    <script>alert('No hay elementos para mostrar')</script>
                @endif
            </div>
        </div>
    </div>
@endsection