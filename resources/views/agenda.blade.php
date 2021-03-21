@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Crear Agenda</div>

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
                    <form action="{{ route('agenda.store') }}" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="{{ old('lastName') }}">
                        </div>
                        <div class="sm text-muted">Sex</div>
                        <div class="form-group">
                            <span class="form-control">
                                <span>
                                    <label>Female</label>
                                    <input type="radio" name="sexo" value="1">
                                </span>
                                &nbsp;
                                &nbsp;
                                <span class="ml-auto">
                                    <label>Male</label>
                                    <input type="radio" name="sexo" value="0">
                                </span>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="telefono" class="form-control" placeholder="Phone (809/829/849)-000-0000" value="{{ old('telefono') }}">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}"> 
                        </div>
                        <div class="sm text-muted">Marital Status</div>
                        <div class="form-group">
                            <span class="form-control">
                                <span>
                                    <label>Casado</label>
                                    <input type="radio" name="estado_civil" value="1">
                                </span>
                                &nbsp;
                                &nbsp;
                                <span>
                                    <label>Soltero</label>
                                    <input type="radio" name="estado_civil" value="0">
                                </span>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="date" name="birthay" placeholder="Birthay" class="form-control"value="{{ old('birthay') }}">
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