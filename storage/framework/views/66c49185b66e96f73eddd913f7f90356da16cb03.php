<?php $__env->startSection('content'); ?>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-5 bg-light border rounded">
            <div class="row p-3">
                <h2 class="text-center my-2">Nova Reserva</h2>
                <form class="w-100" method="post" action="<?php echo e(url("/books/newBook")); ?>">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <label for="organization">Organització</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="email">Correu electrònic</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Número tlf</label>
                        <input class="form-control" type="text">
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <span><a class="btn btn-danger" href=<?php echo e(url('/games')); ?> type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views/books/newBook.blade.php ENDPATH**/ ?>