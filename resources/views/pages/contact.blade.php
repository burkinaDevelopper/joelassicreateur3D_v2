@extends('layouts.main')
@section('content')
    <main class="contact">
        <div class="title">
            <h1>Je suis là pour vous !</h1>
            <p>Je suis toujours là pour vous écoutez pour vous accompagner et répondre à tous vos besoins.</p>
        </div>
        <div class="form">

            @if (session('status'))
                <div class="alert-admin">{{ session('status') }}</div>
            @endif

            <form action="{{ route('adminNotification') }}" method="post">
                @csrf
                <div class="name">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" placeholder="Nom">
                </div>
                <div class="email">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="message">
                    <label for="">Message</label>
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                </div>
                <div class="submit">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
            <div class="location">
                <div class="social">
                    <h3>SOCIALS</h3>
                    <ul>
                        <li><a href="{{ config('services.social.facebook') }}" target="_blank"
                                rel="noopener noreferrer"><span><i class="fa-brands fa-facebook"></i></span></a>
                        </li>
                        <li><a href="{{ config('services.social.instagram') }}" target="_blank"
                                rel="noopener noreferrer"><span><i class="fa-brands fa-instagram"></i></span></a>
                        </li>
                        <li><a href="{{ config('services.social.youtube') }}" target="_blank"
                                rel="noopener noreferrer"><span><i class="fa-brands fa-youtube"></i></span></a></li>
                        <li><a href="{{ config('services.social.tiktok') }}" target="_blank"
                                rel="noopener noreferrer"><span><i class="fa-brands fa-tiktok"></i></span></a></li>

                    </ul>
                </div>
                <div class="phone">
                    <h3>PHONE</h3>
                    <p><i class="fa-solid fa-phone-volume"></i><span>{{ config('services.social.number') }}</span></p>
                </div>
                <div class="email">
                    <h3>E-mail</h3>
                    <p><i class="fa-regular fa-envelope"></i></i><span>{{ config('services.social.email') }}</span></p>
                </div>
            </div>
        </div>

    </main>
@endsection
