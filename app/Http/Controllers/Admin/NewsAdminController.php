<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 24.02.2017
 * Time: 12:55
 */

namespace app\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests;
use App\News;
use App\Role;
use App\User;
use DB;
use Hash;


class NewsAdminController extends AdminController
{
    public function __construct()
    {
        $this->middleware('role:root|programmer');
    }

    public function index()
    {
        $news = News::orderBy('id','desc')->with('user')->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Requests\CreateNewsRequest $request, News $news)
    {
        $news->title = $request->title;
        $news->description = $request->description;
        $news->text = $request->text;
        $news->user_id = $request->user()->id;
        $news->status = (!empty($request->status)) ? $request->status : 'Draft';
        $news->save();

        return redirect('admin/news');
    }


    public function edit(News $news)
    {
        return view('admin.news.edit', compact(['news']));
    }


    public function update(Requests\CreateNewsRequest $request, News $news)
    {

        $news->title = $request->title;
        $news->description = $request->description;
        $news->text = $request->text;
        $news->status = $request->status;
        $news->update();

        return redirect('admin/news');
    }


    public function destroy(News $news)
    {
        $news->delete();
        return redirect('admin/news');
    }
}