<?php $__env->startSection('title', 'Your Bills'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Bills</h1>
                <?php if($bills->isEmpty()): ?>
                    <p>No bills found.</p>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Doctor</th>
                                    <th>Prescription</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($bill->created_at->format('Y-m-d')); ?></td>
                                        <td><?php echo e($bill->doctor->name); ?></td>
                                        <td><?php echo e($bill->prescription); ?></td>
                                        <td><?php echo e($bill->amount); ?></td>
                                        <td><?php echo e($bill->paymentstatus->name); ?></td>
                                        <td>
                                            <?php if($bill->payment_status == 1): ?>
                                                <form action="<?php echo e(route('pay_bill', $bill->id)); ?>" method="GET">
                                                    <button type="submit" class="btn btn-success">Pay Bill</button>
                                                </form>

                                            <form action="<?php echo e(route('update_payment_status', $bill->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="_method" value="PUT">
                                                <button type="submit" class="btn btn-danger">Cancel</button>
                                            </form>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo e(route('payment_history')); ?>" class="btn btn-warning">Payment History</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/sidebar/patient_bill.blade.php ENDPATH**/ ?>