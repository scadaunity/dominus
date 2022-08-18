<x-layout title="Classes">
    <form class="needs-validation" action="classes/save" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-sm-5">
                <label class="form-label">Nome da Classe</label>
                <input type="text" class="form-control" name="nome">
            </div>

            <div class="col-sm-4">
                <label class="form-label">Série</label>
                <select class="form-select" name="serie" required="">
                    @foreach ($series as $serie)
                        <option value="{{ $serie }}">{{ $serie }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3 align-self-end">
                <button class="btn btn-outline-primary" type="submit">Cadastrar Classe</button>
            </div>
        </div>
    </form>
    <ul class="mt-3 list-group list-group-horizontal">
        <li class="col-6 list-group-item list-group-item-secondary"><b>Nome</b></li>
        <li class="col-6 list-group-item list-group-item-secondary"><b>Serie</b></li>
    </ul>
    @foreach ($classes as $classe)
        <ul class="list-group list-group-horizontal-sm">
            <li class="col-6 list-group-item">{{ $classe->nome }}</li>
            <li class="col-6 list-group-item">{{ $classe->serie }}</li>
        </ul>
    @endforeach
</x-layout>
