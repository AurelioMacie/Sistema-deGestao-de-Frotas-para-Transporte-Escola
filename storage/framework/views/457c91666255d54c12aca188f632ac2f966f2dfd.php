

<?php $__env->startSection('title'); ?>Cadastro de Alunos<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Cadastro de Alunos</h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Cadastrar</li>
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Alunos</h5>
              </div>
              <form action="<?php echo e(route('estudante-store')); ?>" method="POST">
              <?php echo csrf_field(); ?>
                  <div class="card-body">
                    <div class="color-box">
                      <label for="exampleFormControlInput1">Nome do responsável</label>
                      <input type="text" class="form-control" name="responsavel" id="exampleFormControlInput1" required="">
                    </div></br>
                    <div class="color-box">
                      <label for="exampleFormControlInput1">Contacto do responsável</label>
                      <input type="text" class="form-control" name="cresponsavel" id="contacto" required="">
                    </div></br>
                    <div class="color-box">
                      <label for="exampleFormControlInput1">Nome do aluno</label>
                      <input type="text" class="form-control" name="aluno" id="exampleFormControlInput1" required="">
                    </div></br>
                    <div class="row">
                     <div class="col-sm-12 col-xl-6">
                        <label for="exampleFormControlInput1">Nascimento</label>
                        <input type="date" class="form-control" name="nascimento" id="exampleFormControlInput1" required="" max="<?php echo e(date('Y-m-d')); ?>" value="<?php echo e(old('nascimento')); ?>">
                    </div>
                      <div class="col-sm-12 col-xl-6">
                        <label for="exampleFormControlInput1" required="">Sexo</label>
                            <select class="form-select" name="sexo" size="1">
                                <option>M</option>
                                <option>F</option>
                            </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-xl-6">
                        <label for="exampleFormControlInput1" required="">Turno</label>
                            <select class="form-select" name="turno" size="1">
                                <option>Manhã</option>
                                <option>Tarde</option>
                            </select>
                      </div>
                      <div class="col-sm-12 col-xl-6">
                          <label for="exampleFormControlInput1">Paragem</label>
                          <input type="text" class="form-control" name="paragem" id="exampleFormControlInput1" required="">
                      </div>
                    </div>
                    <div class="color-box">
                    <label for="exampleFormControlInput1">Escola</label>
                            <select class="form-select" name="escola_id" size="1">
                            <?php $__currentLoopData = $escolas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $escola): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($escola->id); ?>"><?php echo e($escola->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                    
                    <div class="card-header pb-0">
                        <?php $__errorArgs = ['nascimento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="switchalert error">
                                <p><?php echo e($message); ?></p>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <p></p></br>
                    <div class="color-box">
                      <button class="btn btn-success-gradien" type="submit">Salvar</button>
                    </div>
                </div>
              </form>
          </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>  
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sgfte\theme\resources\views/admin/estudants/create.blade.php ENDPATH**/ ?>