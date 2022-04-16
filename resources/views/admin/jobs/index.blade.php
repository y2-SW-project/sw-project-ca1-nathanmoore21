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
    <div class="body">
        <h2>Welcome back to Laravel Jobs, Admin.</h2>
                        <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary float-right">Add a new position here.</a>
                    </div>

                    <hr>
                    @if (count($jobs)=== 0)
                    <p>There are no jobs!</p>
                    @else
                    <table>
                        <thead>
                            <th>Name:</th>
                            <th>Location:</th>
                            <th>Description:</th>
                            <th>Positions Available:</th>
                            <th>Requirements:</th>
                            <th>Wage:</th>
                            <th>Contact Number:</th>
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
                                <button class="table"><a class="table" href="{{ route('admin.jobs.show', $job->id) }}">View</a></button>
                                <br>
                                <button class="table"> <a class="table" href="{{ route('admin.jobs.edit', $job->id) }}">Edit</a></button>

                                    <form class="table" method="POST"
                                        action="{{ route('admin.jobs.destroy', $job->id) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="table" type="submit"><a class="table" href="#">Delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif

                    <hr>


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
