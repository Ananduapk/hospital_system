<?php $__env->startSection('title', 'Login Page'); ?>
<?php $__env->startSection('content'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Medical Center - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
    <!-- Include any additional CSS files as needed -->
</head>

<div class="container-fluid p-0">
    <!-- Background Image -->
    <div class="background-image">
        <!-- Overlay -->
        <div class="overlay"></div>
        <div class="content-container">
            <div class="mt-5">
                <h2 class="title">Welcome to MedConnect</h2>
                <p class="subtitle">Please login to access your account</p>
                <?php if(session()->has('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                <?php endif; ?>

                <?php if(session()->has('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>
            </div>
            <form action="<?php echo e(route('login.post')); ?>" method="POST" class="ms-auto me-auto mt-4 login-form" style="max-width: 500px;">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* Custom CSS for login page */
    .background-image {
        background-image: url('<?php echo e(asset('images/bgimage.jpeg')); ?>'); /* Replace 'bgimage.jpeg' with the actual filename of your background image */
        background-size: cover;
        background-position: center;
        height: 100vh;
        position: relative;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .content-container {
        position: relative;
        z-index: 1; /* Ensure content appears above the overlay */
        padding: 50px;
        text-align: center;
    }

    .title {
        color: #fff;
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .subtitle {
        color: #fff;
        font-size: 1.5rem;
        margin-bottom: 40px;
    }

    .login-form {
        background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background for the login form */
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); /* Box shadow for a subtle effect */
        padding: 20px;
        display: inline-block;
    }

    .login-form input {
        margin-bottom: 20px;
    }

    .login-form button {
        margin-top: 20px;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/login.blade.php ENDPATH**/ ?>