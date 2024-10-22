@extends('Layouts.app')

@section('button')
    @component('components.button', ['url' => route('task.create'), 'title' => 'Criar Tarefa'])
    @endcomponent
@endsection

@section('content-general')
    @component('components.home-page')
        @section('tasks-list')
            <div class="list-tasks mt-3">
                @foreach ($tasks as $task)
                    @component('components.task', ['task' => $task])
                    @endcomponent
                @endforeach
            </div>
        @endsection
    @endcomponent
@endsection
