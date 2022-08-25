<x-layout title="Cursos">
    <form class="needs-validation" action="{{ route('curso.store') }}" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-sm-5">
                <label class="form-label">Nome do Curso</label>
                <input type="text" class="form-control" name="nome" required>
            </div>

            <div class="col-3 align-self-end">
                <button class="btn btn-outline-primary" type="submit">Cadastrar Curso</button>
            </div>
        </div>
    </form>
    <br>

    <table id="tableProfessores" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Curso</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nome }}</td>
                <td>
                    <a href="#" class="btn btn-success btn-sm btn-editar"
                        data-curso={{$curso}}
                        data-nome={{$curso->nome}}
                        data-rota="{{ route('curso.update',['curso'=>$curso]) }}">
                        Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm btn-excluir"
                        data-professor = {{$curso}}
                        data-route = "{{ route('curso.destroy',['curso'=>$curso]) }}"
                        data-id="{{ $curso->id }}"
                        data-nome="{{ $curso->nome }}"
                        data-rota="{{ route('curso.destroy',['curso'=>$curso]) }}">
                        Excluir
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal excluir professor-->
    <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Excluir Curso</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="text-center">Confirma a exclusão do curso?</p>
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

    <!-- Modal editar-->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Editar Curso</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="needs-validation" action="" method="post" id="formEditCurso">
          <div class="modal-body">
                  @csrf
                  @method('put')
                  <div class="row g-3">
                      <div class="col-sm-12">
                          <label class="form-label">Nome do Curso</label>
                          <input type="text" class="form-control" name="nome" id="editarNome"required>
                      </div>
                  </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                <button class="btn btn btn-danger" type="submit">Salvar</button>

          </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">

        $( ".btn-excluir" ).on( "click", function() {
            let modal = document.getElementById('modalExcluir')
            let modalName = modal.querySelector('.modal-body h3')
            let modalAction = modal.querySelector('.modal-body h3')
            let form = document.getElementById('formDeleteUser')
            form.action = $(this).data('rota')
            modalName.textContent = $(this).data('nome')
            $('#modalExcluir').modal('show');
        });

        $( ".btn-editar" ).on( "click", function() {
            let form = document.getElementById('formEditCurso')
            let txtNome = document.getElementById('editarNome')
            txtNome.value = $(this).data('nome')
            form.action = $(this).data('rota')
            $('#modalEditar').modal('show');
        });

    </script>

</x-layout>
