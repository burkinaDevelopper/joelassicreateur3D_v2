@extends('layouts.main')
@section('content')
    <main class="galerie-edutiant">
        <div class="gallery" id="gallery">
            @forelse ($images as $img)
                <div class="gallery-item">
                    <div class="content"><img src="{{ $img->url }}" alt="{{ $img->name }}"></div>
                </div>
            @empty
                <div class="gallery-item">
                    <div class="content">pas d'image</div>
                </div>
            @endforelse
        </div>
    </main>
@endsection
