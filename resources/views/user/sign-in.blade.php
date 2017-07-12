@extends('layouts.master')

@section('title')
    Sign In
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Sign In</h3>
            <form action="{{ route('sign-in') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection