@extends('Layouts.app', ['title' => 'Login'])

@section('button')
    @component('components.button', ['title' => 'Registrar', 'url' => route('register')])

    @endcomponent
@endsection

@section('content-general')
    Fazer Login
@endsection
