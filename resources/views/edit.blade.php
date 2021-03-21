@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                - {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('agenda.update', $agenda) }}" method="POST">
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name',$agenda->name) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="{{ old('lastName',$agenda->lastName) }}">
                        </div>
                        <div class="sm text-muted">Sex</div>
                        <div class="form-group">
                            <span class="form-control">
                                @if ($agenda->sexo>0)
                                    <span>
                                        <label>Female</label>
                                        <input type="radio" name="sexo" value="1" checked>
                                    </span>
                                    &nbsp;
                                    &nbsp;
                                    <span class="ml-auto">
                                        <label>Male</label>
                                        <input type="radio" name="sexo" value="0">
                                    </span>    
                                @else
                                    <span>
                                        <label>Female</label>
                                        <input type="radio" name="sexo" value="1">
                                    </span>
                                    &nbsp;
                                    &nbsp;
                                    <span class="ml-auto">
                                        <label>Male</label>
                                        <input type="radio" name="sexo" value="0" checked>
                                    </span>
                                @endif
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="telefono" class="form-control" placeholder="Phone" value="{{ old('telefono',$agenda->telefono) }}">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email',$agenda->email) }}">
                        </div>
                        <div class="sm text-muted">Marital Status</div>
                        <div class="form-group">
                            <span class="form-control">
                                @if ($agenda->estado_civil>0)
                                    <span>
                                        <label>Casado</label>
                                        <input type="radio" name="estado_civil" value="1" checked>
                                    </span>
                                    &nbsp;
                                    &nbsp;
                                    <span>
                                        <label>Soltero</label>
                                        <input type="radio" name="estado_civil" value="0">
                                    </span>
                                @else
                                    <span>
                                        <label>Casado</label>
                                        <input type="radio" name="estado_civil" value="1">
                                    </span>
                                    &nbsp;
                                    &nbsp;
                                    <span>
                                        <label>Soltero</label>
                                        <input type="radio" name="estado_civil" value="0" checked>
                                    </span>          
                                 @endif
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="date" name="birthay" placeholder="Birthay" class="form-control" value="{{ old('birthay',$agenda->birthay) }}">
                        </div>
                        @csrf
                        <input type="submit" value="Send" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
