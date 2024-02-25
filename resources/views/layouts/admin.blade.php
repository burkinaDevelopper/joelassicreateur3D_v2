<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
    <title>Document</title>
</head>

<body>
    <nav class="nav-bar-admin">
        <ul>
            <li><a href="{{ route('accueil') }}">Site</a></li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">deconnexion</button>
                </form>
            </li>
        </ul>
    </nav>
    <div class="page-container">
        <nav class="side-bar">
            <ul>
                <li><a href="{{ route('accueil-admin') }}">Accueil</a></li>
                <li><a href="{{ route('joel-admin') }}">Galerie Joel</a></li>
                <li><a href="{{ route('etudiant-admin') }}">Galerie Étudiant</a></li>
                <li><a href="{{ route('movies-admin') }}">Vidéo</a></li>
                <li><a href="{{ route('chapter1-admin') }}">Cours logiciel 1</a></li>
                <li><a href="{{ route('chapter2-admin') }}">Cours logiciel 2</a></li>
                <li><a href="{{ route('chapter3-admin') }}">Cours logiciel 3</a></li>
                <li><a href="{{ route('newspaper-admin') }}">Newspapers</a></li>
            </ul>
        </nav>
        @yield('content')
    </div>

</body>

</html>
