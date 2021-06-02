<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kartu;
use App\Image;

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
        $images=Image::paginate(5);
        return view('pages.kartu.index')->with([
            'kartus'=>$kartus,
            'images'=>$images
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
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);


    if($request->hasFile('file')) {
        // $img_ext = $request->file('file')->getClientOriginalExtension();
        // $filename = time() . '.' . $img_ext;
        // $path = $request->file('file')->move(public_path(), $filename);//image save public folder

        // $imagePath = $request->file('file');
            $imagePath = $request->file('file');
            $imageExt=$imagePath->getClientOriginalExtension();
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
    }
  //You should store only filename not path in db
  kartu::create([
    'judul' => $request->judul,
    'deskripsi' => $request->deskripsi,
    'path' => '/storage/'.$path, 
  ]);

    return redirect()->route('kartu.index');
}






        // $kartus = kartu::all();
        
        // $kartus= new Image;
        // if ($request->file('file')) {
        //     $imagePath = $request->file('file');
        //     $imageName = $imagePath->getClientOriginalName();
        //     $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
        // }
        
        // $kartus->path = '/storage/';
        // $kartus =$request->all();
        // kartu::create($kartus);
        // return redirect()->route('kartu.index');
    

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
