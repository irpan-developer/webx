<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Image;
use App\Http\Requests\kartuRequest;

class kategoriController extends Controller
{

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $kategoris = kategori::all();
            // $images=Image::all();
            return view('pages.kategori.index')->with([
                'kategoris'=>$kategoris,
                // 'images'=>$images
                ]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('pages.kategori.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $kategoris = $request->all();

            kategori::create($kategoris);
            return redirect()->route('kategori.index');

        }


    //     if($request->hasFile('file')) {
    //         // $img_ext = $request->file('file')->getClientOriginalExtension();
    //         // $filename = time() . '.' . $img_ext;
    //         // $path = $request->file('file')->move(public_path(), $filename);//image save public folder

    //         // $imagePath = $request->file('file');
    //             $imagePath = $request->file('file');
    //             $imageExt=$imagePath->getClientOriginalExtension();
    //             $imageName = $imagePath->getClientOriginalName();
    //             $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
    //     }
    //   //You should store only filename not path in db
    //   kategori::create([
    //     'judul' => $request->judul,
    //     'deskripsi' => $request->deskripsi,
    //     'path' => '/storage/'.$path,
    //   ]);

    //     return redirect()->route('kategori.index');
    // }






    //         // $kategoris = kategori::all();

    //         // $kategoris= new Image;
    //         // if ($request->file('file')) {
    //         //     $imagePath = $request->file('file');
    //         //     $imageName = $imagePath->getClientOriginalName();
    //         //     $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
    //         // }

    //         // $kategoris->path = '/storage/';
    //         // $kategoris =$request->all();
    //         // kategori::create($kategoris);
    //         // return redirect()->route('kategori.index');


        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $kategoris = kategori::find($id);
            return view('pages.kategori.show')
            ->with(['kategoris'=>$kategoris]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $kategoris = kategori::find($id);
            return view('pages.kategori.edit')
            ->with(['kategoris'=>$kategoris]);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(kartuRequest $request, $id)
        {

            $newkartus = $request->all();
            if($request->file('file')!='') {
                $newkartus['path']= 'storage/' .$request->file('file')->store(
                    'assets/personal','public'
                );
            }

            $kategoris = kategori::findOrFail($id);
            $kategoris->update($newkartus);
            // dd($newkartus);
            // dd($kategoris);

            // $update = ['judul' => $request->judul, 'deskripsi' => $request->deskripsi];
            // if ($files = $request->file('file')) {
            //     $destinationPath = 'public/image/'; // upload path
            //     $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            //     $files->move($destinationPath, $profileImage);
            //     $update['path'] = "$profileImage";
            // }
            // kategori::where('id',$id)->update($update);
            // dd($update);


            return redirect()->route('kategori.index')->with('success', 'data berhasil di update');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $kategoris = kategori::find($id);
            $kategoris->delete();
            return redirect()->route('kategori.index')
            ->with('success','kartu berhasil didelet.');
        }
    }
