@extends('layout')

@section('content')

<h1>welcome page</h1>
<hr>

    <h2>Validating form arrays</h2>

<form method="post">

    @csrf

    <div class="form-group">

        <label class="control-label" for="email">Email:</label>
        <input type="email" name="email[]" id="email1" class="form-control" value="{{old('email.0')}}">
        @if($errors->has('email.0'))
            <span class="help-block"> {{$errors->first('email.0')}} </span>
        @endif
    </div>

    <div class="form-group">

        <label class="control-label" for="email">Email:</label>
        <input type="email" name="email[]" id="email2" class="form-control" value="{{old('email.1')}}">
        @if($errors->has('email.1'))
        <span class="help-block"> {{$errors->first('email.1')}} </span>
        @endif
    </div>


    <div class="form-group">

        <label class="control-label" for="email">Email:</label>
        <input type="email" name="email[]" id="email3" class="form-control" value="{{old('email.2')}}">
        @if($errors->has('email.2'))
            <span class="help-block"> {{$errors->first('email.2')}} </span>
        @endif
    </div>


    <div class="form-group">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>



</form>




@stop