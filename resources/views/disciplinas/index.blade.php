<x-layout title="Disciplinas">
    <form class="needs-validation" action="disciplinas/save" method="post">
        @csrf
        <div class="row g-3">

            <div class="col-sm-4">
                <label class="form-label">Descrição</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="col-sm-2">
                <label class="form-label">Sigla</label>
                <input type="text" class="form-control" id="sigla" name="sigla">
            </div>

            <div class="col-sm-3">
                <label class="form-label">Cor</label>
                <select class="form-select" id="cor" name="cor">
                    @foreach ($cores as $cor)
                        <option value="{{$cor}}">{{$cor}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3 align-self-end">
                <button class="btn btn-outline-primary" type="submit">Cadastrar Classe</button>
            </div>
        </div>
    </form>
    <ul class="mt-3 list-group list-group-horizontal">
        <li class="col-2 list-group-item list-group-item-secondary"><b>Sigla</b></li>
        <li class="col-10 list-group-item list-group-item-secondary"><b>Nome</b></li>
    </ul>
    @foreach ($disciplinas as $disciplina)
        <ul class="list-group list-group-horizontal-sm">
            <li class="col-2 list-group-item">{{ $disciplina->sigla }}</li>
            <li class="col-10 list-group-item">{{ $disciplina->nome }}</li>
        </ul>
    @endforeach
</x-layout>
