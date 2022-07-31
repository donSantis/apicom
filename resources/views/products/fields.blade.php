<!-- Id User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user', 'Id User:') !!}
    {!! Form::number('id_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_category', 'Id Category:') !!}
    {!! Form::number('id_category', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_size', 'Id Size:') !!}
    {!! Form::number('id_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_color', 'Id Color:') !!}
    {!! Form::number('id_color', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_gender', 'Id Gender:') !!}
    {!! Form::number('id_gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_brand', 'Id Brand:') !!}
    {!! Form::number('id_brand', null, ['class' => 'form-control']) !!}
</div>

<!-- Sku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sku', 'Sku:') !!}
    {!! Form::text('sku', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('state', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('state', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('state', 'State', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>