@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ $post->path() }}">
                            {{ $post->title }}
                        </a>
                        <div class="basic-right">
                            <strong>Comments: </strong>{{ $post->comments->count() }}
                        </div>
                    </div> <!-- /panel-heading -->
                    <div class="panel-body">
                        {!! nl2br($post->excerpt) !!}
                    </div> <!-- /panel-body -->
                </div> <!-- /panel -->
            </div> <!-- /column -->
        </div> <!-- /row -->
    @endforeach
</div>
@endsection
