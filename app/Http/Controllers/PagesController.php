<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Services;
use App\About;
use App\Portfolio;
class PagesController extends Controller
{
    public function index(){
        $main=Main::first();
        $services=Services::get();
        $abouts=About::get();
        $portfolios=Portfolio::get();
        return view('pages.index',compact('main','services','abouts','portfolios'));
    }
  

    public function dashboard()
    {
        return view('admin.dashboard.index');
    }
    
}
