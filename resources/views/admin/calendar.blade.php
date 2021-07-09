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
                    {{--{{ dd(\Carbon\Carbon::createFromTime(7)->format("H:i")) }}--}}
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
                                                    {{ $workout['type'] }}, {{ $workout['trainer'] }}, {{ $workout['timeStart'] }} - {{ $workout['timeEnd'] }}<br>
                                                @endif
                                            @endforeach
                                        </td>
                                    @endforeach
                                </tr>
                            @endfor
{{--                            @foreach($calendarData as $time => $days)--}}
{{--                                @for($time = $start->hour; $time < $end->hour; $time++)--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            {{ $time }}:00--}}
{{--                                        </td>--}}

{{--                                        <td>workouts</td>--}}

{{--                                    </tr>--}}
{{--                                @endfor--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        {{ $time }}--}}
{{--                                    </td>--}}
{{--                                    @foreach($days['workouts'] as $key => $value)--}}
{{--                                        @if (is_array($value))--}}
{{--                                            <?php echo '<pre>';print_r($value); ?>--}}
{{--                                            <td rowspan="" class="align-middle text-center" style="background-color:#f0f0f0">--}}
{{--                                                {{ $value['type'] }}<br>--}}
{{--                                                Teacher: {{ $value['trainer'] }}--}}
{{--                                            </td>--}}
{{--                                        @else--}}
{{--                                            <td></td>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
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
