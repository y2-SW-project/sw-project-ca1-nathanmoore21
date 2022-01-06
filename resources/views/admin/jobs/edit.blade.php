@extends('layouts.app')

<!-- view is the user interface of the application -->

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit Job
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.jobs.update', $job->id)}}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <input type="hidden" name="_method" value="PUT">


              <td>{{ $job->name }}</td>
            <td>{{ $job->location }}</td>
            <td>{{ $job->descrition }}</td>
            <td>{{ $job->positions_available }}</td>
            <td>{{ $job->requirements }}</td>
            <td>{{ $job->wage }}</td>
            <td>{{ $job->contact_phone }}</td>


              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $job->name) }}" />
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $job->location) }}" />
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $job->description) }}" />
              </div>
              
              <div class="form-group">
                <label for="positions_available">Positions Available</label>
                <input type="text" class="form-control" id="positions_available" name="positions_available" value="{{ old('positions_available', $job->positions_available) }}" />
              </div>
              <div class="form-group">
                <label for="requirements">Requirements</label>
                <input type="text" class="form-control" id="requirements" name="requirements" value="{{ old('requirements', $job->requirements) }}" />
              </div>
              <div class="form-group">
                <label for="wage">Wage</label>
                <input type="wage" class="form-control" id="wage" name="wage" value="{{ old('wage', $job->wage) }}" />
              </div>
              <div class="form-group">
                <label for="contact_phone">Contact Phone</label>
                <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ old('contact_phone', $job->contact_phone) }}" />
              </div>

              <a href="{{ route('admin.jobs.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection