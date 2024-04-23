@extends('layout')

@section('title', 'Doctors - New Medical Center')

@section('content')

<head>
    <!-- Other head content -->
    <link href="{{ asset('css/doctors.css') }}" rel="stylesheet">
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
                @if(isset($doctors) && count($doctors) > 0)
                    @foreach ($doctors as $doctor)
                    <div class="doctor-item">
                        <img src="{{ asset('images/' . $doctor['image']) }}" alt="{{ $doctor['name'] }}">
                        <h3>{{ $doctor['name'] }}</h3>
                        <p>Specialization: {{ $doctor['specialization'] }}</p>
                    </div>
                    @endforeach
                @else
                    <p>No doctors available</p>
                @endif
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

@endsection
