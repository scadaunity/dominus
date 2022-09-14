<x-layout title="{{$turma->nome}} - Professores">
    <form class="needs-validation" action="{{ route('turma.professor.store') }}" method="post">
        @csrf
        <div class="row g-3">
            <input type="hidden" name="turma_id" value="{{$turma->id}}">
            <div class="col-sm-5">
                <label class="form-label">*Professores</label>
                <select class="form-select" id="aluno_id" name="professor_id">
                    <option value="0">Selecione...</option>
                    @foreach ($todosProfessores as $listaProfessor)
                        <option value="{{$listaProfessor->id}}">{{$listaProfessor->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-3 align-self-end">
                <button class="btn btn-outline-primary btn-store" type="submit">Adicionar professor</button>
            </div>
        </div>
    </form>
    <br>

    <table class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th width="70">Codigo</th>
                <th>Nome</th>
                <th class="text-end"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professores as $professor)
            <tr>
                <td>{{$professor->professor_id}}</td>
                @foreach ($todosProfessores as $listaProfessor)
                    @if($listaProfessor->id == $professor->professor_id)
                        <td>{{ $listaProfessor->nome }}</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-danger btn-sm btn-excluir" data-nome="{{$listaProfessor->nome}}" data-rota="{{ route('turma.professor.destroy',['turma'=>$turma,'professor'=>$professor->id]) }}">
                                Excluir
                            </a>
                        </td>
                    @endif

                @endforeach


            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal excluir -->
    <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Excluir professor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="text-center">Confirma a exclusão do professor?</p>
            <h3 class="text-center" id="excluirNome"></h3>
            <p class="text-muted text-center">Não será possivel recuperar o registro.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <form id="formDelete" class="" action="" method="post">
                @csrf
                @method('delete')
                <button class="btn btn btn-danger" type="submit">Excluir</button>
            </form>
          </div>
        </div>
      </div>
    </div>



    <script type="text/javascript">

        //Excluir registro
        $( ".btn-excluir" ).on( "click", function() {
            console.log($(this).data("rota"))
            $('#formDelete').attr('action',$(this).data("rota"))
            $('#excluirNome').html($(this).data('nome'))
            $('#modalExcluir').modal('show');
        });

    </script>

</x-layout>
