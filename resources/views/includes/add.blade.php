<main class="listing-course">
    <h1>{{ 'Ajouter a ' . $course->title ?? 'ajouter' }}</h1>

    <div class="form">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route($store, [$course->slug]) }}" method="post">
            @csrf
            <div>
                <label for="chapter">Lesson</label>
                <input type="text" name="chapter" id="" placeholder="Lesson" required>
            </div>
            @error('chapter')
                <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Envoyer</button>
        </form>

    </div>

</main>
