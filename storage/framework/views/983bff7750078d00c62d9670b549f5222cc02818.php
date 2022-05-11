<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-5 bg-light border rounded">
            <div class="row p-3">
                <h2 class="text-center my-2">Nou Joc</h2>
                <form method="post" action="<?php echo e(url("/games/createNew")); ?>">
                    <?php echo csrf_field(); ?>
                    <h5>Nom</h5>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nom"><br>
                    <h5>Organització</h5>
                    <input class="form-control" type="text" id="organization" name="organization"
                           placeholder="Organització"><br>
                    <h5>Posa la url de la imatge</h5>
                    <input class="form-control" type="text" id="image" name="image"
                           value="https://static2.abc.es/media/espana/2019/04/19/escape-room-kNzB--620x349@abc.jpg"><br>
                    <span><input class="btn btn-primary" type="submit" value="Guardar"></span>
                    <span><a class="btn btn-danger" href=<?php echo e(url('/gameList')); ?> type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views/games/newGame.blade.php ENDPATH**/ ?>