<main class="listing-file">
    <h1>{{ $filename ?? 'ajouter video' }}</h1>

    <div class="form">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route($store) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="" placeholder="titre" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="file" name="filename" id="" required>
            <button type="submit">Envoyer</button>
        </form>

    </div>
    <div class="table">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Titre</th>
                    <th>supprimer</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($images as $img)
                    <tr>
                        <td>{{ $img->title }}</td>
                        <td>{{ $img->name }}</td>
                        <td>
                            <form action="{{ route($delete, [$img->slug]) }}" method="post" class="delete-img">
                                @method('delete')
                                @csrf
                                <button type="submit">supprimer</i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>vide</td>
                        <td>vide</td>
                        <td>vide</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
