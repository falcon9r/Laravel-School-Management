<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subject\StoreRequest;
use App\Models\Subject\Subject;
use App\Repositories\Admin\Subject\SubjectsContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Request;

class SubjectController extends Controller
{
    private SubjectsContract $subjectsContract;

    public  function  __construct(SubjectsContract $subjectsContract)
    {
        $this->subjectsContract = $subjectsContract;
    }

    public function index(): Factory|View|Application
    {
        return view('admin.subjects.index' , [
            'subjects' => $this->subjectsContract->subjects()
        ]);
    }

    public function create(): Factory|View|Application
    {
        return view('admin.subjects.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $subject = Subject::query()->create($request->validated());
        return back()->with([
            'created' => "Subject with name $subject war created"
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
