<?php $__env->startSection('title', 'Hospital Registration Page'); ?>
<?php $__env->startSection('content'); ?>
<style>
    body {
        background: linear-gradient(45deg, #FF5733, #FFC300, #DAF7A6, #4CAF50);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    @keyframes  gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
</style>
<div class="container">
    <div class="mt-5">
        <?php if($errors->any()): ?>
        <div class="col-12">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger"><?php echo e($error); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <?php if(session()->has('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

    </div>


    <div class="card mt-5" style="background-color: #ffffff; border-color:#343a40;">
        <div class="card-header" style="background-color: #343a40;  color: #ffffff;">
            <h2 class="text-center">User Registration</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('register.post')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="userName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="userName" name="name" placeholder="Enter full name" required>
                </div>

                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="userEmail" name="email" placeholder="Enter email address" required>
                </div>

                <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter password" required>
                </div>

                <div class="mb-3">
                    <label for="userAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="userPassword" name="address" placeholder="Enter contact address" required>
                </div>

                <div class="mb-3">
                    <label for="userContact" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="userPassword" name="contact_number" placeholder="Enter contact number" required>
                </div>

                <div class="mb-3">
                    <label for="patientHistory" class="form-label">Medical history</label>
                    <input type="text" class="form-control" id="patientHistory" name="medical_history" placeholder="Enter medical history" required>
                </div>

                <div class="mb-3">
                    <label for="patientInsurance" class="form-label">Insurance Details</label>
                    <input type="text" class="form-control" id="patientInsurance" name="insurance_details" placeholder="Enter insurance details" required>
                </div>

                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/registration.blade.php ENDPATH**/ ?>