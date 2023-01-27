<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Schedule\StoreRequest;
use App\Models\Schedule\Schedule;
use App\Repositories\Admin\Schedule\ScheduleContract;
use App\Repositories\Admin\Subject\SubjectsContract;
use App\Repositories\Admin\Teachers\TeacherContract;
use App\Services\Admin\Schedule\DayContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    private DayContract $dayContract;
    private ScheduleContract $scheduleContract;
    private SubjectsContract $subjectsContract;
    private TeacherContract $teacherContract;

    public function __construct(DayContract $dayContract ,
                                ScheduleContract $scheduleContract,
                                SubjectsContract $subjectsContract,
                                TeacherContract $teacherContract)
    {
        $this->teacherContract = $teacherContract;
        $this->subjectsContract = $subjectsContract;
        $this->scheduleContract = $scheduleContract;
        $this->dayContract = $dayContract;
    }


    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreRequest $request): RedirectResponse
    {

        $limit = 6;
        $counter = 0;
        $add = 0;
        $add_with_error = null;

        $data = $request->validated();
        $teachers = $data['teachers'];
        $subjects = $data['subjects'];

        Schedule::query()->where([
            'class_id' => $data['class_id'],
            'day' => $data['day']]
        )->delete();

        for(; $counter < $limit; $counter++)
        {
            if(isset($teachers[$counter]) and isset($subjects[$counter]))
            {
                Schedule::query()->create([
                    'teacher_id' => $teachers[$counter],
                    'hour' => $add + 1,
                    'day' => $data['day'],
                    'class_id' => $data['class_id'],
                    'subject_id' => $subjects[$counter]
                ]);
                $add++;
            }
        }

        return back()->with([
            'success' => $add > 0 ? "Расписания было добавлено." : null,
            'error' => $add_with_error
        ]);
    }

    public function show($id)
    {

    }

    public function edit($class_id , $day_id): Factory|View|Application
    {
        return view('admin.schedules.edit' , [
            'days' => $this->dayContract->days(),
            'day_id' => $day_id,
            'class_id' => $class_id,
            'subjects' => $this->subjectsContract->subjects(),
            'teachers' => $this->teacherContract->teachers(),
            'schedules' => $this->scheduleContract->ScheduleByClassIdAndDay($class_id , $day_id)
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
