@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row  justify-content-center">
        <div class="col-10 d-flex justify-content-center">
            <form action="" class="col-12">
                <div class="form-group row">
                    <label for="Name"  class="col-12 col-form-label">Nombre:</label>
                    <div class="col-sm-12">
                        <input type="text"  class="form-control" id="Name"  required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Email1"  class="col-12 col-form-label">Apellidos:</label>
                    <div class="col-sm-12">
                        <input type="text"  class="form-control" id="Lastname"  required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Email1"  class="col-12 col-form-label">Fecha de Nacimiento:</label>
                    <div class="col-sm-12">
                        <input type="date"  class="form-control" id="dateBorn" required>
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="TutorID" class="col-12 col-form-label">TutorID</label>
                    <div class="col-sm-12">
                    <input type="text" readonly class="form-control-plaintext"  id="TutorID"  value="{{Auth::user()->id}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="teacherId"  class="col-12 col-form-label">Codigo de maestro:</label>
                    <div class="col-sm-12">
                        <input type="text"  class="form-control" id="teacherId"  placeholder="20191919191">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection