<?php $__env->startSection('content'); ?>
    <h1 class="text-center my-5">Vista de Jocs</h1>
    <table class="table table-dark table-bordered">
        <tr class="thead-dark">
            <th>Nom/Cognom</th>
            <th>Organització</th>
            <th>Email</th>
            <th>Telèfon</th>
            <th>País</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($game->name); ?></td>
                <td><?php echo e($game->organization); ?></td>
                <td><?php echo e($game->mail); ?></td>
                <td><?php echo e($game->phoneNumber); ?></td>
                <td><?php echo e($game->country); ?></td>
                <td>
                    <a class="btn btn-primary mr-2">Edita</a>
                    <a class="btn btn-danger mr-2">Elimina</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views//books.blade.php ENDPATH**/ ?>
