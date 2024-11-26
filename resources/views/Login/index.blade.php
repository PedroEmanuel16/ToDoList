@extends('Layouts.app', ['title' => 'Login'])

@section('button')
    @component('components.button', ['title' => 'Registrar', 'url' => route('register.index')])
    @endcomponent
@endsection

@section('content-general')

    @if(session('error'))
        <div class="alert alert-danger w-50 mx-auto mt-3">{{ session('error') }}</div>
    @endif

    <form action="{{ route('login.login') }}" method="POST" class="d-flex align-items-center mt-4 flex-column px-4">
        @csrf

        <h1>Login</h1>

        @component('components.Form.inputs-form', [
            'title' => 'email',
            'label' => 'Email',
            'type' => 'email',
            'required' => true,
            'placeholder' => 'Digite seu email',
            'value' => old('email'),
        ])
        @endcomponent

        @component('components.Form.inputs-form', [
            'title' => 'password',
            'label' => 'Senha',
            'type' => 'password',
            'required' => true,
            'placeholder' => 'Digite sua senha',
        ])
        @endcomponent

        @component('components.Form.buttons-form', ['title' => 'Login'])
        @endcomponent
    </form>
@endsection

