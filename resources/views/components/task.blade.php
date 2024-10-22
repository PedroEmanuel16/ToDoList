
    <div class="task d-flex justify-content-around align-items-center py-5 mb-2">
        <div class="title form-check">
            <input class="form-check-input border-dark" type="checkbox" value="" id="title{{$task->id}}" {{$task->checked ? 'checked' : ''}}>
            <label class="form-check-label ps-3 fw-bold" for="title{{$task->id}}">
                {{$task->title}}
            </label>
        </div>
        <div class="priority d-flex align-items-center">
            <div class="rounded-circle bg-danger"></div>
            <h5 class="mb-0 ps-3">{{$task->category->title}}</h5>
        </div>
        <div class="actions d-flex">
            <a href="{{route('task.edit', $task->id)}}" class="text-decoration-none">
                <img src="{{ asset('assets/images/icon-edit.png') }}"></img>
            </a>

            <form action="{{route('task.destroy', $task->id)}}" method="POST" class="ms-4 bg-transparent">
                @csrf
                @method('DELETE')

                <button class="border-0 bg-transparent"><img src="{{ asset('assets/images/icon-delete.png') }}"></img></button>
            </form>
        </div>
    </div>
