@extends('layouts.dashboard_layout')

@section('title', 'Payment History')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Payment History</h1>
                @if ($paymentHistory->isEmpty())
                    <p>No payment history found.</p>
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount Paid</th>
                                    <th>Description</th> <!-- Added Bill ID column -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paymentHistory as $payment)
                                    <tr>
                                        <td>{{ $payment->paid_at }}</td>
                                        <td>{{ $payment->amount }}</td>
                                        <td>{{ $payment->bill->prescription }}</td> <!-- Displaying Bill ID -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
