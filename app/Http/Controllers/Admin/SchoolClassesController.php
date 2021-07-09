<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySchoolClassRequest;
use App\Http\Requests\StoreSchoolClassRequest;
use App\Http\Requests\UpdateSchoolClassRequest;
use App\Models\SchoolClass;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SchoolClassesController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('school_class_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schoolClasses = SchoolClass::all();

        return view('admin.schoolClasses.index', compact('schoolClasses'));
    }

    public function create()
    {
        //abort_if(Gate::denies('school_class_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schoolClasses.create');
    }

    public function store(StoreSchoolClassRequest $request)
    {
        $schoolClass = SchoolClass::create($request->all());

        return redirect()->route('workouts.index');
    }

    public function edit(SchoolClass $workout)
    {
        //abort_if(Gate::denies('school_class_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schoolClasses.edit', compact('workout'));
    }

    public function update(UpdateSchoolClassRequest $request, SchoolClass $workouts)
    {
		$workouts->update($request->all());

        return redirect()->route('workouts');
    }

    public function show(SchoolClass $workout)
    {
        //abort_if(Gate::denies('school_class_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workout->load('classLessons', 'classUsers');

        return view('admin.schoolClasses.show', compact('workout'));
    }

    public function destroy(SchoolClass $workouts)
    {
        //abort_if(Gate::denies('school_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workouts->delete();

        return back();
    }

    public function massDestroy(MassDestroySchoolClassRequest $request)
    {
        SchoolClass::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
