<x-layout title="Cursos">
    <form class="needs-validation" action="cursos/save" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-sm-5">
                <label class="form-label">Nome do Curso</label>
                <input type="text" class="form-control" name="nome">
            </div>

            <div class="col-3 align-self-end">
                <button class="btn btn-outline-primary" type="submit">Cadastrar Curso</button>
            </div>
        </div>
    </form>
    <ul class="mt-3 list-group list-group-horizontal">
        <li class="col-6 list-group-item list-group-item-secondary"><b>Codigo</b></li>
        <li class="col-6 list-group-item list-group-item-secondary"><b>Curso</b></li>
    </ul>
    @foreach ($cursos as $curso)
        <ul class="list-group list-group-horizontal-sm">
            <li class="col-6 list-group-item">{{ $curso->codigo }}</li>
            <li class="col-6 list-group-item">{{ $curso->nome }}</li>
        </ul>
    @endforeach
</x-layout>
