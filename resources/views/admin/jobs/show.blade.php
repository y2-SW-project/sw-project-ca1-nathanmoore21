@extends('layouts.app')

<!-- view is the user interface of the application -->

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Job: {{$job->title }}
                </div>
<div class="card-body">
    
    <table id="table-jobs" class="table table-hover">
        <tbody>
            <tr>
                <td>Name</td>
                <td>{{ $job->name }}</td>
            </tr>
            <tr>
                <td>Location</td>
                <td>{{ $job->location }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{ $job->description }}</td>
            </tr>
            <tr>
                <td>Positions Available</td>
                <td>{{ $job->positions_available }}</td>
            </tr>
            <tr>
                <td>Requirements</td>
                <td>{{ $job->requirements }}</td>
            </tr>
            <tr>
                <td>Wage</td>
                <td>{{ $job->wage }}</td>
            </tr>
            <tr>
                <td>Contact Phone</td>
                <td>{{ $job->contact_phone }}</td>
            </tr>
</tbody>
</table>
<a href="{{ route('admin.jobs.index') }}" class="btn btn-default">Back</a>
</div>
</div>
</div>
</div>
</div>
@endsection

                
