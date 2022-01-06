@extends('layouts.app')

<!-- view is the user interface of the application -->

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
                    <p>
                    Read more <a href="{{ route('about') }}"> about us</a>
</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

