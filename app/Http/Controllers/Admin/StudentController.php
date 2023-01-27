<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Students\StoreRequest;
use App\Models\User\User;
use App\Repositories\Admin\Classes\ClassesContract;
use App\Repositories\Admin\Students\StudentsContract;
use App\Services\Common\Helpers\UserType;
use App\Services\Common\User\GeneratorUserContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    private StudentsContract $studentsRepository;
    private ClassesContract $classRepository;

    public  function __construct(StudentsContract $studentsContract , ClassesContract $classContract)
    {
        $this->studentsRepository = $studentsContract;
        $this->classRepository = $classContract;
    }

    public function index($class_id): Factory|View|Application
    {
        $students = $this->studentsRepository->studentByClassId($class_id);

        return view('admin.students.index' , [
            'students' => $students,
            'class_id' => $class_id
        ]);
    }

    public function create($class_id): Factory|View|Application
    {
        return view('admin.students.create', [
            'class_id' => $class_id,
            'classes' => $this->classRepository->classes()
        ]);
    }

    public function store(StoreRequest $request , GeneratorUserContract $generatorUserContract): RedirectResponse
    {
        $data = $request->validated();

        $data['login'] = $generatorUserContract->login();
        $data['password'] = bcrypt($generatorUserContract->password());

        $data[User::USER_TYPE_ID] = UserType::STUDENT;

        $file = $request->file('photo');
        if(isset($file))
        {
            $path = $file->store(User::DIR_OF_AVATAR);
            $data['photo'] = $path;
        }
        $user = User::query()->create($data);
        return back()->with([
            'created' => "Student with Name '$user' war created"
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
