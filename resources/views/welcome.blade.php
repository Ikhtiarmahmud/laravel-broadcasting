<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/3e02166005.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .chat-head {
            padding: 30px 0;
            background-color: lightblue;
            text-align: center;
        }

        #exampleInputPassword1 {
            border: none;
            border-bottom: 1px solid darkgrey;
        }

        .pro-img {
            width: 30px;
            height: 30px;
        }

        .border-mid {
            border-left: 1px solid darkgray;
            left: 40px;
        }
    </style>
</head>

<body class="antialiased">
    <div class="container">
        <h2 class="text-uppercase chat-head">Own Talk</h2>
        <div class="row">
            <div class="col-md-6">
                <p><img class="rounded-circle pro-img" src="{{ asset('image/download.jpeg') }}" alt=""><span class="ml-1">This is text</span></p>
                <p class="text-right"><span class="mr-2">This is text</span><img class="rounded-circle pro-img" src="{{ asset('image/download.jpeg') }}" alt=""></p>
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Message">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-sm">Send</button>
                    </div>
                </div>
            </div>
            <div class="col-md-1 border-mid">
                <span></span>
            </div>
            <div class="col-md-5">
                <p><img class="rounded-circle pro-img" src="{{ asset('image/download.jpeg') }}" alt=""><span class="ml-1">This is text</span></p>
                <p class="text-right"><span class="mr-2">This is text</span><img class="rounded-circle pro-img" src="{{ asset('image/download.jpeg') }}" alt=""></p>
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Message">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-sm">Send</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
