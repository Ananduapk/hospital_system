@extends('layouts.dashboard_layout')

@section('title', 'Appointments')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Book Appointments</h1>
                <!-- Appointment booking form -->
                <form method="POST" action="{{ route('appointments.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="doctor">Select Doctor:</label>
                        <select name="doctor_id" id="doctor" class="form-control">
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->user->name }} ({{ $doctor->specialization }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Select Date:</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="time">Select Time:</label>
                        <input type="time" name="time" id="time" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Book Appointment</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Your Appointments</h1>
                {{-- Display success message if available --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Display appointments in a table --}}
                @if ($appointments->count() > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Specialization</th>
                                <th>Appointment Date and Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->doctor->user->name }}</td>
                                    <td>{{ $appointment->doctor->specialization }}</td>
                                    <td>{{ $appointment->date_and_time }}</td>
                                    <td>{{ $appointment->statusid->name}}</td>
                                    <td>
                                        <form method="POST" action="{{ route('appointments.destroy', $appointment->id) }}" onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No appointments yet.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
