<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $mascota->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $mascota->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Naci') }}
            {{ Form::text('Fecha_Naci', $mascota->Fecha_Naci, ['class' => 'form-control' . ($errors->has('Fecha_Naci') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Naci']) }}
            {!! $errors->first('Fecha_Naci', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula_cliente') }}
            {{ Form::text('Cedula_cliente', $mascota->Cedula_cliente, ['class' => 'form-control' . ($errors->has('Cedula_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cedula Cliente']) }}
            {!! $errors->first('Cedula_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>