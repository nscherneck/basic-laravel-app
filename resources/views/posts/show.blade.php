@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>{{ $post->title }}</h3>
                </div>
                <div class="panel-body">
                    <p>{!! nl2br($post->content) !!}</p>
                </div>
            </div> <!-- /panel -->
        </div> <!-- /column -->
    </div> <!-- /row -->
    @foreach ($post->comments as $comment)
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! nl2br($comment->content) !!}
                    </div>
                </div> <!-- /panel -->
            </div> <!-- /column -->
        </div> <!-- /row -->
    @endforeach
</div>
@endsection
