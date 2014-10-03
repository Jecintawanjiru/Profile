@extends('layouts.master')

@section('content')
{{ Form::open(array('route' => 'users.store')) }}
  <div class="form-group">
    {{ Form::label('firstname') }}
    {{ Form::text('firstname','firstname:' , array('class' => 'form-control')) }}
  </div>
  <div class="form-group">
    {{ Form::label('lastname) }}
    {{ Form::text('lastname','lastname:' , array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('Date of Birth') }}
    {{ Form::selectRange('dob[day]', 1, 31) }}
    {{ Form::selectMonth('dob[month]') }}
    {{ Form::selectRange('dob[year]', 1996, 1900) }}
  </div>
  <div class="form-group">
    {{ Form::label('Gender')}}
    <div class="radio">
      <label>{{ Form::radio('gender', 'Male') }} Male</label>
    </div>
    <div class="radio">
      <label>{{ Form::radio('gender', 'Female', true) }} Female</label>
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('Phone Number') }}
    {{ Form::text('phone', null, array('class' => 'form-control')) }}
  </div>
  <div class="form-group">
    {{ Form::label('Cv') }}
    {{ Form::file('Cv', null, array('class' => 'form-control')) }}
  </div>
  <div class="form-group">
    {{ Form::label('phone') }}
    {{ Form::select('phone', $phone-number, null, array('class' => 'form-control')) }}
  </div>
  <div class="form-group">
    {{ Form::submit('Create Profile', array('class' => 'btn btn-primary')) }}
  </div>
{{ Form::close() }}
@stop