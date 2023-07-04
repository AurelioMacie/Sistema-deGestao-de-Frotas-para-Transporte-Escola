@extends('layouts.admin.master')

@section('title')Edição de Dados{{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/scrollable.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Cadastro de Motoristas</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Edição</li>
    @endcomponent
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Motoristas</h5>
                    </div>
                    <form action="{{ route('motorista-update', ['id'=>$motoristas->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" class="form-control" value="{{ $motoristas->nome }}" name="nome" id="exampleFormControlInput1" placeholder="nome">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Contacto</label>
                            <input type="text" class="form-control" value="{{ $motoristas->telefone }}" name="telefone" id="exampleFormControlInput1" placeholder="telefone">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Número da carta de condução</label>
                            <input type="text" class="form-control" value="{{ $motoristas->documento }}" name="documento" id="exampleFormControlInput1" placeholder="nr do documento">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Endereço</label>
                            <input type="text" class="form-control" value="{{ $motoristas->endereco }}" name="endereco" id="exampleFormControlInput1" placeholder="Endereço">
                        </div></br>
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Nascimento</label>
                                <input type="date" class="form-control" value="{{ $motoristas->nascimento }}" name="nascimento" id="exampleFormControlInput1" placeholder="nascimento">
                            </div>
                            <div class="col-sm-12 col-xl-6">
                            <label for="exampleFormControlInput1">Sexo</label>
                                <select class="form-select" name="sexo" size="1">
                                    <option>{{ $motoristas->sexo }}</option>
                                    <option>M</option>
                                    <option>F</option>
                                </select>
                            </div><p></p></br>
                            <div class="color-box">
                                <input class="btn btn-success" type="submit" value="Actualizar">
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
@endpush

@endsection