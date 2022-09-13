<x-layout title="Turmas">
    <a href="{{ route('turma.create') }}" class="btn btn-outline-primary">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span>Criar nova turma</span>
    </a>
    <br>

    <table class="display table table-light " style="width:100%">
        <thead>
            <tr>
                <th width="20" >Codigo</th>
                <th>Curso</th>
                <th width="100"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($turmas as $turma)
            <tr>
                <td>{{$turma->id}}</td>
                <td>{{$turma->nome}}</td>
                <td class="text-end">
                    <div class="">
                        <a href="{{ route('turma.show',['turma' => $turma->id]) }}" class="btn btn-outline-info btn-sm btn-editar"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-outline-secondary btn-sm btn-editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-excluir"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>



    <script type="text/javascript">



    </script>

</x-layout>
