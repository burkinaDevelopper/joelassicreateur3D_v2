<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        background: #636e72;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box {
        backdrop-filter: blur(5px);
        background: #2f3542;
        display: flex;
        flex-direction: column;
        min-width: 50%;
        border-radius: 10px
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin: 30px 0 10px;
        color: #ffffff;
        text-align: center;
    }

    input,
    button {
        height: 40px;
        margin: 10px 0;
    }

    button {
        background: #f8c291;
        cursor: pointer;
    }

    .alert {
        color: #2ed573;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        width: 100%;
    }

    strong {
        align-items: center;
        padding: 10px 0;
        font-size: 1.5rem;
        color: #2ed573;
    }
</style>

<body>

    <div class="box">
        <div class="popup">
            <form action="{{ route('subscribe') }}" method="post">
                @csrf
                <label for="">{{ config('app.name') }}</label>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <button type="submit">souscrire</button>

            </form>
            @if (session('success'))
                <div class="alert-souscript"><strong>{{ session('success') }}</strong></div>
            @endif
        </div>
    </div>
</body>

</html>
