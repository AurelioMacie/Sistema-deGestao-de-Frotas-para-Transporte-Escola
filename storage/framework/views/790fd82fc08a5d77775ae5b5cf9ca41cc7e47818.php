

<?php $__env->startSection('title'); ?>Cadastro de Oficinas
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Cadastro de Oficinas</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Cadastrar</li>
	<?php echo $__env->renderComponent(); ?>

	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header pb-0">
				<h5 class="m-b-0">Oficina</h5>
			  </div>
			  <form action="<?php echo e(route('oficina-store')); ?>" method="POST">
              <?php echo csrf_field(); ?>
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

	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/icons/icons-notify.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/icons/flag-icon-clipart.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/officine/create.blade.php ENDPATH**/ ?>