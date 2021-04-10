<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">












































                                        <form action="<?php echo e(route('posts.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Enter title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="details" class="col-md-4 control-label">Enter number</label>

                            <div class="col-md-6">
                                <input id="details" type="text" class="form-control" name="details" value="<?php echo e(old('details')); ?>" autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
                            </div>
                        </div>
                        <div class="notification">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pusher\resources\views/home.blade.php ENDPATH**/ ?>