@extends('Layouts.app', ['title' => 'Registrar'])

@section('button')
    @component('components.button', ['title' => 'Entrar', 'url' => route('login')])

    @endcomponent
@endsection

@section('content-general')
    <form action="{{ route('register.register') }}" method="POST" class="d-flex align-items-center mt-4 flex-column px-4">
        @csrf

        <h1>Registrar</h1>
        @component('components.Form.inputs-form', [
            'title' => 'name',
            'label' => 'Nome',
            'placeholder' => 'Digite seu nome',
            'required' => true,
            'value' => old('name')
        ])
        @endcomponent

        @component('components.Form.inputs-form', ['title' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'placeholder' => 'Digite seu email', 'value' => old('email')])
        @endcomponent

        @component('components.Form.inputs-form', ['title' => 'password', 'label' => 'Senha', 'type' => 'password', 'required' => true, 'placeholder' => 'Digite sua senha'])
        @endcomponent

        @component('components.Form.inputs-form', ['title' => 'password_confirmation', 'label' => 'Confirmação de Senha', 'type' => 'password', 'required' => true, 'placeholder' => 'Confirme sua senha'])
        @endcomponent

        @component('components.Form.buttons-form', ['title' => 'Registrar'])
        @endcomponent
    </form>
@endsection
