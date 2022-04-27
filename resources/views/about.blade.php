<!-- About page, can be accessed by anyone -->
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
    <title>Laravel Jobs</title>
</head>

<!-- style sheet -->
<link rel="stylesheet" href="css/main.css">

<body>
    <div class="topnav">
        <div class="title">LARAVEL JOBS</div>
        <nav class="menu">
            <ul>
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>
    </div>

    @section('content')
    <div class="body">
        <h2>About Laravel Jobs</h2>
        <div class="openpara">Laravel Jobs strives to put you first with free access to search for jobs in your area.
            Each and every day, we connect hundereds of people with new opportunities.
            Create your profile now to get noticed and we’ll help you find the job you’ve always wanted. With Laravel
            Jobs, we open the door to countless job opportunities with an extensive list of registered employers.</div>
    </div>

    <br>
    <img src="{{url('/images/jobhunt.png')}}" alt="Job Hunt" />

    <h2>Latest Updates!</h2>
    <div class="update_h">
        <a href="#">We’ve recently joined the JobFinder Group – an international company, trusted by more than 50,000
            customers around the globe.
        </a></div>
    <hr class="update">
    <div class="update_h">
        <a href="#">Employers are preparing to battle for talent in 2022 with the latest Jobs Index revealing a 420%
            jump in jobs in HR and Talent.
        </a></div>
    <hr class="update">
    <div class="update_h">
        <a href="#">Job hunting tips for new graduates in an ever-changing job market.
        </a></div>

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
