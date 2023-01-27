<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\StoreRequest;
use App\Models\SubjectUser\SubjectUser;
use App\Models\User\User;
use App\Repositories\Admin\Subject\SubjectsContract;
use App\Repositories\Admin\Teachers\TeacherContract;
use App\Services\Common\Helpers\UserType;
use App\Services\Common\User\GeneratorUserContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    private TeacherContract $teacherContract;

    public function __construct(TeacherContract $teacherContract)
    {
        $this->teacherContract = $teacherContract;
    }

    public function index(): Factory|View|Application
    {
        return view('admin.teachers.index',
            [
                'teachers' => $this->teacherContract->teachers()
            ]);
    }

    public function create(SubjectsContract $subjectsContract): Factory|View|Application
    {
        return view('admin.teachers.create', [
            'subjects' => $subjectsContract->subjects()
        ]);
    }

    public function store(StoreRequest $request, GeneratorUserContract $generatorUserContract): RedirectResponse
    {
        $data = $request->validated();

        $data['login'] = $generatorUserContract->login();
        $data['password'] = bcrypt($generatorUserContract->password());
        $data[User::USER_TYPE_ID] = UserType::TEACHER;
        $file = $request->file('photo');

        if (isset($file)) {
            $path = $file->store(User::DIR_OF_AVATAR);
            $data['photo'] = $path;
        }

        $user = User::query()->create($data);

        if (isset($data['subjects'])) {
            foreach ($data['subjects'] as $subject) {
                SubjectUser::query()->create([
                    'user_id' => $user->id,
                    'subject_id' => $subject
                ]);
            }
        }

        return back()->with([
            'created' => "Teacher with Name '$user' war created"
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
