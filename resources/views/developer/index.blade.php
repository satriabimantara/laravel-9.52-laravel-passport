@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('developer.personaltoken') }}" class="btn btn-primary">Create Personal Access Token</a>
            <a href="#" class="btn btn-primary">Create OAuth Clients</a>
          </div>
    </div>
</div>
<div class="row mt-5 justify-content-center">
    <div class="col-lg-10">
        <h3>Personal Access Token</h3>
    </div>
</div>
<div class="row mt-5 justify-content-center">
    <div class="col-lg-10">
        <h3>OAuth Clients</h3>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Secret</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
