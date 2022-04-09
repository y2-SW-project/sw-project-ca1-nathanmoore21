@extends('layouts.app')

<!-- view is the user interface of the application -->

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Jobs
                    <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary float-right">Add</a>
                </div>
<div class="card-body">
    @if (count($jobs)=== 0)
    <p>There are no jobs!</p>
    @else
    <table id="table-jobs" class="table table-hover">
        <thead>
            <th>Name</th>
            <th>Location</th>
            <th>Description</th>
            <th>Positions Available</th>
            <th>Requirements</th>
            <th>Wage</th>
            <th>Contact Number</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
            <tr data-id="{{ $job->id }}">
            <td>{{ $job->name }}</td>
            <td>{{ $job->location }}</td>
            <td>{{ $job->description }}</td>
            <td>{{ $job->positions_available }}</td>
            <td>{{ $job->requirements }}</td>
            <td>{{ $job->wage }}</td>
            <td>{{ $job->contact_phone }}</td>

            <td>
                <a href="{{ route('admin.jobs.show', $job->id) }}" 
                    class="btn btn-default">View</a>
                <a href="{{ route('admin.jobs.edit', $job->id) }}" 
                    class="btn btn-warning">Edit</a>
                <form style="display:inline-block" method="POST"
                action="{{ route('admin.jobs.destroy', $job->id) }}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
</div>
</div>
</div>
@endsection
                
