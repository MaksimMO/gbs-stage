@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Тренер
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ url('users') }}">
                    Назад до списку
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Ім'я
                        </th>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email_verified_at') }}
                        </th>
                        <td>
                            {{ $user->email_verified_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Роль
                        </th>
                        <td>
                            @foreach($user->roles as $key => $roles)
                                <span class="label label-info">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Тренування
                        </th>
                        <td>
                            @if($user->schoolClasses->count())
                                @foreach($user->schoolClasses as $class)
                                    <span class="badge badge-info">{{ $class->name }}</span>
                                @endforeach
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('users.index') }}">
                    Назад до списку
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Відношення
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#teacher_lessons" role="tab" data-toggle="tab">
                Тренування
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="teacher_lessons">
            @includeIf('admin.users.relationships.teacherLessons', ['lessons' => $user->teacherLessons])
        </div>
    </div>
</div>

@endsection