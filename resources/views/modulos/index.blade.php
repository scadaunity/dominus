<x-layout title="Modulos">
    <form class="needs-validation" action="{{ route('modulo.store') }}" method="post">
        @csrf
        <div class="row g-3">

            <div class="col-sm-5">
                <label class="form-label">*Curso</label>
                <select class="form-select" id="curso_id" name="curso_id">
                    <option value="0">Selecione...</option>
                    @foreach ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-5">
                <label class="form-label">*Nome do modulo</label>
                <input type="text" class="form-control" id="nome" name="nome" required disabled>
            </div>
            <div class="col-2 align-self-end">
                <button class="btn btn-outline-primary" type="submit" disabled id="btnNovo">Cadastrar modulo</button>
            </div>
        </div>
    </form>
    <br>

    <table class="display table" style="width:100%" id="tableModulos">
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
                @foreach ($cursos as $curso)
                    @if($curso->id == $modulo->curso_id)
                        <td>{{ $curso->nome }}</td>
                    @endif

                @endforeach
                <td>{{ $modulo->nome }}</td>
                <td>
                    <a href="#" class="btn btn-secondary btn-sm btn-editar"
                        data-nome="{{$modulo->nome}}"
                        data-rota="{{ route('modulo.update',['modulo'=>$modulo]) }}">
                        Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm btn-excluir"
                        data-nome="{{ $modulo->nome }}"
                        data-rota="{{ route('modulo.destroy',['modulo'=>$modulo]) }}">
                        Excluir
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal excluir - Inicio -->
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
    <!-- Modal excluir - Fim -->

    <!-- Modal editar - Inicio -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Editar Curso</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="needs-validation" action="" method="post" id="formEditar">
              <div class="modal-body">
                  @csrf
                  @method('put')
                  <div class="row g-3">
                      <div class="col-sm-12">
                          <label class="form-label">*Curso</label>
                          <select class="form-select" id="editarCurso_id" name="curso_id">
                              <option value="0">Selecione</option>
                              @foreach ($cursos as $curso)
                                  <option value="{{$curso->id}}">{{$curso->nome}}</option>
                              @endforeach
                          </select>
                      </div>
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
    <!-- Modal editar - Fim -->

    <script type="text/javascript">

        //Excluir Registro
        $( ".btn-excluir" ).on( "click", function() {
            let modal = document.getElementById('modalExcluir')
            let modalName = modal.querySelector('.modal-body h3')
            let form = document.getElementById('formDeleteUser')
            form.action = $(this).data('rota')
            modalName.textContent = $(this).data('nome')
            $('#modalExcluir').modal('show');
        });

        //Editar registro
        $( ".btn-editar" ).on( "click", function() {
            let form = document.getElementById('formEditar')
            let txtNome = document.getElementById('editarNome')
            txtNome.value = $(this).data('nome')
            form.action = $(this).data('rota')
            $('#modalEditar').modal('show');
        });

        $('#curso_id').change(function(e){
            let value = $('#curso_id').val()
            if (value > 0) {
                $( "#nome" ).prop( "disabled", false ).focus();
                $( "#btnNovo" ).prop( "disabled", false );
            } else {
                $( "#nome" ).val('').prop( "disabled", true );
                $( "#btnNovo" ).prop( "disabled", true );
            }
        });

    </script>


</x-layout>
