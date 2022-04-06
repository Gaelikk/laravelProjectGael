<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center my-5">Vista de Jocs</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>Nom</th>
                <th>Organització</th>
                <th>Email</th>
                <th>Telèfon</th>
                <th>País</th>
                <th><a class="btn btn-success" href=<?php echo e(url('/games/newGame')); ?>>Crear Joc</a></th>
            </tr>
            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($game->name); ?></td>
                    <td>
                        <a class="btn btn-primary mr-2" href="/games/<?php echo e($game->id); ?>">Edita</a>
                        <a class="btn btn-danger mr-2" href="/games/<?php echo e($game->id); ?>">Elimina</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/games/games.blade.php ENDPATH**/ ?>