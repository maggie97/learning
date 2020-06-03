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
                            @endphp
                            <td>{{$child->name}} </td>
                            <td>{{$records->sum('score')}} </td>
                            @if ( count($records) > 0 )
                                <td>{{$records->last()->created_at }} </td>
                            @endif
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection