@extends('layouts.admin.master')

@section('title')Cadastro de Alunos{{ $title }}
@endsection

@push('css')
@endpush
@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Cadastro de Alunos</h3>
        @endslot
        <li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Cadastrar</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Alunos</h5>
              </div>
              <div class="card-body">
                <div class="color-box">
                  <label for="exampleFormControlInput1">Nome do responsável</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome do responsável">
                </div></br>
                <div class="color-box">
                  <label for="exampleFormControlInput1">Contacto do responsável</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="contacto do responsável">
                </div></br>
                <div class="color-box">
                  <label for="exampleFormControlInput1">Nome do aluno</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome do aluno">
                </div></br>
                <div class="row">
                  <div class="col-sm-12 col-xl-6">
                      <label for="exampleFormControlInput1">Nascimento</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nascimento">
                  </div>
                  <div class="col-sm-12 col-xl-6">
                      <label for="exampleFormControlInput1">Sexo</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="sexo">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-xl-6">
                      <label for="exampleFormControlInput1">Turno</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="turno">
                  </div>
                  <div class="col-sm-12 col-xl-6">
                      <label for="exampleFormControlInput1">Nível</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nivel">
                  </div>
                </div>
                <div class="color-box">
                  <label for="exampleFormControlInput1">Morada</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="morada">
                </div></br>
                <div class="color-box">
                  <label for="exampleFormControlInput1">Escola</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="escola">
                </div><p></p></br>
                <div class="color-box">
                  <button class="btn btn-success-gradien" type="button">Salvar</button>
                </div>
            </div>
<!-- <p>
            <div class="card">
              <div class="card-header pb-0">
                <h5>Color</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">Primary</h6>
                    <div class="primary-color">
                      <ul class="m-b-30">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">secondary</h6>
                    <div class="secondary-color">
                      <ul class="m-b-30">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">Success</h6>
                    <div class="success-color">
                      <ul class="m-b-30">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">Info</h6>
                    <div class="info-color">
                      <ul class="m-b-30">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">Warning</h6>
                    <div class="yellow-color">
                      <ul>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 xs-mt">
                    <h6 class="sub-title text-uppercase">Danger</h6>
                    <div class="red-color">
                      <ul>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 nav-md-mt">
                    <h6 class="sub-title text-uppercase">Pink</h6>
                    <div class="pink-color">
                      <ul>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 nav-md-mt">
                    <h6 class="sub-title text-uppercase">Grey</h6>
                    <div class="gray-color">
                      <ul>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</p> -->
          </div>
        </div>
    </div>

    @push('scripts')  
        <script src="{{asset('assets/js/tooltip-init.js')}}"></script>  
    @endpush
@endsection