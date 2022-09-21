<x-layout title="Home">
    <div class="row">
        <!-- Total de alunos-->
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$totalAlunos}}</h3>
                      <span>Alunos</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Total de professores-->
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$totalProfessores}}</h3>
                      <span>Professores</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
  </div>

</x-layout>
