@extends('Layouts.app', ['title' => 'Editar Tarefa'])

@section('button')
    @component('components.button', ['title' => 'Voltar', 'url' => route('task.index')])
    @endcomponent
@endsection

@section('content-general')
    <form action="{{ route('task.update', $task->id) }}" method="POST"
        class="d-flex align-items-center mt-4 flex-column px-4">
        @csrf
        @method('PUT')

        <h1>Editar Tarefa</h1>
        @component('components.Form.inputs-form', [
            'title' => 'title',
            'label' => 'Título da Tarefa',
            'placeholder' => 'Digite o título da sua tarefa...',
            'value' => $task->title,
            'required' => true,
        ])
        @endcomponent

        @component('components.Form.inputs-form', [
            'title' => 'date',
            'label' => 'Data de realização',
            'type' => 'datetime-local',
            'required' => true,
            'value' => $task->date,
        ])
        @endcomponent

        @component('components.Form.input-select-form', [
            'label' => 'Categoria',
            'title' => 'category_id',
            'required' => true,
        ])
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if ($task->category_id == $category->id) selected @endif>{{ $category->title }}
                </option>
            @endforeach
        @endcomponent

        @component('components.Form.textarea-form', [
            'label' => 'Descrição da tarefa',
            'title' => 'desc',
            'required' => true,
            'value' => $task->desc,
        ])
        @endcomponent

        <div class="mt-3 d-flex justify-content-start align-items-center w-50 form-check">
            <input class="form-check-input border-secondary me-2" type="checkbox" name="checked" @if($task->checked)checked @endif value='1' id="checked">
            <label class="form-check-label" for="checked">Tarefa Realizada?</label>
        </div>
        @component('components.Form.buttons-form', ['title' => 'Editar Tarefa'])
        @endcomponent
    </form>
@endsection
