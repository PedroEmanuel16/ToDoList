@extends('Layouts.app', ['title' => 'Criar Tarefa'])

@section('button')
    @component('components.button', ['title' => 'Voltar', 'url' => route('task.index')])
    @endcomponent
@endsection

@section('content-general')
    <form action="{{ route('task.store') }}" method="POST" class="d-flex align-items-center mt-4 flex-column px-4">
        @csrf

        <h1>Criar Tarefa</h1>
        @component('components.Form.inputs-form', [
            'title' => 'title',
            'label' => 'Título da Tarefa',
            'placeholder' => 'Digite o título da sua tarefa...',
            'required' => true
        ])
        @endcomponent

        @component('components.Form.inputs-form', ['title' => 'date', 'label' => 'Data de realização', 'type' => 'datetime-local', 'required' => true])
        @endcomponent

        @component('components.Form.input-select-form', ['label' => 'Categoria', 'title' => 'category_id', 'required' => true])
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        @endcomponent

        @component('components.Form.textarea-form', ['label' => 'Descrição da tarefa', 'title' => 'desc', 'required' => true])
        @endcomponent

        @component('components.Form.buttons-form', ['title' => 'Criar Tarefa'])
        @endcomponent
    </form>
@endsection
