@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Тренування
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route("workouts.index") }}">
                    Назад до списку
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.schoolClass.fields.id') }}
                        </th>
                        <td>
                            {{ $workout->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schoolClass.fields.name') }}
                        </th>
                        <td>
                            {{ $workout->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route("workouts.index") }}">
                    Назад до списку
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Додатково
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#class_lessons" role="tab" data-toggle="tab">
                Тренування
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#class_users" role="tab" data-toggle="tab">
                Тренери
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="class_lessons">
            @includeIf('admin.schoolClasses.relationships.classLessons', ['lessons' => $workout->classLessons])
        </div>
        <div class="tab-pane" role="tabpanel" id="class_users">
            @includeIf('admin.schoolClasses.relationships.classUsers', ['users' => $workout->classUsers])
        </div>
    </div>
</div>

@endsection