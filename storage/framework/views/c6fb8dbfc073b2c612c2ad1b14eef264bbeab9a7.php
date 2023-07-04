

<?php $__env->startSection('title'); ?>Edição de Dados<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/scrollable.css')); ?>">
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Edição de Dados</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Edição</li>
    <?php echo $__env->renderComponent(); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>veiculos</h5>
                    </div>
                    <form action="<?php echo e(route('veiculo-update', ['id'=>$veiculos->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card-body">
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Modelo</label>
                            <input type="text" class="form-control" name="modelo" value="<?php echo e($veiculos->modelo); ?>" id="exampleFormControlInput1" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Placa</label>
                            <input type="text" class="form-control" name="placa" value="<?php echo e($veiculos->placa); ?>" id="matricula" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Ano de Fabrico</label>
                            <input type="number" class="form-control" name="ano" value="<?php echo e($veiculos->ano); ?>" id="fabrico" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Capacidade do Veículo</label>
                            <input type="number" class="form-control" name="capacidade" value="<?php echo e($veiculos->capacidade); ?>" id="cap" required="">
                        </div></br>
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Tipo de Combustível</label>
                                <select class="form-select" name="combustivel" size="1">
                                    <option><?php echo e($veiculos->combustivel); ?></option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Estado do Veículo</label>
                                <select class="form-select" name="estado" size="1">
                                    <option><?php echo e($veiculos->estado); ?></option>
                                </select>
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
    

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/scrollable/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scrollable/scrollable-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('fabrico');
            var maskOptions = {
            mask: '0000'
            };
            var mask = IMask(element, maskOptions);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('cap');
            var maskOptions = {
            mask: '00'
            };
            var mask = IMask(element, maskOptions);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/drive/edit.blade.php ENDPATH**/ ?>