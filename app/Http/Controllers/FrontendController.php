<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Task;


class FrontendController extends Controller
{

    public function index()
    {
    	$menus = Menu::all();
    	$tasks = Task::all();
        return view('frontend.index',compact('menus','tasks'));
    }

}
