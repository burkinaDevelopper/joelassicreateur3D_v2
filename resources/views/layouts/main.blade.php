<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="author" content="Joel Assi" />
    <meta name="date" content="2024-02-25" scheme="YYYY-MM-DD" />
    <meta name="keywords" content="{{ $keywords ?? '' }}" />
    <title>{{ $title ?? '' }}</title>
    @vite(['resources/js/app.js'])
</head>

<body class="light">
    <header class="header">
        <div class="header-container">
            <div>
                <ul class="left">
                    <li> <a href=""><i class="fa-solid fa-blog"></i>Blog</a></li>
                    <li><a href=""><i class="fa-regular fa-envelope"></i>Contact</a></li>
                </ul>
                <ul class="right">
                    <li class="mobile"><a href="{{ config('services.social.facebook') }}" target="_blank"
                            rel="noopener noreferrer"><span><i class="fa-brands fa-facebook"></i></span>facebook</a>
                    </li>
                    <li class="mobile"><a href="{{ config('services.social.instagram') }}" target="_blank"
                            rel="noopener noreferrer"><span><i class="fa-brands fa-instagram"></i></span>instagram</a>
                    </li>
                    <li class="mobile"><a href="{{ config('services.social.youtube') }}" target="_blank"
                            rel="noopener noreferrer"><span><i class="fa-brands fa-youtube"></i></span>youtube</a></li>
                    <li class="mobile"><a href="mailto:{{ config('services.social.email') }}" target="_blank"
                            rel="noopener noreferrer"><span><i class="fa-regular fa-envelope"></i></span>e-mail</a></li>
                    <li class="dark"><span><i class="fa-solid fa-circle-half-stroke"></i></span></li>
                </ul>

            </div>
        </div>
        <div class="header-link">
            <span><img src="{{ asset('assets/image/logo-joel.png') }}" alt="logo-joel"></span>
            <nav>
                <ul class="mobile">
                    <li class="{{ Request::is('/') ? 'active_link' : '' }}"><a
                            href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="{{ Request::is('galerie-joel') ? 'active_link' : '' }}"><a
                            href="{{ route('galerie-joel') }}">Galerie
                            Joel</a></li>
                    <li class="{{ Request::is('galerie-etudiant') ? 'active_link' : '' }}"><a
                            href="{{ route('galerie-etudiant') }}">Galerie
                            Étudiant</a></li>
                    <li class="{{ Request::is('movie') ? 'active_link' : '' }}"><a
                            href="{{ route('movie') }}">Vidéo</a>
                    </li>
                    <li class="dropdown">
                        Cours <i class="fa-solid fa-angle-down"></i>
                        <ul class="hidden">
                            <li class="{{ Request::is('course/Cours-du-logiciel-1') ? 'active_link' : '' }}">
                                <a href="{{ route('Cours-du-logiciel-1.index') }}">Cours du logiciel 1</a>
                            </li>
                            <li class="{{ Request::is('course/Cours-du-logiciel-2') ? 'active_link' : '' }}">
                                <a href="{{ route('Cours-du-logiciel-2.index') }}">Cours du logiciel 2</a>
                            </li>
                            <li class="{{ Request::is('course/Cours-du-logiciel-3') ? 'active_link' : '' }} ">
                                <a href="{{ route('Cours-du-logiciel-3.index') }}">Cours du logiciel 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('contact') ? 'active_link' : '' }}"><a
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                    {{-- <li class="{{ Request::is('inscription') ? 'active_link' : '' }}"><a href="">Inscription</a>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </header>
    {{-- ------------------------body---------------------------- --}}
    @yield('content')
    {{-- ------------------------body---------------------------- --}}
    @isset($footer)
        <footer class="footer">
            <hr>


            <div class="newspapers">

                <div class="form-container">
                    <form action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <label for="">NEWSPAPER</label>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                        <button type="submit">souscrire</button>

                    </form>
                    @if (session('success'))
                        <div class="alert-souscript">{{ session('success') }}</div>
                    @endif

                </div>
            </div>
            <div>
                <p>Copyright © 2024 tout droit reserver</p>
                <ul class="right">
                    <li><a href="https://web.facebook.com/joelassicreateur3d" target="_blank"
                            rel="noopener noreferrer"><span><i class="fa-brands fa-facebook"></i></span></a>
                    </li>
                    <li><a href="https://www.instagram.com/joel_assi_createur_3d" target="_blank"
                            rel="noopener noreferrer"><span><i class="fa-brands fa-instagram"></i></span></a>
                    </li>
                    <li><a href="https://www.youtube.com/c/JoelAssiCréateur3D" target="_blank"
                            rel="noopener noreferrer"><span><i class="fa-brands fa-youtube"></i></span></a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer"><span><i
                                    class="fa-regular fa-envelope"></i></span></a></li>

                </ul>

            </div>
        </footer>
    @endisset

</body>

</html>
