<x-layout title="Criar nova turma">
    <form class="needs-validation" action="{{route('turma.store')}}" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-sm-3">
                <label class="form-label">*Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="col-sm-3">
                <label class="form-label">*Curso</label>
                <select class="form-select" id="curso_id" name="curso_id" disabled>
                    <option value="0">Selecione...</option>
                    @foreach ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-3">
                <label class="form-label">*Modulo</label>
                <select class="form-select" id="modulo_id" name="modulo_id" disabled>
                    <option value="0">Selecione...</option>
                    @foreach ($modulos as $modulo)
                        <option value="{{$modulo->id}}">{{$modulo->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-3 align-self-end">
                <button class="btn btn-outline-primary" type="submit" id="btnNovo" disabled>Cadastrar Turma</button>
            </div>
        </div>
    </form>
    <br>

    <script type="text/javascript">

        // Valida o campo nome
        $( "#nome" )
          .keyup(function() {
             // verifica se possui mais de 5 caracteres
            if ($(this).val().length >= 5)
            {
                $(this).addClass('is-valid')
                $( "#curso_id" ).prop( "disabled", false)
            } else {
                $(this).removeClass('is-valid')
                $( "#curso_id" ).prop( "disabled", true ).removeClass('is-valid')
            }
          })
          .keyup();

          // Valida o campo curso
          $('#curso_id').change(function(e){
              let value = $('#curso_id').val()
              if (value > 0) {
                  $(this).addClass('is-valid')
                  $( "#modulo_id" ).prop( "disabled", false ).focus();
              } else {
                  $(this).removeClass('is-valid')
                  $( "#modulo_id" ).val('').prop( "disabled", true );
              }
          });

          // Valida o campo modulo
          $('#modulo_id').change(function(e){
              let value = $('#curso_id').val()
              if (value > 0) {
                  $(this).addClass('is-valid')
                  $( "#btnNovo" ).prop( "disabled", false ).focus();
              } else {
                  $(this).removeClass('is-valid')
                  $( "#btnNovo" ).val('').prop( "disabled", true );
              }
          });   

    </script>

</x-layout>
