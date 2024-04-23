<?php $__env->startSection('title', 'New Medical Centre'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center">Welcome to New Medical Centre</h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="<?php echo e(asset('images/nmclogo.png')); ?>" alt="New Medical Centre Logo" style="max-width: 200px;">
                    </div>
                    <p>New Medical Centre is dedicated to providing high-quality healthcare services to our community. Our team of experienced professionals is here to serve you.</p>
                    <p>For existing users, please proceed to login to access your account. New users can register to create an account and schedule appointments.</p>
                    <div class="text-center">
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary btn-lg mx-2">Login</a>
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-success btn-lg mx-2">Register</a>
                        <a href="<?php echo e(route('register.doctor')); ?>" class="btn btn-success btn-lg mx-2">Doctor Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/hospital.blade.php ENDPATH**/ ?>