@extends('layouts.main')
@section('content')
    <main class="galerie-joel">

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

            {{-- <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,substance" alt=""></div>
            </div> --}}
            {{-- <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,choose" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,past" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,lamp" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,yet" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,eight" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,crew" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,event" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,instrument" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,practical" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,pass" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,bigger" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,number" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,feature" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,line" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,railroad" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,pride" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,too" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,bottle" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,base" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,cell" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,bag" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,card" alt=""></div>
            </div> --}}
        </div>


    </main>
@endsection
