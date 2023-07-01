@extends('layouts.admin.master')

@section('title')Create{{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Cadastro de Escola</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Cadastrar</li>
	@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
				        <h5 class="m-b-0">Escola</h5>
			        </div>
                    <form action="{{ route('escola-store') }}" method="POST">
                    @csrf
                        <div class="card-body">
                            <div class="color-box">
                                <label for="nome">Nome Escola</label>
                                <input type="text" class="form-control" name="nome" placeholder="nome da escola">
                            </div></br>
                            <div class="color-box">
                                <label for="localizacao">Localização</label>
                                <input type="text" class="form-control" name="localizacao" placeholder="localizacao">
                            </div><p></p></br>
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
    <script src="{{ asset('assets/js/animation/animate-custom.js') }}"></script>
	@endpush

@endsection