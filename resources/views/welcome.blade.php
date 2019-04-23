<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                font-size: x-large;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel Test Repo
                </div>

               <div>
                   Help debug the issues in this Laravel repo.
               </div>

               <p><strong>Issues that need to be addressed:</strong></p>

               <ul style="text-align: left">
                   <li>Fix this list so it justify to the left without losing the format of the rest of page</li>
                   <li>Go to route <a href="test">/test</a> and tell me specifically what is wrong and fix it.</li>
                   <li style="list-style-type: none"><small style="color: green">- Missing action test() method from the controller. To fix it just add a test() action method.</small></li>
                   <li>Create a resourceful Controller and Model for a object called Report</li>
                   <li>Add a route that points to your Report Controller and make sure it uses a Blade View</li>
                   <li style="list-style-type: none"><small style="color: green">- This is the new added endpoint for Report Controller. <a href="/reports">/reports</a></small></li>
                   <li>Can you explain to me why the route <a href="test2">/test2</a> is failing</li>
                   <li style="list-style-type: none"><small style="color: green">- It is failing because the router is using POST method request using GET will fix the issue.</small></li>
                   <li>Install the package `laravel/telescope` into your copy of the repo</li>
                   <li>Commit your updates to a forked repo for me to download.</li>
               </ul>

            </div>
        </div>
    </body>
</html>
