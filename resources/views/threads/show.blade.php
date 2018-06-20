@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$thread->title}}</div>
                    <div class="card-body">
                        {{$thread->body}}
                    </div>
                    @foreach($thread->replies as $reply)
                        <div class="card-footer">
                            <strong><a href="#">{{$reply->owner->name}}</a></strong>
                            said <i>{{$reply->created_at->diffForHumans()}}</i><br><br>
                            {{$reply->body}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
