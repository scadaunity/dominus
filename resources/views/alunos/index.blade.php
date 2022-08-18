<x-layout title="Alunos">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <form action="alunos/create" method="get">
                <button class="btn btn-outline-primary" type="submit">Novo Aluno</button>
            </form>
        </div>
        <div class="p-2 bd-highlight">
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Busca Aluno">
        </div>
        <div class="p-2 bd-highlight">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </div>
    </div>
    <ul class="mt-3 list-group list-group-horizontal">
        <li class="col-2 list-group-item list-group-item-secondary"><b>Matricula</b></li>
        <li class="col-6 list-group-item list-group-item-secondary"><b>Nome</b></li>
        <li class="col-4 list-group-item list-group-item-secondary"><b>Email</b></li>
    </ul>
    @foreach ($alunos as $aluno)
        <ul class="list-group list-group-horizontal-sm">
            <li class="col-2 list-group-item">{{ $aluno->matricula }}</li>
            <li class="col-6 list-group-item">{{ $aluno->nome }}</li>
            <li class="col-4 list-group-item">{{ $aluno->email }}</li>
        </ul>
    @endforeach
</x-layout>
