@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome admin!') }}
                </div>
            </div>
            <div>
                <table border="1">
                    <thead>
                    <tr>
                        <th>Order</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Called</th>
                        <th>Comment</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($leads as $lead)
                    <tr>
                        <td>{{ $lead['id'] }}</td>
                        <td>{{ $lead['name'] }}</td>
                        <td>{{ $lead['phone_number'] }}</td>
                        <td>{{ ($lead['called_success'] == 1) ? "YES" : "NO" }}</td>
                        <td>{{ isset($lead['description']) ? $lead['description'] : "" }}</td>
                        <td><a href="{{ URL::to('update-data/'.$lead['id']) }}">Edit</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
