<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/variables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title ?? 'ToDoList' }}</title>
</head>

<body>
    <div class="container-general d-flex">
        <div class="sidebar vh-100 text-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-logo">
        </div>
        <div class="content">
            <nav class="navbar py-4 d-flex align-items-center justify-content-end">
                @yield('button')
            </nav>

            @if ($errors->any())
                <div class="alert alert-danger d-flex justify-content-center mx-5 mt-4">
                    <ul class="">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
            @yield('content-general')
        </div>
    </div>
</body>

</html>
