<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
                <li> <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>
            </ul>
        </nav>
    </div>


    @section('content')
    <div class="show">
        {{ $job->name }}
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">

                        <table id="table-jobs" class="show">
                            <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{ $job->name }}</td>
                                </tr>
                                <tr>
                                    <td>Location:</td>
                                    <td>{{ $job->location }}</td>
                                </tr>
                                <tr>
                                    <td>Description:</td>
                                    <td>{{ $job->description }}</td>
                                </tr>
                                <tr>
                                    <td>Positions Available:</td>
                                    <td>{{ $job->positions_available }}</td>
                                </tr>
                                <tr>
                                    <td>Requirements:</td>
                                    <td>{{ $job->requirements }}</td>
                                </tr>
                                <tr>
                                    <td>Wage:</td>
                                    <td>{{ $job->wage }}</td>
                                </tr>
                                <tr>
                                    <td>Contact Phone:</td>
                                    <td>{{ $job->contact_phone }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        To apply, please contact the company directly.
                        <br>
                        <br>
                        <a href="{{ route('admin.jobs.index') }}" class="show_table">View more job offers</a>
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
