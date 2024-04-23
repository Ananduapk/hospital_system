<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Medical Center - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
    <!-- Include any additional CSS files as needed -->
    <style>
        /* Custom styles */
        body {
            font-family: 'Roboto', sans-serif; /* Use Roboto font */
        }

        .navbar-brand {
            font-size: 24px; /* Increase font size for the brand */
            font-weight: 500; /* Make brand font semi-bold */
        }

        .navbar-nav .nav-link {
            font-size: 18px; /* Increase font size for nav links */
        }

        /* Add your custom styles here */
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('hospital')); ?>"><i class="fas fa-heartbeat text-danger mr-2"></i>New Medical Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('hospital')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('doctors')); ?>">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('services')); ?>">Services</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid px-0">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy;
                <?php echo e(date('Y')); ?> New Medical Center. All rights reserved.
            </p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Include any additional JS files as needed -->

</body>

</html>

<?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/layouts/app.blade.php ENDPATH**/ ?>