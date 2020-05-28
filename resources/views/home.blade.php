@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Perfil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="">
                        <div class="form-group row">
                            <label for="Email1"  class="col-sm-2 col-form-label">Nombre:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly  class="form-control-plaintext" id="NAme" aria-describedby="emailHelp" value="{{Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Email1"  class="col-sm-2 col-form-label">Apellidos:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="Lastname" value="{{Auth::user()->lastName}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Email1"  class="col-sm-2 col-form-label">Nombre:</label>
                            <div class="col-sm-8">
                                <input type="email" readonly  class="form-control-plaintext" id="Name" value="{{Auth::user()->name}}">
                            </div>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Auth::user()->email}}">
                              
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Email1"  class="col-sm-2 col-form-label">Contraseña:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="Password"  value="**********">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
