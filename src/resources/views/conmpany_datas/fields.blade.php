<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 30]) !!}
</div>

<!-- Postlcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postlcode', 'Postlcode:') !!}
    {!! Form::text('postlcode', null, ['class' => 'form-control','maxlength' => 8]) !!}
</div>

<!-- Streetaddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('streetaddress', 'Streetaddress:') !!}
    {!! Form::text('streetaddress', null, ['class' => 'form-control','maxlength' => 50]) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phonenumber', 'Phonenumber:') !!}
    {!! Form::text('phonenumber', null, ['class' => 'form-control','maxlength' => 13]) !!}
</div>

<!-- Faxnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faxnumber', 'Faxnumber:') !!}
    {!! Form::text('faxnumber', null, ['class' => 'form-control','maxlength' => 13]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('conmpanyDatas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
