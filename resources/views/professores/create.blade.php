<x-layout title="Novo Professor">
    <form action="{{ route('professor.store') }}" method="post">
        @csrf
        <div class="row g-3 ">
            <div class="col-sm-8">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control form-control-sm" id="nome" name="nome" required="">
            </div>

            <div class="col-sm-4">
                <label class="form-label">CPF</label>
                <input type="text" onblur="mascaraCpf(this)" class="form-control form-control-sm" id="cpf" name="cpf"
                    placeholder="000.000.000-00" required="">
            </div>

            <div class="col-sm-5">
                <label class="form-label">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="voce@example.com" required="">
            </div>

            <div class="col-sm-3">
                <label class="form-label">Celular</label>
                <input type="text" onblur="mascaraTelefone(this)" class="form-control form-control-sm"
                    id="celular" name="celular" placeholder="(00) 00000-0000" required="">
            </div>

            <div class="col-sm-5">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control form-control-sm" id="endereco" name="endereco" placeholder="Rua/AV" required="">
            </div>

            <div class="col-sm-1">
                <label class="form-label">Numero</label>
                <input type="text" class="form-control form-control-sm" id="numero" name="numero" required="">
            </div>

            <div class="col-sm-2">
                <label class="form-label">Complemento</label>
                <input type="text" class="form-control form-control-sm" id="complemento" name="complemento">
            </div>

            <div class="col-sm-4">
                <label class="form-label">Bairro</label>
                <input type="text" class="form-control form-control-sm" id="bairro" name="bairro" required="">
            </div>



            <div class="col-sm-5">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control form-control-sm" id="cidade" name="cidade" required="">
            </div>

            <div class="col-sm-2">
                <label class="form-label">CEP</label>
                <input type="text" onblur="mascaraCep(this)" class="form-control form-control-sm" id="cep" placeholder="00000-000"
                    name="cep" required="">
            </div>

            <div class="col-sm-1">
                <label class="form-label">Estado</label>
                <select class="form-select form-select-sm" id="estado" name="estado" required="" value="">

                    @foreach ($estados as $estado)
                        <option value="{{$estado->uf}}">{{$estado->uf}}</option>
                    @endforeach

                </select>
            </div>

            <div class="row col-12 justify-content-end mb-3 mt-3">
                <button class="w-25 btn btn-outline-secondary" type="submit" onclick="window.history.back()">Voltar</button>
                <button class="w-25 btn btn-outline-primary ms-3" type="submit">Salvar</button>
            </div>
        </div>
    </form>
</x-layout>
