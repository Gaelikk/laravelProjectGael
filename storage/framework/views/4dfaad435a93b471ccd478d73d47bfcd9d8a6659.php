<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('titol'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-warning">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">Image</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(url('/showGame')); ?>">Inici</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=<?php echo e(url('/index')); ?>>Index</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=<?php echo e(url('/users')); ?>>Usuaris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=<?php echo e(url('/login')); ?>>Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
    <h1 class="text-center my-5">Llista d'usuaris</h1>
    <table class="table table-dark table-bordered">
        <tr class="thead-dark">
            <th>Nom/Cognom</th>
            <th>Organització</th>
            <th>Email</th>
            <th>Telèfon</th>
            <th>País</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->name); ?> <?php echo e($user->surname); ?></td>
            <td><?php echo e($user->organization); ?></td>
            <td><?php echo e($user->mail); ?></td>
            <td><?php echo e($user->phoneNumber); ?></td>
            <td><?php echo e($user->country); ?></td>
            <td>
                <a class="btn btn-primary mr-2">Edita</a>
                <a class="btn btn-danger mr-2">Elimina</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
</body>
</html>
<?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views/users.blade.php ENDPATH**/ ?>
