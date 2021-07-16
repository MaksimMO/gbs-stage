{{--{{ dd($calendarData) }}--}}
@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Calendar
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Time</th>
                            @foreach($calendarData as $day)
                                <th>{{ $day['day'] }} <br> {{ $day['date'] }}</th>
                            @endforeach
                        </thead>
                        <tbody>
                            @for($time = $start->hour; $time < $end->hour; $time++)
                                <tr>
                                    <td>
                                        {{ \Carbon\Carbon::createFromTime($time)->format("H:i") }}
                                    </td>
                                    @foreach($calendarData as $key => $days)
                                        <td>
                                            @foreach($days['workouts'] as $workout)
                                                @if($workout['timeStart'] == \Carbon\Carbon::createFromTime($time)->format("H:i"))
                                                    <b>{{ $workout['type'] }}</b>, {{ $workout['trainer'] }},<br> {{ $workout['timeStart'] }} - {{ $workout['timeEnd'] }}<br>
                                                @endif
                                            @endforeach
                                        </td>
                                    @endforeach
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
