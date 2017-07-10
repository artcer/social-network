@extends('layouts.master')

@section('title')
    Sign Up
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Sign Up</h3>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" id="password" class="form-control" name="password">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection