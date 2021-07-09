@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Змінити тренування
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("workouts.update", $workout->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">Назва</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $workout->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.schoolClass.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Зберегти
                </button>
            </div>
        </form>
    </div>
</div>



@endsection