<?php $__env->startSection('content'); ?>
    <h1 class="text-center my-5">Benvingut als Jocs d'escapeRoom</h1>
    <div class="row row-cols-1 row-cols-md-12 g-4">
        <div class="col">
            <div class="card">
                <img alt="" class="card-img-top" src="../img/escape-room.jpeg">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <a href="<?php echo e(url('/books')); ?>" class="btn btn-primary">Reserva</a>
                    <a href="#" class="btn btn-primary">Link</a>
                    <a href="#" class="btn btn-primary">Link</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Reserva</a>
                    <a href="#" class="btn btn-primary">Link</a>
                    <a href="#" class="btn btn-primary">Link</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Reserva</a>
                    <a href="#" class="btn btn-primary">Link</a>
                    <a href="#" class="btn btn-primary">Link</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views//welcome.blade.php ENDPATH**/ ?>
