<?php $__env->startSection('title', 'Doctors - New Medical Center'); ?>

<?php $__env->startSection('content'); ?>

<head>
    <!-- Other head content -->
    <link href="<?php echo e(asset('css/doctors.css')); ?>" rel="stylesheet">
</head>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h1>Meet Our Exceptional Doctors</h1>
            <p class="lead">Our team of dedicated doctors at New Medical Center is committed to providing high-quality healthcare services to our patients.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="doctors-carousel">
                <?php if(isset($doctors) && count($doctors) > 0): ?>
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="doctor-item">
                        <img src="<?php echo e(asset('images/' . $doctor['image'])); ?>" alt="<?php echo e($doctor['name']); ?>">
                        <h3><?php echo e($doctor['name']); ?></h3>
                        <p>Specialization: <?php echo e($doctor['specialization']); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>No doctors available</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- CSS for carousel -->
<style>
    .doctors-carousel {
        display: flex;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none; /* Hide scrollbar */
        -ms-overflow-style: none; /* Hide scrollbar (IE and Edge) */
    }

    .doctor-item {
        flex: 0 0 auto;
        margin-right: 20px;
        transition: transform 0.5s ease; /* Add smooth transition */
    }

    .doctor-item img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }
</style>

<!-- JavaScript for carousel -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let scrollSpeed = 1; // Adjust scroll speed as needed
        let doctorsCarousel = document.querySelector('.doctors-carousel');

        function scrollCarousel() {
            doctorsCarousel.scrollLeft += scrollSpeed;
        }

        let scrollInterval = setInterval(scrollCarousel, 50); // Adjust interval for smoothness

        // Pause scrolling on mouse hover
        doctorsCarousel.addEventListener('mouseover', function() {
            clearInterval(scrollInterval);
        });

        // Resume scrolling on mouse out
        doctorsCarousel.addEventListener('mouseout', function() {
            scrollInterval = setInterval(scrollCarousel, 50);
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/HospitalSystem/hospitalsystem/resources/views/header_pages/doctors.blade.php ENDPATH**/ ?>