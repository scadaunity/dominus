<x-layout title="Modulos">
    <form class="needs-validation" action="{{ route('modulo.store') }}" method="post">
        @csrf
        <div class="row g-3">

            <div class="col-sm-5">
                <label class="form-label">*Curso</label>
                <select class="form-select" id="curso_id" name="curso_id">
                    <option value="0">Selecione</option>
                    @foreach ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-5">
                <label class="form-label">*Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-2 align-self-end">
                <button class="btn btn-outline-primary" type="submit">Cadastrar modulo</button>
            </div>
        </div>
    </form>
    <br>

    <table class="display table " style="width:100%">
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

    <!-- Modal excluir-->
    <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Excluir modulo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="text-center">Confirma a exclusão do modulo?</p>
            <h3 class="text-center"></h3>
            <p class="text-muted text-center">Não será possivel recuperar o registro.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <form id="formDeleteUser" class="" action="" method="post">
                @csrf
                @method('delete')
                <button class="btn btn btn-danger" type="submit">Excluir</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
        //EXCLUIR REGISTRO
        $( ".btn-excluir" ).on( "click", function() {
            let modal = document.getElementById('modalExcluir')
            let modalName = modal.querySelector('.modal-body h3')
            let form = document.getElementById('formDeleteUser')
            form.action = $(this).data('rota')
            modalName.textContent = $(this).data('nome')
            $('#modalExcluir').modal('show');
        });

    </script>


</x-layout>
