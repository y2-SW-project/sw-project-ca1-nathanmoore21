@extends('layouts.app')

<!-- view is the user interface of the application -->

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new Job
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
            <form method="POST" action="{{ route('admin.jobs.store')  }}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <div class="form-group">

                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" />
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
              </div>
              <div class="form-group">
                <label for="positions_available">Positions Available</label>
                <input type="text" class="form-control" id="positions_available" name="positions_available" value="{{ old('positions_available') }}" />
              </div>
              <div class="form-group">
                <label for="requirements">Requirements</label>
                <input type="text" class="form-control" id="requirements" name="requirements" value="{{ old('requirements') }}" />
              </div>
              <div class="form-group">
                <label for="wage">Wage</label>
                <input type="wage" class="form-control" id="wage" name="wage" value="{{ old('wage') }}" />
              </div>
              <div class="form-group">
                <label for="contact_phone">Contact Phone</label>
                <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ old('contact_phone') }}" />
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