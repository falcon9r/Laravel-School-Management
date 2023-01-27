<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Achievement\StoreRequest;
use App\Models\Achievement\Achievement;
use App\Repositories\Admin\Achievement\AchievementContract;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    private $achievementRepository;

    public function __construct(AchievementContract $achievementRepository)
    {
        $this->achievementRepository  = $achievementRepository;
    }

    public function index()
    {
        return view('admin.achievements.index' ,
            [
                'achievements' => $this->achievementRepository->achievementsActive()
            ]);
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $photo = $request->file('photo')->store(Achievement::DIRECTORY , ['disk' => 'public']);
        $data['photo'] = $photo;
        $this->achievementRepository->create($data);
        session()->flash('success', 'Успешно добавлено');
        return redirect()->route('admin.achievements.index');
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
