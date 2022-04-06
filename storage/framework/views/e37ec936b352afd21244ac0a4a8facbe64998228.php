<?php $__env->startSection('content'); ?>
    <h1 class="text-center my-5">Panell de control de la conta</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nom i cognoms</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Contrasenya</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Direcció de correu</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telèfon</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Organització</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">País</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div><br>
                <button type="submit" class="btn btn-danger">Cancelar</button>
                <button type="submit" class="btn btn-success">Guardar canvis</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views//account.blade.php ENDPATH**/ ?>