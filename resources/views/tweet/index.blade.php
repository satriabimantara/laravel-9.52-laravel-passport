@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                Timeline
            </div>
            <div class="card-body">
                <form action="{{ route('tweets.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="body" class="form-label">Post your Tweet</label>
                        <textarea class="form-control" id="body" name="body" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Post</button>
                </form>
                <hr>
                <div class="media">
                    @foreach ($tweets as $tweet)
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <img src="https://placehold.it/64x64" alt="Generic Placeholder">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            {{ $tweet->body }}
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
