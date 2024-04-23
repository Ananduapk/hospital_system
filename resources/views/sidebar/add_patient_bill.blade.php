@extends('layouts.dashboard_layout')

@section('title', 'Add Bill')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Bill</h1>
                <form action="{{ route('bills_store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="patient_name">Patient Name</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" value="{{ $patient->name }}" readonly>
                        <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                    </div>
                    <div class="form-group">
                        <label for="prescription">Prescription</label>
                        <textarea class="form-control" id="prescription" name="prescription" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" required>
                    </div>
                    <!-- Hidden input field for appointment ID -->
                    <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
                    <button type="submit" class="btn btn-primary">Add Bill</button>
                </form>
            </div>
        </div>
    </div>
@endsection
