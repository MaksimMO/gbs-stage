@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Інформація про тренування
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('schedule.index') }}">
                    Назад до списку
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.lesson.fields.id') }}
                        </th>
                        <td>
                            {{ $schedule->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Тип тренування
                        </th>
                        <td>
                            {{ $schedule->class->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Тренар
                        </th>
                        <td>
                            {{ $schedule->teacher->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            День тижня
                        </th>
                        <td>
                            {{ $schedule->weekday }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Час початку
                        </th>
                        <td>
                            {{ $schedule->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Час завершення
                        </th>
                        <td>
                            {{ $schedule->end_time }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('schedule.index') }}">
                    Назад до списку
                </a>
            </div>
        </div>
    </div>
</div>



@endsection