

<?php $__env->startSection('title'); ?>Rotas
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/range-slider.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Rotas</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Cadastrar rotas</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header pb-0">
				<h5 class="m-b-0">Rota</h5>
			  </div>
              <form action="<?php echo e(route('rota-update', ['id'=>$rotas->id])); ?>" method="POST">
              <?php echo csrf_field(); ?>
			  <?php echo method_field('PUT'); ?>
				<div class="card-body">
					<div class="color-box">
						<label for="exampleFormControlInput1">Local Partida</label>
						<input type="text" class="form-control" value="<?php echo e($rotas->partida); ?>" name="partida" id="exampleFormControlInput1">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Local Destino</label>
						<input type="text" class="form-control" value="<?php echo e($rotas->destino); ?>" name="destino" id="exampleFormControlInput1">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Descrição</label>
						<input type="text" class="form-control" value="<?php echo e($rotas->descricao); ?>" name="descricao" id="exampleFormControlInput1" required="">
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

	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/range-slider/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/range-slider/rangeslider-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/touchspin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/input-groups.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product-tab.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/rota/edit.blade.php ENDPATH**/ ?>