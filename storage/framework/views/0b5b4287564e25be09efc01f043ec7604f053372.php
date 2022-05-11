<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center my-5">Llista d'habitacions</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>Nom</th>
                <th>Organització</th>
                <th>Email</th>
                <th>Telèfon</th>
                <th>País</th>
                <th><a class="btn btn-success float-lg-end" href=<?php echo e(url('rooms/newRoom')); ?>>Crear Habitació</a></th>
            </tr>
            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($room->name); ?></td>
                    <td>
                        <a class="btn btn-primary mr-2" href="/games/<?php echo e($room->id); ?>">Edita</a>
                        <a class="btn btn-danger mr-2" href="/games/<?php echo e($room->id); ?>">Elimina</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views/rooms/rooms.blade.php ENDPATH**/ ?>