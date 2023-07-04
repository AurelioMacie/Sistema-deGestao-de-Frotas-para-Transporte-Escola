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
		<li class="breadcrumb-item active">Incluir</li>
	@endcomponent
	
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Manutenção</h5>
                    </div>
                    <form action="{{ route('manutencao-store') }}" method="POST">
                    @csrf
                        <div class="card-body">
                            <div class="col-sm-12">
                                <label for="exampleFormControlInput1">A Oficina</label>
                                    <select class="form-select" name="id_oficina" size="1" required="">
                                    @foreach ($oficinas as $oficina)
                                        <option value="{{$oficina->id}}">{{$oficina->nome}} : {{$oficina->especializacao}}</option>
                                    @endforeach
                                    </select>
                                </div></br>
                                <div class="col-sm-12">
                                    <label for="exampleFormControlInput1">O Veiculo</label>
                                    <select class="form-select" name="id_veiculo" size="1">
                                    @foreach ($veiculos as $veiculo)
                                        <option value="{{$veiculo->id}}">{{$veiculo->placa}}</option>
                                    @endforeach
                                    </select>
                                </div></br>
                                <div class="color-box">
                                    <label for="exampleFormControlInput1">Tipo de Serviço</label>
                                    <input type="text" class="form-control" name="servico" id="exampleFormControlInput1" required="">
                                </div></br>
                                <div class="color-box">
                                    <label for="exampleFormControlInput1">Comentário</label>
                                    <input type="text" class="form-control" name="comentario" id="exampleFormControlInput1" required="">
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
    </div>
    
	
    @push('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
	@endpush

@endsection