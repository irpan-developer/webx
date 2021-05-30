<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kartu;

class kartuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartus = kartu::paginate(5);
        return view('pages.kartu.index')->with([
            'kartus'=>$kartus
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kartu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kartus = kartu::all();
        $kartus =$request->all();
        kartu::create($kartus);
        return redirect()->route('kartu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kartus = kartu::find($id);
        return view('pages.kartu.show')
        ->with(['kartus'=>$kartus]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kartus = kartu::find($id);
        return view('pages.kartu.edit')
        ->with(['kartus'=>$kartus]);
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
        $kartus = kartu::findOrFail($id);
        $newKartu=$request->all();
        $kartus->update($newKartu);
        return redirect()->route('kartu.index')->with('success', 'Item berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartus = kartu::find($id);
        $kartus->delete();
        return redirect()->route('kartu.index')
        ->with('success','kartu berhasil didelet.');
    }
}
