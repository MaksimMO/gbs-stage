<?php

namespace App\Services;

use App\Lesson;
use Carbon\Carbon;

class CalendarService
{
	public function generateCalendarData($weekDays)
	{
		$calendarData = [];
		$now = Carbon::now();

		foreach ($weekDays as $index => $day)
		{
			$record = [];
			$items = [];

			$record['day'] = $day;
			$record['date'] = $now->startOfWeek()->addDay($index-1)->format('d.m.y');

			$workouts = Lesson::with('class', 'teacher')
				->where('weekday', $index)
				->calendarByRoleOrClassId()
				->get();

			foreach ($workouts as $item)
			{
				$items[] = [
					'type' => $item->class->name,
					'trainer' => $item->teacher->name,
					'timeStart' => $item->start_time,
					'timeEnd' => $item->end_time,
				];
			}
			$record['workouts'] = $items;

			$calendarData[] = $record;
		}
		return json_encode($calendarData);
	}
}
