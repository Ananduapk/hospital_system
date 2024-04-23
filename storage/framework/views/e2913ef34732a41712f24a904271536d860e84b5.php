<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
</head>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>

<title>Day 002 - Credit Card Checkout</title>

<body>
    <div class="checkout-container">
        <div class="left-side">
            <div class="text-box">
                <h1 class="home-heading">MedConnect</h1>
                <hr class="left-hr" />
            </div>
        </div>

        <div class="right-side">
            <div class="receipt">
                <h2 class="receipt-heading">Summary</h2>
                <div>
                    <table class="table">
                        <thead>
                            <tr>

                                <th>Prescription</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              
                                <td><?php echo e($bill->prescription); ?></td>
                                <td><?php echo e($bill->amount); ?></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="total">
                                <td>Total</td>
                                <td></td> <!-- This column can be left empty for total amount -->
                                <td>AED <?php echo e($bill->amount); ?></td> <!-- Assuming this is the total amount -->
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div>
                <table>
                    <tr class="checkout" style="text-align: center;"> <!-- Align center -->
                        <td colspan="3"> <!-- Span across all columns -->
                            <form action="/session" method="POST">
                                <?php echo csrf_field(); ?> <!-- Add CSRF token -->
                                <input type="hidden" name="id" value="<?php echo e($bill->id); ?>"> <!-- Hidden input field for bill ID -->
                                <button type="submit" class="btn btn-primary">Checkout</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
<?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/checkout.blade.php ENDPATH**/ ?>