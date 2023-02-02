<?php

namespace App\Http\Controllers;
use BinshopsBlog\Models\BinshopsCategory;
use BinshopsBlog\Models\BinshopsLanguage;
use Illuminate\Http\Request;
use BinshopsBlog\Models\Solutions;
use BinshopsBlog\Models\Pages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function solutions()
    {
        $solutions = Solutions::all();
        return view('solutions', compact('solutions'));
    }


    public function pages($slug)
    {
        $page = Pages::where('slug', $slug)->first();

        return view('page', compact('page'));
    }


    public function header()
    {

        $rootList = BinshopsCategory::roots()->get();
        BinshopsCategory::loadSiblingsWithList($rootList);

        return view("header", [
            'locale' => 'en',
            'lang_id' => 1,
            'categories' => $rootList,
        ]);
    }
}
