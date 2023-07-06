@extends('layouts.admin.master')

@section('title')Cadastro de Motoristas{{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/scrollable.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/tabela.css')}}">
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
		@endslot
		<li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Cadastrar</li>
    @endcomponent
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Motoristas</h5>
                    </div>
                    <form action="{{ route('motorista-store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="contacto" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Número da carta de condução</label>
                            <input type="text" class="form-control" name="documento" id="numero-documentos" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="exampleFormControlInput1" required="">
                        </div></br>
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Nascimento</label>
                                <input type="date" class="form-control" name="nascimento" id="exampleFormControlInput1" max="{{ date('Y-m-d') }}" value="{{ old('nascimento') }}">
                            </div>
                            <div class="col-sm-12 col-xl-6">
                            <label for="exampleFormControlInput1" required="">Sexo</label>
                                <select class="form-select" name="sexo" size="1">
                                    <option>M</option>
                                    <option>F</option>
                                </select>
                            </div><p></p></br>
                            <div class="color-box">
                                <button class="btn btn-success-gradien" type="submit">Salvar</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

@push('scripts')
    <script src="{{asset('assets/js/scrollable/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollable/scrollable-custom.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('contacto');
            var maskOptions = {
            mask: '+{258} 00 000 0000'
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