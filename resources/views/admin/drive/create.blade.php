@extends('layouts.admin.master')

@section('title')Cadastro de Veículos{{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/scrollable.css')}}">
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Cadastro de Veículos</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Cadastrar</li>
    @endcomponent
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>veiculos</h5>
                    </div>
                    <form action="{{ route('veiculo-store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="exampleFormControlInput1" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Placa</label>
                            <input type="text" class="form-control" name="placa" id="matricula" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Ano de Fabrico</label>
                            <input type="number" class="form-control" name="ano" id="fabrico" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Capacidade do Veículo</label>
                            <input type="number" class="form-control" name="capacidade" id="cap" required="">
                        </div></br>
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Tipo de Combustível</label>
                                <select class="form-select" name="combustivel" size="1">
                                    <option>Gasolina</option>
                                    <option>Diesel</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Estado do Veículo</label>
                                <select class="form-select" name="estado" size="1">
                                    <option>Inactivo</option>
                                    <option>Activo</option>
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
            var element = document.getElementById('fabrico');
            var maskOptions = {
            mask: '0000'
            };
            var mask = IMask(element, maskOptions);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('cap');
            var maskOptions = {
            mask: '00'
            };
            var mask = IMask(element, maskOptions);
        });
    </script>
@endpush

@endsection