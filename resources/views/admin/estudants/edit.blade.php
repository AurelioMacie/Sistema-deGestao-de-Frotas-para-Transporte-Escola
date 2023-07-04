@extends('layouts.admin.master')

@section('title')Cadastro de Alunos{{ $title }}
@endsection

@push('css')
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
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

              <form action="{{ route('estudante-update', ['id'=>$estudantes->id]) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="color-box">
                  <label for="exampleFormControlInput1">Nome do responsável</label>
                  <input type="text" class="form-control" value="{{ $estudantes->responsavel }}" name="responsavel" id="exampleFormControlInput1" required="">
                </div></br>
                <div class="color-box">
                  <label for="exampleFormControlInput1">Contacto do responsável</label>
                  <input type="text" class="form-control" value="{{ $estudantes->cresponsavel }}" name="cresponsavel" id="contacto" required="">
                </div></br>
                <div class="color-box">
                  <label for="exampleFormControlInput1">Nome do aluno</label>
                  <input type="text" class="form-control" value="{{ $estudantes->aluno }}" name="aluno" id="exampleFormControlInput1" required="">
                </div></br>
                <div class="row">
                  <div class="col-sm-12 col-xl-6">
                    <label for="exampleFormControlInput1">Nascimento</label>
                    <input type="date" class="form-control" value="{{ $estudantes->nascimento }}" name="nascimento" id="exampleFormControlInput1" required="">
                  </div>
                  <div class="col-sm-12 col-xl-6">
                     <label for="exampleFormControlInput1">Sexo</label>
                        <select class="form-select" name="sexo" size="1">
                            <option>M</option>
                            <option>F</option>
                         </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-xl-6">
                     <label for="exampleFormControlInput1">Turno</label>
                        <select class="form-select" name="turno" size="1">
                            <option>Manhã</option>
                            <option>Tarde</option>
                         </select>
                  </div>
                  <div class="col-sm-12 col-xl-6">
                    <label for="exampleFormControlInput1">Paragem</label>
                    <input type="text" class="form-control" value="{{ $estudantes->paragem }}" name="paragem" id="exampleFormControlInput1" required="">
                  </div>
                </div>
                <div class="color-box">
                    <label for="exampleFormControlInput1">Escola</label>
                            <select class="form-select" name="escola_id" size="1">
                            @foreach ($escolas as $escola)
                            <option value="{{$escola->id}}">{{$escola->nome}}</option>
                            @endforeach
                            </select>
                    </div><p></p></br>
                <div class="color-box">
                <input class="btn btn-success" type="submit" value="Actualizar">
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>

    @push('scripts')  
        <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var element = document.getElementById('contacto');
                var maskOptions = {
                mask: '+{258} 00 000 00 00'
                };
                var mask = IMask(element, maskOptions);
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var element = document.getElementById('numero-documentos');
                var maskOptions = {
                mask: '00000000/0'
                };
                var mask = IMask(element, maskOptions);
            });
        </script>  
    @endpush
@endsection