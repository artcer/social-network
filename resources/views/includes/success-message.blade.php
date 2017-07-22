@if (Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 success">
            {{ Session::get('message') }}
        </div>
    </div>
@endif