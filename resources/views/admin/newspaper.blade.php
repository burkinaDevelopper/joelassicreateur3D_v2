@extends('layouts.admin')
@section('content')
    <main class="newspaper-admin">
        <h1>Newspaper</h1>

        <div class="form">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('newspaper-admin-store') }}" method="post">
                @csrf
                <div>
                    <label for="title">sujet</label>
                    <input type="text" name="sujet" id="" required>
                    @error('sujet')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>salutation</label>
                    <input type="text" name="salutation">
                    @error('salutation')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>message</label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="message" required></textarea>
                    @error('message')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit">Envoyer</button>
            </form>

        </div>
        <div class="table">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>fitugunage@mailinator.com</td>
                    </tr>
                    <tr>
                        <td>nava@mailinator.com</td>
                    </tr>
                    <tr>
                        <td>nava@mailinator.com</td>
                    </tr>
                    <tr>
                        <td>nava@mailinator.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
