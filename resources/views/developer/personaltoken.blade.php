@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <h3>Create Personal Access Token</h3>
        <form action="{{ route('developer.personaltoken.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name_personal_token" class="form-label">Name</label>
                <input type="text" class="form-control" id="name_personal_token" name="name_personal_token" >
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
