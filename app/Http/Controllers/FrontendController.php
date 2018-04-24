<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Menu;


class FrontendController extends Controller
{

    public function index()
    {
    	$menus = Menu::all();
        return view('frontend.index',compact('menus'));
    }

}