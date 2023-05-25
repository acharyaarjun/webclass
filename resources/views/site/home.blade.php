<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- yo url ko tarika ho hai --}}
    <a href="{{ url('/about') }}">
        click here to go certain page
    </a>

    <br>
    <br>
    <br>

    {{-- yo route ko tarika --}}
    <a href="{{ route('getAboutKoRoute') }}">
        click here to go certain page
    </a>

    <br>
    <br>
    <br>

    

    <a href="{{ route('contact') }}">click here to go to contact page.</a>
</body>

</html>
