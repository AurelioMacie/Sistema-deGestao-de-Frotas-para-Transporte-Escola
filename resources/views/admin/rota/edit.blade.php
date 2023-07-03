@extends('layouts.admin.master')

@section('title')Rotas
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/range-slider.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Rotas</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Cadastrar rotas</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header pb-0">
				<h5 class="m-b-0">Rota</h5>
			  </div>
              <form action="{{ route('rota-update', ['id'=>$rotas->id]) }}" method="POST">
              @csrf
			  @method('PUT')
				<div class="card-body">
					<div class="color-box">
						<label for="exampleFormControlInput1">Local Partida</label>
						<input type="text" class="form-control" value="{{ $rotas->partida }}" name="partida" id="exampleFormControlInput1">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Local Destino</label>
						<input type="text" class="form-control" value="{{ $rotas->destino }}" name="destino" id="exampleFormControlInput1">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Descrição</label>
						<input type="text" class="form-control" value="{{ $rotas->descricao }}" name="descricao" id="exampleFormControlInput1" required="">
					</div></p></br>
					<div class="color-box">
					<input class="btn btn-success" type="submit" value="Actualizar">
					</div>	
			  	</div>
				</form>
			 </div>
		  </div>
		</div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/range-slider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/range-slider/rangeslider-script.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/vendors.min.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/touchspin.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/input-groups.min.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <script src="{{asset('assets/js/product-tab.js')}}"></script>
	@endpush

@endsection