<?php $__env->startSection('content'); ?>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6 bg-light border rounded">
            <div class="row p-2">
                <h2 class="text-center my-2">Nou Usuari</h2>
                <form class="w-100">
                    <div class="form-group">
                        <label>Nom</label>
                        <input class="form-control" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <label>Contrasenya</label>
                        <input class="form-control" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <label>Repeteix la contrasenya</label>
                        <input class="form-control" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <span><a class="btn btn-danger" href=<?php echo e(url('/users')); ?> type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views/users/newUser.blade.php ENDPATH**/ ?>