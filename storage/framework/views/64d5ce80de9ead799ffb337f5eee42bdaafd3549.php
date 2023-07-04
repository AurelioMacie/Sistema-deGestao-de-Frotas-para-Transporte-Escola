

<?php $__env->startSection('title'); ?>Correção de dados
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Corrigir Dados</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Corrigir</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Manutenção</h5>
                    </div>
                    <form action="<?php echo e(route('manutencao-update', ['id'=>$manutencoes->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                     <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <label for="exampleFormControlInput1">A Oficina</label>
                                        <select class="form-select" name="id_oficina" size="1" required="">
                                        <?php $__currentLoopData = $oficinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oficina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($oficina->id); ?>"><?php echo e($oficina->nome); ?> : <?php echo e($oficina->especializacao); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div></br>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlInput1">O Veiculo</label>
                                        <select class="form-select" name="id_veiculo" size="1" required="">
                                        <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($veiculo->id); ?>"><?php echo e($veiculo->placa); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div></br>
                                    <div class="color-box">
                                        <label for="exampleFormControlInput1">Tipo de Serviço</label>
                                        <input type="text" class="form-control" name="servico" value="<?php echo e($manutencoes->servico); ?>" id="exampleFormControlInput1" placeholder="motivo da manutenção" required="">
                                    </div></br>
                                    <div class="color-box">
                                        <label for="exampleFormControlInput1">Comentário</label>
                                        <input type="text" class="form-control" name="comentario" value="<?php echo e($manutencoes->comentario); ?>" id="exampleFormControlInput1" placeholder="">
                                    </div><p></p></br>
                                    <div class="color-box">
                                    <input class="btn btn-success" type="submit" value="Actualizar">
                                    </div>
                                </div>
                            </div>
                    </form>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/management/edit.blade.php ENDPATH**/ ?>

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
		<li class="breadcrumb-item active">Corrigir</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Manutenção</h5>
                    </div>
                    <form action="<?php echo e(route('manutencao-update', ['id'=>$manutencoes->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                     <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <label for="exampleFormControlInput1">A Oficina</label>
                                        <select class="form-select" name="id_oficina" size="1" required="">
                                        <?php $__currentLoopData = $oficinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oficina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option>Selecione uma oficina</option>
                                            <option value="<?php echo e($oficina->id); ?>"><?php echo e($oficina->nome); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div></br>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlInput1">O Veiculo</label>
                                        <select class="form-select" name="id_veiculo" size="1" required="">
                                        <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option>Selecione uma placa</option>
                                            <option value="<?php echo e($veiculo->id); ?>"><?php echo e($veiculo->placa); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div></br>
                                    <div class="color-box">
                                        <label for="exampleFormControlInput1">Tipo de Serviço</label>
                                        <input type="text" class="form-control" name="servico" id="exampleFormControlInput1" placeholder="motivo da manutenção" required="">
                                    </div></br>
                                    <div class="color-box">
                                        <label for="exampleFormControlInput1">Comentário</label>
                                        <input type="text" class="form-control" name="comentario" id="exampleFormControlInput1" placeholder="">
                                    </div><p></p></br>
                                    <div class="color-box">
                                    <input class="btn btn-success" type="submit" value="Actualizar">
                                    </div>
                                </div>
                            </div>
                    </form>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/management/edit.blade.php ENDPATH**/ ?>