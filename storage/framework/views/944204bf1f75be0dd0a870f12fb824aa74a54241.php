<?php $__env->startSection('titol'); ?>
    Nou Joc
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6 bg-light border rounded">
            <div class="row p-2">
                <h2 class="text-center my-2">Nou Joc</h2>
                <form class="w-100" action="<?php echo e(url("/games/newGame")); ?>">
                    <div class="form-group">
                        <label>Nom</label>
                        <input class="form-control" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <label>Organització</label>
                        <input class="form-control" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <input type="hidden">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <span><a class="btn btn-danger" href=<?php echo e(url('/games/games')); ?> type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/games/newGame.blade.php ENDPATH**/ ?>