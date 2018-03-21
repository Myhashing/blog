@extends('layout.master')

@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    From the Firehose
                </h3>
                @include('posts.post')

                <hr>

                <div class="comments">
                    <ul class="list-group">
                        @foreach($post->comments as $comment)
                            <li class="list-group-item">
                                <strong>
                                    {{ $comment->created_at->diffForHumans() }} by
                                    {{ $comment->user->name }}
                                </strong>
                                {{$comment->body}}
                            </li>
                        @endforeach
                    </ul>
                </div>


                <form method="POST" action="post/{{ $post->id }}/addcomment">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea class="form-control" id="body" name="body" rows="3" placeholder="Add your comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </form>

                @include('errors.form-error')
            </div>
    @include('layout.sidebar')
      </div><!-- /.row -->

    </main><!-- /.container -->
@endsection