

<?php $__env->startSection('title'); ?>Edição de Dados<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/scrollable.css')); ?>">
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Cadastro de Motoristas</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Edição</li>
    <?php echo $__env->renderComponent(); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Motoristas</h5>
                    </div>
                    <form action="<?php echo e(route('motorista-update', ['id'=>$motoristas->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card-body">
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" class="form-control" value="<?php echo e($motoristas->nome); ?>" name="nome" id="exampleFormControlInput1" placeholder="nome" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Contacto</label>
                            <input type="text" class="form-control" value="<?php echo e($motoristas->telefone); ?>" name="telefone" id="contacto" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Número da carta de condução</label>
                            <input type="text" class="form-control" value="<?php echo e($motoristas->documento); ?>" name="documento" id="numero-documentos" required="">
                        </div></br>
                        <div class="color-box">
                            <label for="exampleFormControlInput1">Endereço</label>
                            <input type="text" class="form-control" value="<?php echo e($motoristas->endereco); ?>" name="endereco" id="exampleFormControlInput1" required="">
                        </div></br>
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <label for="exampleFormControlInput1">Nascimento</label>
                                <input type="date" class="form-control" value="<?php echo e($motoristas->nascimento); ?>" name="nascimento" id="exampleFormControlInput1" required="">
                            </div>
                            <div class="col-sm-12 col-xl-6">
                            <label for="exampleFormControlInput1" required="">Sexo</label>
                                <select class="form-select" name="sexo" size="1">
                                    <option><?php echo e($motoristas->sexo); ?></option>
                                    <option>M</option>
                                    <option>F</option>
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
            var element = document.getElementById('contacto');
            var maskOptions = {
            mask: '+{258} 00 000 0000'
            };
            var mask = IMask(element, maskOptions);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('numero-documentos');
            var maskOptions = {
            mask: '00000000/0'
            };
            var mask = IMask(element, maskOptions);
        });
    </script>

<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/drivers/edit.blade.php ENDPATH**/ ?>