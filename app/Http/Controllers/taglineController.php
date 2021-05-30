<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tagline;

class taglineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taglines = tagline::paginate(5);
        return view('pages.tagline.index')->with([
            'taglines'=>$taglines
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tagline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taglines = tagline::all();
        $taglines =$request->all();
        tagline::create($taglines);
        return redirect()->route('tagline.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taglines = tagline::find($id);
        return view('pages.tagline.show')
        ->with(['taglines'=>$taglines]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taglines = tagline::find($id);
        return view('pages.tagline.edit')
        ->with(['taglines'=>$taglines]);
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
        $taglines = tagline::findOrFail($id);
        $newKartu=$request->all();
        $taglines->update($newKartu);
        return redirect()->route('tagline.index')->with('success', 'Item berhasil di Updateitem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taglines = tagline::find($id);
        $taglines->delete();
        return redirect()->route('tagline.index')
        ->with('success','kartu berhasil didelet.');
    }
}
