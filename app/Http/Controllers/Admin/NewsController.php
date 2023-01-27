<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\StoreRequest;
use App\Models\News\News;
use App\Repositories\Admin\News\NewsContract;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    private   $newsRepository = null;

    public function __construct(NewsContract $newsRepository)
    {
        app()->setLocale('tj');
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        return view('admin.news.index',
            [
                'news' => $this->newsRepository->newsActive(10)
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $photo = null;
        if($request->file('photo')  != null){
            $photo = $request->file('photo')->store(News::DIRECTORY , [
                'disk' => 'public'
            ]);
        }
        $news = News::query()->create([
           'title' => $data['title'],
            'text' => $data['text'],
            'photo' => $photo
        ]);
        return redirect()->route('admin.news.index')->with([
            'success' => 'Добавлено новая новость'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.news.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
