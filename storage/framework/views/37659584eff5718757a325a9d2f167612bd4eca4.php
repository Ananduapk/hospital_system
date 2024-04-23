<?php $__env->startSection('title', 'Your Appointments'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Appointments</h1>
                
                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                
                <?php if($appointments->count() > 0): ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Status</th>
                                <th>Appointment Date and Time</th>
                                <th>Action</th>
                                <th>Bills</th> <!-- New column for the Create Bill button -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($appointment->createdBy->name); ?></td>
                                    <td><?php echo e($appointment->statusid->name); ?></td>
                                    <td><?php echo e($appointment->date_and_time); ?></td>

                                    <td>
                                        <form method="POST" action="<?php echo e(route('appointments.destroy', $appointment->id)); ?>"
                                            onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>

                                        <div class="btn-group" role="group">
                                            <!-- Approve button -->
                                            <?php if($appointment->statusid->id != 4): ?>
                                                <?php if($appointment->statusid->id != 2): ?>
                                                    <form method="POST" action="<?php echo e(route('appointments.approve', $appointment->id)); ?>" class="mr-1">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                                    </form>
                                                <?php endif; ?>

                                                <!-- Unavailable button -->
                                                <?php if($appointment->statusid->id != 3): ?>
                                                    <form method="POST" action="<?php echo e(route('appointments.unavailable', $appointment->id)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <button type="submit" class="btn btn-warning btn-sm">Unavailable</button>
                                                    </form>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    <!-- Display appropriate action based on status -->
                                    <td>
                                        <?php if($appointment->statusid->id == 2): ?>
                                            <a href="<?php echo e(route('create_bill', ['appointment_id' => $appointment->id, 'patient_id' => $appointment->createdBy->id])); ?>"
                                                class="btn btn-success btn-sm">Bill</a>
                                        <?php elseif($appointment->statusid->id == 4): ?>
                                            Patient Billed
                                        <?php else: ?>
                                            Booking not approved
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>No appointments yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/sidebar/doctor_appointments.blade.php ENDPATH**/ ?>