@extends('Layouts.app')

@section('button')
    @component('components.button', ['url' => route('task.create'), 'title' => 'Sair', 'class' => 'btn btn-danger btn-lg me-4'])
    @endcomponent
    @component('components.button', ['url' => route('task.create'), 'title' => 'Criar Tarefa', 'class' => 'btn-general btn-lg text-light me-4'])
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
                <div class="mt-1">
                    {{$tasks->links()}}
                </div>

            </div>
        @endsection
    @endcomponent
@endsection
