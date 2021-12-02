@extends('layouts.app')

@section('template_title')
    {{ $admin->name ?? 'Show Admin' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Admin</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Admins.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $admin->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $admin->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Password:</strong>
                            {{ $admin->Password }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Naci:</strong>
                            {{ $admin->Fecha_naci }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
