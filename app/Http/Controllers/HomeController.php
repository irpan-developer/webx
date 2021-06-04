<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use App\Models\kartu;
use App\Models\tagline;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
    
        $items = item::paginate(3,['*'],'item');
        $kartus = kartu::paginate(3,['*'],'kartu');
        $taglines = tagline::paginate(3,['*'],'tagline');
        return view('pages.home.home')
        ->with([
            'items'=>$items,
            'kartus'=>$kartus,
            'taglines'=>$taglines
            ]);
    }

    public function Home(){
        return view('home');
    }



}
