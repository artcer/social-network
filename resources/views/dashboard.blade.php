@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>What do you have to say?</h3>
            </header>
            <form action="">
                <div class="form-group">
                    <textarea id="new-post"
                              class="form-control"
                              name="new-post"
                              rows="5"
                              placeholder="Your Post"
                    ></textarea>
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
                <h3>What ever people say...</h3>
                <article class="post">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid autem cum dignissimos doloribus eum illum libero sit vero.
                        Ab aperiam beatae consequatur deserunt illo itaque laboriosam nam sit sunt, velit.
                    </p>
                    <div class="info">
                        Posted by Artūras on 16 Jul 2017
                    </div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">Dislike</a> |
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </div>
                </article>
                <article class="post">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid autem cum dignissimos doloribus eum illum libero sit vero.
                        Ab aperiam beatae consequatur deserunt illo itaque laboriosam nam sit sunt, velit.
                    </p>
                    <div class="info">
                        Posted by Artūras on 16 Jul 2017
                    </div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">Dislike</a> |
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </div>
                </article>
            </header>
        </div>
    </section>
@endsection