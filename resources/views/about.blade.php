@extends('layouts.app')

<!-- view is the user interface of the application -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About Larafest Jobs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Thanks for joining Larafest Jobs.<br>
                   We are a nationwide company supplying you and thousands more with jobs each day!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
