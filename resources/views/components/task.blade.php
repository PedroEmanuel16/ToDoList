
    <div class="task d-flex justify-content-between align-items-center py-5 mb-1">
        <div class="title form-check d-flex gap-4">
            <div class="d-flex gap-0">
                <input class="form-check-input border-dark" type="checkbox" value="" id="title{{$task->id}}" {{$task->checked ? 'checked' : ''}}>
                <label class="form-check-label ps-1 fw-bold" for="title{{$task->id}}">
                    {{$task->title}}
                </label>
            </div>

            <div class="priority d-flex align-items-center">
                <div class="rounded-circle bg-danger"></div>
                <h5 class="mb-0 ps-1">{{$task->category->title}}</h5>
            </div>
        </div>
        <div class="actions d-flex">
            <a href="{{route('task.edit', $task->id)}}" class="text-decoration-none">
                <img src="{{ asset('assets/images/icon-edit.png') }}"></img>
            </a>

            <form action="{{route('task.destroy', $task->id)}}" method="POST" class="ps-4 bg-transparent">
                @csrf
                @method('DELETE')

                <button class="border-0 bg-transparent"><img src="{{ asset('assets/images/icon-delete.png') }}"></img></button>
            </form>
        </div>
    </div>
