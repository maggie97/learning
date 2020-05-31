@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row  justify-content-center">
        <div class="col-8 d-flex justify-content-center">
            <form action="{{ route('children.store') }}" method="POST" class="col-12">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="name"  class="col-12 col-form-label">Nombre:</label>
                    <div class="col-sm-12">
                        <input type="text"  class="form-control" id="name" name="name" placeholder="Nombre" required>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname"  class="col-12 col-form-label">Apellidos:</label>
                    <div class="col-sm-12">
                        <input type="text"  class="form-control" id="lastname" name="lastname"  required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Email1"  class="col-12 col-form-label">Fecha de Nacimiento:</label>
                    <div class="col-sm-12">
                        <input type="date"  class="form-control" id="dateBorn" name="dateBorn" required>
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="hidden" readonly class="form-control-plaintext" id="TutorID" name="TutorID" value="{{Auth::user()->id}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="teacherId"  class="col-12 col-form-label">Codigo de maestro:</label>
                    <div class="col-sm-12">
                       {{--  <input type="text"  class="form-control" id="teacherId" name="teacherId" > --}}
                        <select name="teacherId" id="teacherId" class="form-control">
                            @foreach ($professores as $p)
                                <option value="{{$p->id}}">{{$p->name }} {{$p->lastname}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Añadir</button>

            </form>
        </div>
    </div>
</div>

@endsection