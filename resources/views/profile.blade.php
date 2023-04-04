@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}'s Profile</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Name: {{ $user->name }}</h3>
                                <p>E-Mail Address: {{ $user->email }}</p>
                                <p>Password: {{ $user->password }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection