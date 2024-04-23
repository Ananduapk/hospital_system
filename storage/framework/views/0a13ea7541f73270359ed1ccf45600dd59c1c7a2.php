<?php $__env->startSection('title', 'Add Patient'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Patient</h1>
                <form action="<?php echo e(route('patient_management.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="form-group">
                        <label for="medical_history">Medical History</label>
                        <textarea class="form-control" id="medical_history" name="medical_history" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="insurance_details">Insurance Details</label>
                        <input type="text" class="form-control" id="insurance_details" name="insurance_details" required>
                    </div>
                    <!-- File upload field for profile picture -->
                    <div class="form-group">
                        <label for="profile_picture">Profile Picture (JPG/PNG only)</label>
                        <input type="file" class="form-control-file" id="profile_picture" name="profile_picture" accept="image/jpeg, image/png" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Patient</button>
                </form>
                <p class="text-muted">Note: Only JPG and PNG formats are allowed </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/sidebar/add_patient.blade.php ENDPATH**/ ?>