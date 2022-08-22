<x-layout title="Professores">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <form action="professores/create" method="get">
                @csrf
                <button class="btn btn-outline-primary" type="submit">Novo Professor</button>
            </form>
        </div>
    </div>



    <table id="tableProfessores" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade e Estado</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professores as $prof)
            <tr>
                <td>{{ $prof->nome }}</td>
                <td>{{ $prof->email }}</td>
                <td>{{ $prof->cidade }} - {{$prof->estdado}}</td>
                <td>
                    <a href="{{ url('professores\/') .$prof->id .'/editar'}}" class="btn btn-success btn-sm">Alterar</a>
                    <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalExcluir"
                        data-id="{{ $prof->id }}"
                        data-nome="{{ $prof->nome }}"
                        data-rota="{{ url('professores/delete') }}">
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
            <h5 class="modal-title" id="exampleModalLabel">Excluir Professor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h3 class="text-center">Deseja excluir o professor?</h3>
            <p class="text-muted text-center">Não será possivel recuperar o registro.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger">Excluir</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">


    //Modal excluir
    let modalExcluir = document.getElementById('modalExcluir')
        modalExcluir.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        console.log('Modal aberto')
        let button = event.relatedTarget
        // Extract info from data-bs-* attributes
        let id = button.getAttribute('data-id')
        let nome = button.getAttribute('data-nome')
        let rota = button.getAttribute('data-rota')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        let modalTitle = modalExcluir.querySelector('.modal-title')
        let modalBodyMessage = modalExcluir.querySelector('.modal-body h3')

        //modalTitle.textContent = 'New message to ' + id
        modalBodyMessage.textContent = 'Excluir ' + nome
        })
    </script>

</x-layout>
