

<?php $__env->startSection('title'); ?>Edição de Dados
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Cadastro de Oficinas</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Edição</li>
	<?php echo $__env->renderComponent(); ?>

	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header pb-0">
				<h5 class="m-b-0">Oficina</h5>
			  </div>
			  <form action="<?php echo e(route('oficina-update', ['id'=>$oficinas->id])); ?>" method="POST">
              <?php echo csrf_field(); ?>
			  <?php echo method_field('PUT'); ?>
				<div class="card-body">
					<div class="color-box">
						<label for="exampleFormControlInput1">Nome</label>
						<input type="text" class="form-control" value="<?php echo e($oficinas->nome); ?>" name="nome" id="exampleFormControlInput1" required="">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Telefone</label>
						<input type="text" class="form-control" value="<?php echo e($oficinas->telefone); ?>" name="telefone" id="contacto" required="">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Endereço</label>
						<input type="text" class="form-control" value="<?php echo e($oficinas->endereco); ?>" name="endereco" id="exampleFormControlInput1" required="">
					</div></br>
					<div class="color-box">
						<label for="exampleFormControlInput1">Ramo de especialização</label>
						<input type="text" class="form-control" value="<?php echo e($oficinas->especializacao); ?>" name="especializacao" id="exampleFormControlInput1" required="">
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
	<script src="<?php echo e(asset('assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/icons/icons-notify.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/icons/flag-icon-clipart.js')); ?>"></script>
	<script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('contacto');
            var maskOptions = {
            mask: '+{258} 00 000 0000'
            };
            var mask = IMask(element, maskOptions);
        });
    </script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/officine/edit.blade.php ENDPATH**/ ?>