<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Services\CalendarService;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index(CalendarService $calendarService)
    {
		$weekDays     = Lesson::WEEK_DAYS;
		$calendarData = $calendarService->generateCalendarData($weekDays);

		$timeWork = config('app.calendar');
		$start = Carbon::parse($timeWork['start_time']);
		$end = Carbon::parse($timeWork['end_time']);
		$duration = $start->diffInHours($end);

		return view('admin.calendar', compact('start', 'end', 'duration', 'calendarData'));
    }

    public function showSchedule(CalendarService $calendarService)
	{
		$weekDays     = Lesson::WEEK_DAYS;
		$calendarData = $calendarService->generateCalendarData($weekDays);

		return json_encode($calendarData);
	}
}
