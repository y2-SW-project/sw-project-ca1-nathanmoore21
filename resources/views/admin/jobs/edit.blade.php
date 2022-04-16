<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<title>Laravel Jobs</title>
</head>

<!-- style sheet -->
<link rel="stylesheet" href="css/main.css">


<body>
    <div class="topnav">
        <div class="title">LARAVEL JOBS</div>
        
    <nav class="menu">
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
           <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
 Logout
</a></li>
          </ul>
        </nav>
        </div>


@section('content')
  <div class="container">
  <div class="show">
  Edit {{ $job->name }}
    </div>
            

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

              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $job->name) }}" />
              </div>
              <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $job->location) }}" />
              </div>

              <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $job->description) }}" />
              </div>
              
              <div class="form-group">
                <label for="positions_available">Positions Available:</label>
                <input type="text" class="form-control" id="positions_available" name="positions_available" value="{{ old('positions_available', $job->positions_available) }}" />
              </div>
              <div class="form-group">
                <label for="requirements">Requirements:</label>
                <input type="text" class="form-control" id="requirements" name="requirements" value="{{ old('requirements', $job->requirements) }}" />
              </div>
              <div class="form-group">
                <label for="wage">Wage:</label>
                <input type="wage" class="form-control" id="wage" name="wage" value="{{ old('wage', $job->wage) }}" />
              </div>
              <div class="form-group">
                <label for="contact_phone">Contact Phone:</label>
                <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ old('contact_phone', $job->contact_phone) }}" />
              </div>

  <br>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
              <a href="{{ route('admin.jobs.index') }}" class="btn btn-outline">Cancel</a>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    
    <div class="bottom">
      <div class="bottom-grid-container">
        <article>
          <h6>JOIN OUR SITE TODAY</h6>
          <p>Sign up for our newsletter get job updates daily!</p>
          <button type="button"><a href="{{ route('home') }}">Sign up here!</a></button>
        </article>
        <article>
          <ul>
            <li>
              <h3>Laravel Jobs</h3>
            </li>
            <li>About us</li>
            <li>Press</li>
            <li>Environment</li>
            <li>Career</li>
            <li>Log in</li>
          </ul>
        </article>
        <article>
          <ul>
            <li>
              <h3>Help</h3>
            </li>
            <li>Cusomer service</li>
            <li>Terms and Conditions</li>
            <li>Privacy Policy</li>
            <li>Cookies</li>
          </ul>
        </article>
      </div>
    </div>
  </div>
  </div>
</div>
</body>
</html>