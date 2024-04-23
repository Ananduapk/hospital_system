<?php $__env->startSection('title', 'Add Bill'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Bill</h1>
                <form action="<?php echo e(route('bills_store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="patient_name">Patient Name</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" value="<?php echo e($patient->name); ?>" readonly>
                        <input type="hidden" name="patient_id" value="<?php echo e($patient->id); ?>">
                    </div>
                    <div class="form-group">
                        <label for="prescription">Prescription</label>
                        <textarea class="form-control" id="prescription" name="prescription" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" required>
                    </div>
                    <!-- Hidden input field for appointment ID -->
                    <input type="hidden" name="appointment_id" value="<?php echo e($appointment->id); ?>">
                    <button type="submit" class="btn btn-primary">Add Bill</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/sidebar/add_patient_bill.blade.php ENDPATH**/ ?>