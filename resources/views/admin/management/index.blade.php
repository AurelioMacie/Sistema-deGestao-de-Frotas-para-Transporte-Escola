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
                    <div class="card-body">
                        <h1>TABELA</h1>
                    </div>
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