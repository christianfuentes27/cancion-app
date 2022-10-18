<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>laravel - dwes - bikes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="{{ url('') }}">bikes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{$activeHome ?? ''}}">
                        <a class="nav-link" href="{{ url('') }}">Home</a>
                    </li>
                    <li class="nav-item {{$activeBike ?? ''}}">
                        <a class="nav-link" href="{{ url('bike') }}">Bikes</a>
                    </li>
                    <li class="nav-item {{$activePersona ?? ''}}">
                        <a class="nav-link" href="{{ url('persona') }}">Personas</a>
                    </li>
                    <li class="nav-item {{$activeCancion ?? ''}}">
                        <a class="nav-link" href="{{ url('cancion') }}">Canciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dummy/get') }}">Dummy Routes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('ruta1') }}">Route 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('ruta2') }}">Route 2</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('modalContent')
        <main role="main">
            <div class="jumbotron">
                <div class="container">
                    <h4 class="display-4">{{ $title ?? 'First App' }}</h4>
                </div>
            </div>
            <div class="container">
                @if(session()->has('message'))
                    <div class="alert alert-primary" role="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="row">
                    <h3>{{ $subTitle ?? 'Bikes' }}</h3>
                </div>
                @yield('content')
                <hr>
            </div>
        </main>
        <footer class="container">
            <p>&copy; IZV 2022</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
</html>