

<?php $__env->startSection('title'); ?>Incluir Manutenção
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Incluir Manutenção</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Incluir</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Manutenção</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12">
                            <label for="exampleFormControlInput1">A Oficina</label>
                                <select class="form-select" name="oficina" size="1">
                                    <option>colocar a lista dos nomes das oficinas cadastradas</option>
                                </select>
                            </div></br>
                            <div class="col-sm-12">
                                <label for="exampleFormControlInput1">O Veiculo</label>
                                <select class="form-select" name="veiculo" size="1">
                                    <option>colocar a lista de placas dos veiculos cadastrados</option>
                                </select>
                            </div></br>
                            <div class="color-box">
                                <label for="exampleFormControlInput1">Tipo de Serviço</label>
                                <input type="text" class="form-control" name="servico" id="exampleFormControlInput1" placeholder="motivo da manutenção">
                            </div></br>
                            <div class="color-box">
                                <label for="exampleFormControlInput1">Comentário</label>
                                <input type="text" class="form-control" name="comentario" id="exampleFormControlInput1" placeholder="pode colocar aqui algum comentário relacionado ao motivo que levou o carro a manutenção">
                            </div><p></p></br>
                            <div class="color-box">
                                 <button class="btn btn-success-gradien" type="submit">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
	
    <?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/management/create.blade.php ENDPATH**/ ?>