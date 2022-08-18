<x-layout title="Novo Aluno">
    <form class="needs-validation" action="save" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-sm-12">
                <label class="form-label">Matricula</label>
                <input type="text" class="form-control" id="matricula" name="matricula" required="">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required="">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required="">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Data de Nascimento</label>
                <input type="text" class="form-control" id="nascimento" name="dataNascimento" placeholder="DD/MM/AAAA"
                    onblur="mascaraData(this)" required="">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Sexo</label>
                <div class="container mt-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="mas" value="mas" required="">
                        <label class="form-check-label">Mascolino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="fem" value="fem" required="">
                        <label class="form-check-label">Feminino</label>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <label class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" placeholder="00.000.000-0" required="">
            </div>

            <div class="col-md-2">
                <label class="form-label">Estado Emissor</label>
                <select class="form-select" id="estadoEmissor" name="estadoEmissor" required="">
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->uf }}">{{ $estado->uf }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-4">
                <label class="form-label">Órgão Emissor</label>
                <input type="text" class="form-control" id="orgaoEmisor" name="orgaoEmisor" required="">
            </div>

            <div class="col-sm-3">
                <label class="form-label">Data de expedição</label>
                <input type="text" class="form-control" id="expedicaoRg" name="dataExpedicao" placeholder="DD/MM/AAAA"
                    onblur="mascaraData(this)"  required="">
            </div>

            <div class="col-9">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="voce@example.com" required="">
            </div>

            <div class="col-3">
                <label class="form-label">Celular</label>
                <input type="text" onblur="mascaraTelefone(this)" class="form-control" id="telefone" name="telefone"
                    placeholder="(00) 00000-0000" required="">
            </div>

            <div class="col-12">
                <label class="form-label">CEP</label>
                <input type="text" onblur="mascaraCep(this)" class="form-control" id="cep" name="cep"
                    placeholder="00000-000" required="">
            </div>

            <div class="col-10">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua/AV" required="">
            </div>

            <div class="col-2">
                <label class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" required="">
            </div>

            <div class="col-12">
                <label class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" required="">
            </div>

            <div class="col-10">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required="">
            </div>

            <div class="col-md-2">
                <label class="form-label">Estado</label>
                <select class="form-select" id="estado" name="estado" required="">

                    @foreach ($estados as $estado)
                        <option value="{{ $estado->uf }}">{{ $estado->uf }}</option>
                    @endforeach

                </select>
            </div>
            <hr class="my-4">
            <div class="row col-12 justify-content-end mb-3">
                <button class="w-25 btn btn-outline-primary" type="submit">Cadastrar</button>
            </div>
    </form>

</x-layout>
