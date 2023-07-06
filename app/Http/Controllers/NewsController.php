<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Country;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();

        return view('news.index', compact('news'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        
        return view('news.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'status'=>'required',
            'category'=>'required',
            'country_id'=>'required',
            'content'=>'required',
            ]);
            
        $news = News::create([
            'title' => $request->input('title'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'country_id' => $request->input('country_id'),
            'content' => $request->input('content')
            ]);
            return redirect('/news')->with('success','News telah disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $countries = Country::get();

        return view('news.edit', compact('news', 'countries'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title'=>'required',
            'status'=>'required',
            'category'=>'required',
            'country_id'=>'required',
            'content'=>'required',
            ]);

        $news = News::whereId($news->id)->update([
            'title' => $request->input('title'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'country_id' => $request->input('country_id'),
            'content' => $request->input('content')
            ]);
            return redirect('/news')->with('success','News telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news = News::find($news->id);
        $news->delete();
        return redirect('/news')->with('success','News telah dihapus!');
    }
}