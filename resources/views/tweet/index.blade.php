@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <ul class="list-group">
            @foreach ($tweets as $tweet)
            <li class="list-group-item">{{ $tweet->body }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
