@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Listas de Agenda</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('agendas.search') }}" method="POST">
                        @method('POST')
                        <div class="row mt-2 mb-2">
                            <div class="col-sm-10">
                                <input type="search" name="search" class="form-control" placeholder="Buscador">
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                    </form>
                                    
                            
                            
                    <div class="row">
                        @foreach ($agendas as $agenda)
                            <div class="col-md-4 mb-3 mt-2">
                                <div class="card">
                                    <div class="card-header">
                                        <h3><strong>Diary: </strong>{{ $agenda->id }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <h6><strong>Name: </strong>{{ $agenda->name }}</h6>
                                        <h6><strong>Last Name: </strong>{{ $agenda->lastName }}</h6>
                                        @if($agenda->sexo > 0)
                                            <h6><strong>Sex: </strong>Female</h6>
                                        @else
                                            <h6><strong>Sex: </strong>Male</h6>
                                        @endif
                                        <h6><strong>Phone Number: </strong>{{ $agenda->telefono }}</h6>
                                        <h6><strong>E-mail: </strong>{{ $agenda->email }}</h6>
                                        @if ($agenda->estado_civil > 0)
                                            <h6><strong>Marital Status: </strong>Married</h6>
                                        @else
                                            <h6><strong>Marital Status </strong>Single</h6>
                                        @endif
                                        <h6><strong>Date of Birth: </strong>{{ $agenda->birthay }}</h6>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ route('agendas.edit', $agenda) }}" class="btn btn-warning btn-block">
                                            Edit
                                        </a>
                                        &nbsp;
                                        <form action="{{ route('agendas.destroy', $agenda) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button
                                                type="submit" 
                                                class="btn btn-danger btn-block"
                                            >
                                                Delete
                                            </button>
                                        </form>                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $agendas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection