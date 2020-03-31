@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName1" class="col-md-4 col-form-label text-md-right">{{ __('Apellido 1') }}</label>

                            <div class="col-md-6">
                                <input id="lastName1" type="text" class="form-control @error('apellido 1 ') is-invalid @enderror" name="lastName1" value="{{ old('lastName1') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName1" class="col-md-4 col-form-label text-md-right">{{ __('Apellido 2') }}</label>

                            <div class="col-md-6">
                                <input id="lastName2" type="text" class="form-control @error('apellido 2 ') is-invalid @enderror" name="lastName2" value="{{ old('lastName2') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                            <div class="col-md-6" id="rol">
                                <div class=" input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <input type="radio" id="maestra" name="chk_rol"  value="maestra">
                                      </div>
                                    </div>
                                    <label id="maestra" class="form-control" > Maestr@ </label>
                                </div>
                                <div class=" input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <input type="radio" id="tutor" value="tutor" name="chk_rol" >
                                      </div>
                                    </div>
                                    <label id="tutor" class="form-control"> Tutor </label>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                             $("chk_rol").click(function(){
                                alert();
                                var selValue = $("input[type='radio']:checked").val();
                                // TODO:  Change this code for a best option if it exsist  
                                const div = document.createElement('div');
                                div.className = 'row';
                                div.innerHTML = "<label> Si se pudo </label>" 
                            });
                        </script>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registro') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
