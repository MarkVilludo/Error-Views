<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Error 500 - Internal Server Error</title>
    <meta name="viewport" content="width=device-width">
    @include('errors.styles')
</head>
<body>
    <div class="wrapper">
        @php
            $messages = ['Ouch.', 'Oh no!'];
            shuffle($messages);
        @endphp

        <h1>{{ $messages[0] }}</h1>
        <h2>Server Error: 500 (Internal Server Error)</h2>
        <hr>
        <h3>What does this mean?</h3>
        <p>
            Something went wrong on our servers while we were processing your request.
            We're really sorry about this, and will work hard to get this resolved as
            soon as possible.
        </p>
        <p>
            Perhaps you would like to go to our <a href="/">home page</a>?
        </p>
    </div>
</body>
</html>