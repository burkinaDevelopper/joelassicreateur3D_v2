@extends('layouts.main')
@section('content')
    <main class="movie">
        <ul>
            @forelse ($movies as $movie)
                <li><video src="{{ $movie->url }}" controls loop></video></li>
            @empty
                <li>pas de video </li>
            @endforelse
            {{-- <li><video src="{{ asset('assets/video/Accueil.mp4') }}" loop controls></video></li>
            <li><video src="{{ asset('assets/video/Accueil_2.mp4') }}" loop controls> </video></li>
            <li><video src="{{ asset('assets/video/Accueil_3.mp4') }}" loop controls></video></li>
            <li><video src="{{ asset('assets/video/Accueil_4.mp4') }}" autoplay muted loop></video></li>
            <li><video src="{{ asset('assets/video/Accueil_5.mp4') }}" autoplay muted loop></video></li> --}}
        </ul>
    </main>
@endsection
