<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Requests\StoreNewsRequest;
use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at','desc')->get();
        $loggedUserInfo = Admin::where('id','=', session('LoggedUser'))->first();
        return view('admin.news',  compact('news', 'loggedUserInfo'));
    }

    public function news()
    {
        $news = News::orderBy('created_at','desc')->get();
       return view('site.news', compact('news'));
    }
    public function newsHome()
    {
        // $news =News::whereDate('created_at', date('Y-m-d'))->take(2)->get();
         $news = News::orderBy('created_at','desc')->take(2)->get();
       return view('site.home', compact('news'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreNewsRequest $request)
    {
        $newImageName = time() . '-' . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        $news = News::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image'=> $newImageName
        ]);
        return redirect()->route('news.index')->withSuccess('Created successffuly news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.showNews', compact('news'));

    } 
    public function detailNews(News $news)
    { 
     $newsRec = News::orderBy('created_at')->take(2)->get();
    
        return view('site.detailNews', compact('news', 'newsRec'));
       
        // return view('site.news', compact('news'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.editNews', compact('news'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, $id)
    {
        $news = News::find($id);
        if ($news === null) {
        return redirect()->back()->with('status', 'error'); 
        }
        $news->description = $request->get('description');
        $news->title = $request->get('title');
  

        if ($request->hasfile('image')) {
            $destination = public_path() . '/images/' . $news->image;
            $this->deleteImage($news);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file_path =  $file->move(public_path('images'), $filename);
            $news->image = $filename;
        }
        $news->save();
        return redirect()->route('news.index')->withSuccess('Updated successffuly news');
    }
    private function deleteImage($news) 
    {
        $destination = public_path() . '/images/' . $news->image;
        if (News::exists($destination)) {
            File::delete($destination);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $this->deleteImage($news);
        $news->delete();
        return redirect()->route('news.index')->withDanger('Deleted news '.$news->image);
    }
}
