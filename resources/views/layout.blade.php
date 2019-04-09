<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html,
            body {
                height: 100%;
            }

            body {
                background-color: black;
                color: purple;
                margin: 0;
                padding: 0;
                height: 100vh;
                width: 100%;
                /* display: block; */
                font-weight: 100;
                font-family: 'Lato';
            }

            .header,
            .footer {
                height: 10vh;
                width: 100%;
                background-color: purple;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            header ul {
              display: flex;
              justify-content: space-between;
              align-items: center;
              list-style: none;
              width: 100%;
              font-weight: 700;
            }

            a {
              text-decoration: none;
              color: white;
            }

            .container {
                height: fit-content;
                min-height: 80vh;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .tools {
                font-size: 48px;
            }

            .tools ul {
                list-style: none;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: center;
                margin: 0;
                padding: 0;
            }

            li p {
                font-style: italic;
                font-weight: bold;
                color: black;
            }

        </style>
    </head>
    <body>
        <div class="header">
            @yield('header')
        </div>
        <div class="version">
            @yield('version')
        </div>
        <div class="container">
          @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
