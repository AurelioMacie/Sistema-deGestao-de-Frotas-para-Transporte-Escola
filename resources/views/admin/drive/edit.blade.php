@extends('layouts.admin.master')

@section('title')Edição de Dados{{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/scrollable.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Edição de Dados</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Edição</li>
    @endcomponent
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>veiculos</h5>
                    </div>
                    <form action="{{ route('veiculo-update', ['id'=>$veiculos->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Modelo</label>
                            <input type="text" class="form-control" name="modelo" value="{{ $veiculos->modelo }}" id="exampleFormControlInput1" placeholder="modelo">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Placa</label>
                            <input type="text" class="form-control" name="placa" value="{{ $veiculos->placa }}" id="exampleFormControlInput1" placeholder="placa">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Ano de Fabrico</label>
                            <input type="number" class="form-control" name="ano" value="{{ $veiculos->ano }}" id="exampleFormControlInput1" placeholder="fabrico">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Capacidade do Veículo</label>
                            <input type="number" class="form-control" name="capacidade" value="{{ $veiculos->capacidade }}" id="exampleFormControlInput1" placeholder="Capacidade">
                        </div></br>
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Tipo de Combustível</label>
                                <select class="form-select" name="combustivel" size="1">
                                    <option>{{ $veiculos->combustivel }}</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Estado do Veículo</label>
                                <select class="form-select" name="estado" size="1">
                                    <option>{{ $veiculos->estado }}</option>
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