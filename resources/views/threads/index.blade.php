@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Threads</div>

                    <div class="card-body">
                        @foreach($threads as $thread)
                            <h3><a href="{{$thread->url()}}">{{$thread->title}}</a></h3>
                            <p>{{$thread->body}}</p>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
