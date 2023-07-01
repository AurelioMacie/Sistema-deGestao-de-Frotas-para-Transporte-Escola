@extends('layouts.admin.master')

@section('title')Cadastro de Oficinas
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Cadastro de Oficinas</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Cadastrar</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header pb-0">
				<h5 class="m-b-0">Oficina</h5>
			  </div>
			  <form action="{{ route('oficina-store') }}" method="POST">
              @csrf
				<div class="card-body">
					<div class="color-box">
						<label for="exampleFormControlInput1">Nome</label>
						<input type="text" class="form-control" name="nome" id="exampleFormControlInput1" placeholder="nome">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Telefone</label>
						<input type="text" class="form-control" name="telefone" id="exampleFormControlInput1" placeholder="telefone">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Endereço</label>
						<input type="text" class="form-control" name="endereco" id="exampleFormControlInput1" placeholder="endereço">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Ramo de especialização</label>
						<input type="text" class="form-control" name="especializacao" id="exampleFormControlInput1" placeholder="especialização">
					</div></p></br>
					<div class="color-box">
						<button class="btn btn-success-gradien" type="submit">Salvar</button>
					</div>	
			  	</div>
				</form>
			 </div>
		  </div>
		</div>
	  </div>

	@push('scripts')
	<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
    <script src="{{ asset('assets/js/icons/flag-icon-clipart.js') }}"></script>
	@endpush

@endsection