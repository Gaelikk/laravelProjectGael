<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center my-5">Llista de jocs</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>ID</th>
                <th>Nom</th>
                <th>Organització</th>
                <th>Opcions<a class="btn btn-success float-lg-end" href="/games/create">Crear Joc</a></th>
            </tr>
            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($game->id); ?></td>
                    <td><?php echo e($game->name); ?></td>
                    <td><?php echo e($game->organization); ?></td>
                    <td>
                        <a class="btn btn-primary mr-2" href="/games/edit/<?php echo e($game->id); ?>">Edita</a>
                        <a class="btn btn-danger mr-2" href="/games/delete/<?php echo e($game->id); ?>">Elimina</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views/games/gameList.blade.php ENDPATH**/ ?>