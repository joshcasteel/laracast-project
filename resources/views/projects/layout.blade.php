<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Laracasts Project</title>
</head>
<body>
        <nav>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="center hide-on-med-and-down">
                <li><a href="/projects">Home</a></li>
                <li><a href="/projects/create">Create</a></li>
                </ul>
            </div>
        </nav>
    @yield('content')
</body>
</html>