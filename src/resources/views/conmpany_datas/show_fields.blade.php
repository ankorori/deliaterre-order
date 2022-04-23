<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $conmpanyData->name }}</p>
</div>

<!-- Postlcode Field -->
<div class="form-group">
    {!! Form::label('postlcode', 'Postlcode:') !!}
    <p>{{ $conmpanyData->postlcode }}</p>
</div>

<!-- Streetaddress Field -->
<div class="form-group">
    {!! Form::label('streetaddress', 'Streetaddress:') !!}
    <p>{{ $conmpanyData->streetaddress }}</p>
</div>

<!-- Phonenumber Field -->
<div class="form-group">
    {!! Form::label('phonenumber', 'Phonenumber:') !!}
    <p>{{ $conmpanyData->phonenumber }}</p>
</div>

<!-- Faxnumber Field -->
<div class="form-group">
    {!! Form::label('faxnumber', 'Faxnumber:') !!}
    <p>{{ $conmpanyData->faxnumber }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $conmpanyData->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $conmpanyData->updated_at }}</p>
</div>

