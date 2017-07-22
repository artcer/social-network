@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    @include('includes.success-message')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>What do you have to say?</h3>
            </header>
            <form action="{{ route('create.post') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                    <textarea id="body"
                              class="form-control"
                              name="body"
                              rows="5"
                              placeholder="Your Post"
                    >{{ old('body') }}</textarea>
                    <span class="help-block">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                </div>
                <button type="submit" class="btn btn-primary">
                    Create Post
                </button>
            </form>
        </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>What other people say...</h3>
                @foreach ($posts as $post)
                    <article class="post">
                        <p>{{ $post->body }}</p>
                        <div class="info">
                            Posted by {{ $post->user->name }} on {{ $post->created_at->diffForHumans() }}
                        </div>
                        <div class="interaction">
                            <a href="#">Like</a> |
                            <a href="#">Dislike</a> |
                            <a href="#">Edit</a> |
                            <a href="#">Delete</a>
                        </div>
                    </article>
                @endforeach
            </header>
        </div>
    </section>
@endsection