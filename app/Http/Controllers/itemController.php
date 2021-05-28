<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;


class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = item::paginate(5);
        return view('pages.item.index')
        ->with(['items'=>$items]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = item::all();
        $items =$request->all();
        item::create($items);
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = item::find($id);
        return view('pages.item.show')
        ->with(['items'=>$items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = item::find($id);
        return view('pages.item.edit')
        ->with(['items'=>$items]);
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
        $items = item::findOrFail($id);
        $newitem =  $request->all();
        $items->update($newitem);
        return redirect()->route('item.index')->with('success', 'Item updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = item::find($id);
        $items->delete();
        return redirect()->route('item.index')
        ->with('success','Product deleted successfully');
    }
}
