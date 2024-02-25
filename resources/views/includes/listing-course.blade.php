<main class="listing-course">
    <h1>{{ $lesson ?? 'ajouter video' }}</h1>

    <div class="form">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route($store) }}" method="post">
            @csrf
            <div>
                <label for="title">Chapitre</label>
                <input type="text" name="title" id="" placeholder="Chapitre" required>
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
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
    <div class="table">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>supprimer</th>
                    <th>Titre</th>
                    <th>Lesson</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                    <tr>
                        <td class="controls">
                            <form action="{{ route($delete, [$course->slug]) }}" method="post" class="delete-course">
                                @method('delete')
                                @csrf
                                <button type="submit">supprimer</i></button>
                            </form>
                            <button class="add"><a href="{{ route($add, [$course->slug]) }}">Ajouter</a></button>
                        </td>
                        <td>{{ $course->title }}</td>
                        <td>
                            <ul>
                                @foreach ($course->$chapters as $chapter)
                                    <li>{{ $chapter->chapter }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="controls">
                            vide
                        </td>
                        <td>vide</td>
                        <td>
                            <ul>
                                <li>vide</li>
                            </ul>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
