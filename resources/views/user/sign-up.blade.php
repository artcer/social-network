@extends('layouts.master')

@section('title')
    Sign Up
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Sign Up</h3>
            <form action="{{ route('sign.up') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="control-label" for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
                    <span class="help-block">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="control-label" for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email" value="{{ old('email') }}">
                    <span class="help-block">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label class="control-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                    <span class="help-block">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection