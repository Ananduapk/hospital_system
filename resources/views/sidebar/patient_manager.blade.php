@extends('layouts.dashboard_layout')

@section('title', 'Patients Manager')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Patient Management</h1>

                <!-- Display success message if available -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Display patients in a table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Medical History</th>
                            <th>Insurance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $patient->full_name }}</td>
                                <td>{{ $patient->email }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->contact_number }}</td>
                                <td>{{ $patient->medical_history }}</td>
                                <td>{{ $patient->insurance_details }}</td>
                                <td>
                                    <!-- Add edit and delete buttons here -->
                                    <a href="{{ route('patient_management.edit', ['id' => $patient->id]) }}"  class="btn btn-primary">Edit</a>
                                    <form method="POST" action="{{ route('patient_management.destroy', $patient->id) }}" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this patient?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Button to add a new patient -->
                <a href="{{ route('patient_management.create') }}" class="btn btn-success">Add New Patient</a>
            </div>
        </div>
    </div>
@endsection
