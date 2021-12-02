<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $admin->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $admin->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Password') }}
            {{ Form::text('Password', $admin->Password, ['class' => 'form-control' . ($errors->has('Password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
            {!! $errors->first('Password', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_naci') }}
            {{ Form::text('Fecha_naci', $admin->Fecha_naci, ['class' => 'form-control' . ($errors->has('Fecha_naci') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Naci']) }}
            {!! $errors->first('Fecha_naci', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>