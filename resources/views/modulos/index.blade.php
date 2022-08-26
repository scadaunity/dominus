<x-layout title="Modulos">
    <form class="needs-validation" action="{{ route('modulo.store') }}" method="post">
        @csrf
        <div class="row g-3">

            <div class="col-sm-5">
                <label class="form-label">Curso</label>
                <select class="form-select" id="curso_id" name="curso_id">
                    <option value="0">Curso</option>
                    @foreach ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-5">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="col-2 align-self-end">
                <button class="btn btn-outline-primary" type="submit">Cadastrar modulo</button>
            </div>
        </div>
    </form>
    <br>

    <table id="tableProfessores" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Modulo</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modulos as $modulo)
            <tr>
                <td>{{ $modulo->curso_id }}</td>
                <td>{{ $modulo->nome }}</td>
                <td>
                    <a href="#" class="btn btn-success btn-sm btn-editar"
                        data-curso={{$modulo}}
                        data-nome={{$modulo->nome}}
                        data-rota="{{ route('modulo.update',['modulo'=>$modulo]) }}">
                        Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm btn-excluir"
                        data-professor = {{$modulo}}
                        data-route = "{{ route('modulo.destroy',['modulo'=>$modulo]) }}"
                        data-id="{{ $modulo->id }}"
                        data-nome="{{ $modulo->nome }}"
                        data-rota="{{ route('modulo.destroy',['modulo'=>$modulo]) }}">
                        Excluir
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</x-layout>
