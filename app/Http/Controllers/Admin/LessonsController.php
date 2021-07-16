<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLessonRequest;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Models\Lesson;
use App\Models\SchoolClass;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LessonsController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('lesson_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lessons = Lesson::all();

        $lessons->each(function ($lesson){
        	$lesson->weekday = Lesson::WEEK_DAYS_UA[$lesson->weekday];
		});

        return view('admin.lessons.index', compact('lessons'));
    }

	public function create()
	{
		//abort_if(Gate::denies('lesson_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$classes = SchoolClass::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
		$teachers = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
		$daysUa = Lesson::WEEK_DAYS_UA;

		return view('admin.lessons.create', compact('classes', 'teachers', 'daysUa'));
	}

	public function store(StoreLessonRequest $request)
	{
		//dd($request->all());
		$lesson = [
			'class_id' => $request->class_id,
			'teacher_id' => $request->teacher_id,
			'start_time' => $request->start_time,
			'end_time' => $request->end_time
		];

		foreach($request->weekdays as $weekday){
			$lesson['weekday'] = $weekday;

			Lesson::create($lesson);
		}

		return redirect()->route('schedule.index');
	}

    public function edit(Lesson $schedule)
    {
        //abort_if(Gate::denies('lesson_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classes = SchoolClass::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $teachers = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $schedule->load('class', 'teacher');
		$daysUa = Lesson::WEEK_DAYS_UA;

        return view('admin.lessons.edit', compact('classes', 'teachers', 'schedule', 'daysUa'));
    }

    public function update(UpdateLessonRequest $request, Lesson $schedule)
    {
		$schedule->update($request->all());

        return redirect()->route('schedule.index');
    }

    public function show(Lesson $schedule)
    {
        //abort_if(Gate::denies('lesson_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$schedule->load('class', 'teacher');

        return view('admin.lessons.show', compact('schedule'));
    }

    public function destroy(Lesson $schedule)
    {
        //abort_if(Gate::denies('lesson_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$schedule->delete();

        return back();
    }

    public function massDestroy(MassDestroyLessonRequest $request)
    {
        Lesson::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
