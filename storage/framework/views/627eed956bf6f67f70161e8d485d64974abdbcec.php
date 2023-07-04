

<?php $__env->startSection('title'); ?>Create<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Cadastro de Escola</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Cadastrar</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
				        <h5 class="m-b-0">Escola</h5>
			        </div>
                    <form action="<?php echo e(route('escola-store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="color-box">
                                <label for="nome">Nome Escola</label>
                                <input type="text" class="form-control" name="nome" required="">
                            </div></br>
                            <div class="color-box">
                                <label for="localizacao">Localização</label>
                                <input type="text" class="form-control" name="localizacao" required="">
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
    

    <?php $__env->startPush('scripts'); ?> 
    <script src="<?php echo e(asset('assets/js/animation/animate-custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/schools/create.blade.php ENDPATH**/ ?>