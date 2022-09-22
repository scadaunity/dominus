<x-layout title="Home">
    <div class="row">
        <!-- Total de alunos-->
        <div class="col-xl-3 col-sm-6 col-12 pb-4">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$total['alunos']}}</h3>
                      <span>Alunos</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Total de professores-->
        <div class="col-xl-3 col-sm-6 col-12 pb-4">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$total['professores']}}</h3>
                      <span>Professores</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Total de Turmas-->
        <div class="col-xl-3 col-sm-6 col-12 pb-4">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$total['turmas']}}</h3>
                      <span>Turmas</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Total de Disciplinas-->
        <div class="col-xl-3 col-sm-6 col-12 pb-4">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$total['disciplinas']}}</h3>
                      <span>Disciplinas</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Total de Cursos-->
        <div class="col-xl-3 col-sm-6 col-12 pb-4">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$total['cursos']}}</h3>
                      <span>Cursos</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Total de Modulos-->
        <div class="col-xl-3 col-sm-6 col-12 pb-4">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$total['modulos']}}</h3>
                      <span>Modulos</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Total de Horarios-->
        <div class="col-xl-3 col-sm-6 col-12 pb-4">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>{{$total['horarios']}}</h3>
                      <span>Horários</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

  </div>

</x-layout>
