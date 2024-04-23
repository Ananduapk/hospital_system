@extends('layouts.dashboard_layout')

@section('title', 'Your Bills')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Bills</h1>
                @if ($bills->isEmpty())
                    <p>No bills found.</p>
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Doctor</th>
                                    <th>Prescription</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bills as $bill)
                                    <tr>
                                        <td>{{ $bill->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $bill->doctor->name }}</td>
                                        <td>{{ $bill->prescription }}</td>
                                        <td>{{ $bill->amount }}</td>
                                        <td>{{ $bill->paymentstatus->name }}</td>
                                        <td>
                                            @if ($bill->payment_status == 1)
                                                <form action="{{ route('pay_bill', $bill->id) }}" method="GET">
                                                    <button type="submit" class="btn btn-success">Pay Bill</button>
                                                </form>

                                            <form action="{{ route('update_payment_status', $bill->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="PUT">
                                                <button type="submit" class="btn btn-danger">Cancel</button>
                                            </form>

                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('payment_history') }}" class="btn btn-warning">Payment History</a>
            </div>
        </div>
    </div>
@endsection
