<?php $__env->startSection('title', 'Payment History'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Payment History</h1>
                <?php if($paymentHistory->isEmpty()): ?>
                    <p>No payment history found.</p>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount Paid</th>
                                    <th>Description</th> <!-- Added Bill ID column -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $paymentHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($payment->paid_at); ?></td>
                                        <td><?php echo e($payment->amount); ?></td>
                                        <td><?php echo e($payment->bill->prescription); ?></td> <!-- Displaying Bill ID -->
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/sidebar/payment_history.blade.php ENDPATH**/ ?>