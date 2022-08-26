<x-layout title="Classes">
    <form class="needs-validation" action="{{route('classe.store')}}" method="post">
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
    <br>

    <table id="tableProfessores" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Classe</th>
                <th>Serie</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $classe)
            <tr>
                <td>{{ $classe->nome }}</td>
                <td>{{ $classe->serie }}</td>
                <td>
                    <a href="#" class="btn btn-success btn-sm btn-editar"
                        data-curso={{$classe}}
                        data-nome={{$classe->nome}}
                        data-rota="{{ route('classe.update',['classe'=>$classe]) }}">
                        Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm btn-excluir"
                        data-professor = {{$classe}}
                        data-route = "{{ route('classe.destroy',['classe'=>$classe]) }}"
                        data-id="{{ $classe->id }}"
                        data-nome="{{ $classe->nome }}"
                        data-rota="{{ route('classe.destroy',['classe'=>$classe]) }}">
                        Excluir
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</x-layout>
