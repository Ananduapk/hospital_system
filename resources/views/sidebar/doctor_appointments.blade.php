@extends('layouts.dashboard_layout')

@section('title', 'Your Appointments')

@section('content')
    <div class="container">
        <div class="row">
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
                                <th>Patient Name</th>
                                <th>Status</th>
                                <th>Appointment Date and Time</th>
                                <th>Action</th>
                                <th>Bills</th> <!-- New column for the Create Bill button -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->createdBy->name }}</td>
                                    <td>{{ $appointment->statusid->name }}</td>
                                    <td>{{ $appointment->date_and_time }}</td>

                                    <td>
                                        <form method="POST" action="{{ route('appointments.destroy', $appointment->id) }}"
                                            onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>

                                        <div class="btn-group" role="group">
                                            <!-- Approve button -->
                                            @if ($appointment->statusid->id != 4)
                                                @if ($appointment->statusid->id != 2)
                                                    <form method="POST" action="{{ route('appointments.approve', $appointment->id) }}" class="mr-1">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                                    </form>
                                                @endif

                                                <!-- Unavailable button -->
                                                @if ($appointment->statusid->id != 3)
                                                    <form method="POST" action="{{ route('appointments.unavailable', $appointment->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-warning btn-sm">Unavailable</button>
                                                    </form>
                                                @endif
                                            @endif
                                        </div>
                                    </td>

                                    <!-- Display appropriate action based on status -->
                                    <td>
                                        @if ($appointment->statusid->id == 2)
                                            <a href="{{ route('create_bill', ['appointment_id' => $appointment->id, 'patient_id' => $appointment->createdBy->id]) }}"
                                                class="btn btn-success btn-sm">Bill</a>
                                        @elseif ($appointment->statusid->id == 4)
                                            Patient Billed
                                        @else
                                            Booking not approved
                                        @endif
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
