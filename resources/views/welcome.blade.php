@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to larafest Jobs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to Larafest Jobs.

                    Read more <a href="{{ route('about') }}"> about us</a>

                    <h5> errors </h5>
                    <p>Registering new users - when I register a new user it dosn't update in the 'user_role' in the database - I have been manually changing it for it to work</p>
                    <p>Final lesson, can't view the job or festival information</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

