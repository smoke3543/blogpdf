<div class="form-group">
        {{Form::label('name','Nombre')}}
        {{Form::text('name',null,['class'=>'form-control'])}}
        {{Form::label('apellido','Apellido')}}
        {{Form::text('Apellido',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
        {{Form::label('avatar','Avatar')}}
        {{Form::file('avatar') }}
</div>
