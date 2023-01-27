<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Classes\StoreRequest;
use App\Models\Classes\Classes;
use App\Repositories\Admin\Classes\ClassesContract;
use App\Repositories\Admin\Students\StudentsContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    private ClassesContract $classesRepository;

    public  function  __construct(ClassesContract $classesContract)
    {
        $this->classesRepository = $classesContract;
    }

    public function index(): Factory|View|Application
    {
        $classes = $this->classesRepository->classes();

        return view('admin.classes.index' , compact('classes'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.classes.create' , [
            'signs' => $this->classesRepository->signs(),
            'numbers' => $this->classesRepository->numbers(),
            'teachers' => $this->classesRepository->teachers()
        ]);
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $class = Classes::query()->create($request->validated());
        return back()->with([
            'created' => "The Class with name {$class->Name()} war created"
        ]);
    }

    public function show($id , StudentsContract $studentsContract): Factory|View|Application
    {
        $students = $studentsContract->studentByClassId($id);
        return view('admin.classes.show' , [
            'students' => $students,
            'class_id' => $id
        ]);
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
