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
    <ul class="mt-3 list-group list-group-horizontal text-center">
        <li class="col-4 list-group-item list-group-item-secondary"><b>Nome</b></li>
        <li class="col-4 list-group-item list-group-item-secondary"><b>E-mail</b></li>
        <li class="col-2 list-group-item list-group-item-secondary"><b>Cidade e Estado</b></li>
        <li class="col-2 list-group-item list-group-item-secondary"><b>Ação</b></li>
    </ul>
    @foreach ($professores as $prof)
        <ul class="list-group list-group-horizontal-sm">
            <li class="col-4 list-group-item">{{ $prof->nome }}</li>
            <li class="col-4 list-group-item">{{ $prof->email }}</li>
            <li class="col-2 list-group-item">{{ $prof->cidade }} - {{$prof->estdado}}</li>
            <li class="col-2 list-group-item text-center">
                <a href="{{ url('professores/edit\/').$prof->id }}" class="btn btn-success btn-sm">Alterar</a>
                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalExcluir"
                    data-id="{{ $prof->id }}"
                    data-nome="{{ $prof->nome }}"
                    data-rota="{{ url('professores/delete') }}">
                    Excluir
                </a>
            </li>
        </ul>
    @endforeach

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
