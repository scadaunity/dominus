<x-layout title="Professores">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <form action="professores/create" method="get">
                @csrf
                <button class="btn btn-outline-primary" type="submit">Novo Professor</button>
            </form>
        </div>
        <div class="p-2 bd-highlight">
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Busca Professor">
        </div>
        <div class="p-2 bd-highlight">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </div>
    </div>
    <ul class="mt-3 list-group list-group-horizontal">
        <li class="col-4 list-group-item list-group-item-secondary"><b>Nome</b></li>
        <li class="col-4 list-group-item list-group-item-secondary"><b>E-mail</b></li>
        <li class="col-2 list-group-item list-group-item-secondary"><b>Cidade e Estado</b></li>
        <li class="col-2 list-group-item list-group-item-secondary"><b>Operação</b></li>
    </ul>
    @foreach ($professores as $prof)
        <ul class="list-group list-group-horizontal-sm">
            <li class="col-4 list-group-item">{{ $prof->nome }}</li>
            <li class="col-4 list-group-item">{{ $prof->email }}</li>
            <li class="col-2 list-group-item">{{ $prof->cidade }} - {{$prof->estdado}}</li>
            <li class="col-2 list-group-item">
                <a href="" class="btn btn-success btn-sm">Alterar</a>
                <a href="" class="btn btn-danger btn-sm">Excluir</a>
            </li>
        </ul>
    @endforeach

</x-layout>
