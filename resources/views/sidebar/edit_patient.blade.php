@extends('layouts.dashboard_layout')

@section('title', 'Edit Patient')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Patient Details</h1>
                <form action="{{ route('patient_management.update', $patient->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $patient->full_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $patient->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $patient->address }}" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $patient->contact_number }}" required>
                    </div>
                    <div class="form-group">
                        <label for="medical_history">Medical History</label>
                        <textarea class="form-control" id="medical_history" name="medical_history" required>{{ $patient->medical_history }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="insurance_details">Insurance Details</label>
                        <input type="text" class="form-control" id="insurance_details" name="insurance_details" value="{{ $patient->insurance_details }}" required>
                    </div>
                    <!-- Add more input fields for other patient details -->
                    <button type="submit" class="btn btn-primary">Update Patient</button>
                </form>
            </div>
        </div>
    </div>
@endsection
