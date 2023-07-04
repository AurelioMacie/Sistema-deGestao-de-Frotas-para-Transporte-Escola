@extends('layouts.admin.master')

@section('title')Edição de Dados
 {{ $title }}
@endsection

@push('css')
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Cadastro de Oficinas</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Edição</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header pb-0">
				<h5 class="m-b-0">Oficina</h5>
			  </div>
			  <form action="{{ route('oficina-update', ['id'=>$oficinas->id]) }}" method="POST">
              @csrf
			  @method('PUT')
				<div class="card-body">
					<div class="color-box">
						<label for="exampleFormControlInput1">Nome</label>
						<input type="text" class="form-control" value="{{ $oficinas->nome }}" name="nome" id="exampleFormControlInput1" required="">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Telefone</label>
						<input type="text" class="form-control" value="{{ $oficinas->telefone }}" name="telefone" id="contacto" required="">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Endereço</label>
						<input type="text" class="form-control" value="{{ $oficinas->endereco }}" name="endereco" id="exampleFormControlInput1" required="">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Ramo de especialização</label>
						<input type="text" class="form-control" value="{{ $oficinas->especializacao }}" name="especializacao" id="exampleFormControlInput1" required="">
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
	<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
    <script src="{{ asset('assets/js/icons/flag-icon-clipart.js') }}"></script>
	<script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('contacto');
            var maskOptions = {
            mask: '+{258} 00 000 0000'
            };
            var mask = IMask(element, maskOptions);
        });
    </script>
	@endpush

@endsection