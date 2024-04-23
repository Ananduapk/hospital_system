<?php $__env->startSection('title', 'Appointments'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Book Appointments</h1>
                <!-- Appointment booking form -->
                <form method="POST" action="<?php echo e(route('appointments.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="doctor">Select Doctor:</label>
                        <select name="doctor_id" id="doctor" class="form-control">
                            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($doctor->id); ?>"><?php echo e($doctor->user->name); ?> (<?php echo e($doctor->specialization); ?>)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Select Date:</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="time">Select Time:</label>
                        <input type="time" name="time" id="time" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Book Appointment</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
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
                                <th>Doctor Name</th>
                                <th>Specialization</th>
                                <th>Appointment Date and Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($appointment->doctor->user->name); ?></td>
                                    <td><?php echo e($appointment->doctor->specialization); ?></td>
                                    <td><?php echo e($appointment->date_and_time); ?></td>
                                    <td><?php echo e($appointment->statusid->name); ?></td>
                                    <td>
                                        <form method="POST" action="<?php echo e(route('appointments.destroy', $appointment->id)); ?>" onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
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

<?php echo $__env->make('layouts.dashboard_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/sidebar/appointments.blade.php ENDPATH**/ ?>