<x-layout title="ALTERAR PROFESSOR">
    <form action="save" method="post">
        @csrf
        <div class="row g-3">
            <input type="hidden" name="id" value="{{$professor->id}}">
            <div class="col-sm-6">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required="" value="{{$professor->nome}}">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required="" value="{{$professor->sobrenome}}">
            </div>

            <div class="col-sm-12">
                <label class="form-label">CPF</label>
                <input type="text" onblur="mascaraCpf(this)" class="form-control" id="cpf" name="cpf"
                    placeholder="000.000.000-00" required="" value="{{$professor->cpf}}">
            </div>

            <div class="col-sm-8">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="voce@example.com" required="" value="{{$professor->email}}">
            </div>

            <div class="col-sm-4">
                <label class="form-label">Celular</label>
                <input type="text" onblur="mascaraTelefone(this)" class="form-control"
                    id="celular" name="celular" placeholder="(00) 00000-0000" required="" value="{{$professor->celular}}">
            </div>

            <div class="col-sm-12">
                <label class="form-label">CEP</label>
                <input type="text" onblur="mascaraCep(this)" class="form-control" id="cep" placeholder="00000-000"
                    name="cep" required="" value="{{$professor->cep}}">
            </div>

            <div class="col-sm-10">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua/AV" required="" value="{{$professor->endereco}}">
            </div>

            <div class="col-sm-2">
                <label class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" value="{{$professor->complemento}}">
            </div>

            <div class="col-sm-12">
                <label class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" required="" value="{{$professor->bairro}}">
            </div>

            <div class="col-sm-10">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required="" value="{{$professor->cidade}}">
            </div>

            <div class="col-sm-2">
                <label class="form-label">Estado</label>
                <select class="form-select" id="estado" name="estado" required="" value="{{$professor->estado}}">

                    @foreach ($estados as $estado)
                        <option value="{{$estado->uf}}">{{$estado->uf}}</option>
                    @endforeach
                    <option value="{{ $professor->estado }}">{{ $professor->estado }}</option>

                </select>
            </div>
            <hr class="my-4">
            <div class="row col-12 justify-content-end mb-3">
                <button class="w-25 btn btn-outline-primary" type="submit">Cadastrar</button>
            </div>
        </div>
    </form>
</x-layout>
