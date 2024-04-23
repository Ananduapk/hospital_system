@extends('layout')
@section('title', 'Hospital Registration Page')
@section('content')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Medical Center - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <!-- Include any additional CSS files as needed -->
</head>

<!-- Services Section -->
<section class="page-section bg-light" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase mb-4">Our Services</h2>
                <h3 class="section-subheading text-muted">Providing quality healthcare with compassion.</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/emergencyservices.jpeg') }}" alt="Emergency Care">
                    <div class="card-body">
                        <h4 class="card-title text-center">Emergency Care</h4>
                        <p class="card-text text-muted text-center">Our dedicated team is available 24/7 to provide emergency medical care.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/speciality.jpeg') }}" alt="Specialty Clinics">
                    <div class="card-body">
                        <h4 class="card-title text-center">Specialty Clinics</h4>
                        <p class="card-text text-muted text-center">We offer specialized clinics catering to various medical needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/medicaltech.jpeg') }}" alt="Advanced Technology">
                    <div class="card-body">
                        <h4 class="card-title text-center">Advanced Technology</h4>
                        <p class="card-text text-muted text-center">Equipped with state-of-the-art technology for accurate diagnosis and treatment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->

<!-- Decorative Element -->
<div class="decorative-element"></div>
<!-- End Decorative Element -->
@endsection

@push('styles')
<style>
    .decorative-element {
        height: 200px; /* Adjust height as needed */
        background-color: #f8f9fa; /* Background color */
        margin-top: 100px; /* Adjust margin-top to control space between sections */
        margin-bottom: 100px; /* Adjust margin-bottom to control space between sections */
    }
</style>
@endpush
