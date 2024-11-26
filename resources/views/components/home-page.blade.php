<main class="d-flex p-2">
    <section class="graph pe-5">
        <div class="graph-header d-flex justify-content-between">
            <h2 class="fs-5">Progresso do Dia</h2>
            <div class="graph-date">
                <img src="{{asset('assets/images/icon-prev.png')}}" alt="">
                    12 de Dez
                <img src="{{asset('assets/images/icon-next.png')}}" alt="">
            </div>
        </div>
        <div class="graph-subtitle mt-2">
            <h3 class="fs-6">Tarefas <b>3/6</b></h3>
        </div>
        <div class="graph-placeholder mx-auto mt-4">

        </div>
        <div class="graph-tasks-left mt-5 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/images/icon-info.png')}}" alt="" class="img-fluid">
            <p class="mb-0 ps-1">Restam 3 tarefas para serem realizadas</p>
        </div>
    </section>

    <section class="list flex-grow-1">
        <div class="list-header">
            <select class="form-select w-auto" aria-label="Select Tasks">
                <option selected>Todas as Tarefas</option>
            </select>
        </div>
        @yield('tasks-list')
    </section>
</main>
