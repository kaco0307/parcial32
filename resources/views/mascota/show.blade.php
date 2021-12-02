@extends('layouts.app')

@section('template_title')
    {{ $mascota->name ?? 'Show Mascota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mascota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Mascotas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mascota->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $mascota->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Naci:</strong>
                            {{ $mascota->Fecha_Naci }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula Cliente:</strong>
                            {{ $mascota->Cedula_cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
