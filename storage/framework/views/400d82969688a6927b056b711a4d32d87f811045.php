<?php $__env->startSection('title', 'Patients Manager'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Patient Management</h1>

                <!-- Display success message if available -->
                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <!-- Display patients in a table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Medical History</th>
                            <th>Insurance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($patient->full_name); ?></td>
                                <td><?php echo e($patient->email); ?></td>
                                <td><?php echo e($patient->address); ?></td>
                                <td><?php echo e($patient->contact_number); ?></td>
                                <td><?php echo e($patient->medical_history); ?></td>
                                <td><?php echo e($patient->insurance_details); ?></td>
                                <td>
                                    <!-- Add edit and delete buttons here -->
                                    <a href="<?php echo e(route('patient_management.edit', ['id' => $patient->id])); ?>"  class="btn btn-primary">Edit</a>
                                    <form method="POST" action="<?php echo e(route('patient_management.destroy', $patient->id)); ?>" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this patient?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <!-- Button to add a new patient -->
                <a href="<?php echo e(route('patient_management.create')); ?>" class="btn btn-success">Add New Patient</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/sidebar/patient_manager.blade.php ENDPATH**/ ?>