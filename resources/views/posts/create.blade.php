@extends('layout.master')

@section('content')
    <div class="col-md-8 blog-main">

    </div>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <form method="POST" action="store">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" >
                    </div>
                    <div class="form-group">
                        <label for="body">Example textarea</label>
                        <textarea class="form-control" id="body" name="body" rows="3" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">publish</button>
                </form>

                @include('errors.form-error')

            </div><!-- /.blog-main -->

            @include('layout.sidebar')
        </div><!-- /.row -->
@endsection
