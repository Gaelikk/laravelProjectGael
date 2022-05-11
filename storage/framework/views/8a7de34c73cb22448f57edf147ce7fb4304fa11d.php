<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center my-5">Vista de Reserves</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>ID Reserva</th>
                <th>Nom Usuari</th>
                <th>Número tlf.</th>
                <th>Habitació</th>
                <th>Opcions</th>
                <th><a class="btn btn-success float-lg-end" href=<?php echo e(url('/books/newBook')); ?>>Crear Reserva</a></th>
            </tr>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($book->id); ?></th>
                    <td><?php echo e($book->name); ?></td>
                    <td><?php echo e($book->email); ?></td>
                    <td><?php echo e($book->phoneNumber); ?></td>
                    <td><?php echo e($book->country); ?></td>
                    <td><?php echo e($book->username); ?></td>
                    <td><?php echo e($book->room); ?></td>
                    <td><a class="btn btn-primary" href="/books/edit/<?php echo e($book->id); ?>">Editar</a></td>
                    <td><a class="btn btn-danger" href="/books/delete/<?php echo e($book->id); ?>">Borrar</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views/books/books.blade.php ENDPATH**/ ?>