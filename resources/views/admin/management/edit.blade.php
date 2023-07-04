@extends('layouts.admin.master')

@section('title')Incluir Manutenção
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Incluir Manutenção</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Corrigir</li>
	@endcomponent
	
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Manutenção</h5>
                    </div>
                    <form action="{{ route('manutencao-update', ['id'=>$manutencoes->id]) }}" method="POST">
                    @csrf
                     @method('PUT')
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <label for="exampleFormControlInput1">A Oficina</label>
                                        <select class="form-select" name="id_oficina" size="1" required="">
                                        @foreach ($oficinas as $oficina)
                                        <option>Selecione uma oficina</option>
                                            <option value="{{$oficina->id}}">{{$oficina->nome}}</option>
                                        @endforeach
                                        </select>
                                    </div></br>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlInput1">O Veiculo</label>
                                        <select class="form-select" name="id_veiculo" size="1" required="">
                                        @foreach ($veiculos as $veiculo)
                                        <option>Selecione uma placa</option>
                                            <option value="{{$veiculo->id}}">{{$veiculo->placa}}</option>
                                        @endforeach
                                        </select>
                                    </div></br>
                                    <div class="color-box">
                                        <label for="exampleFormControlInput1">Tipo de Serviço</label>
                                        <input type="text" class="form-control" name="servico" id="exampleFormControlInput1" placeholder="motivo da manutenção" required="">
                                    </div></br>
                                    <div class="color-box">
                                        <label for="exampleFormControlInput1">Comentário</label>
                                        <input type="text" class="form-control" name="comentario" id="exampleFormControlInput1" placeholder="">
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
    </div>
    
	
    @push('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
	@endpush

@endsection