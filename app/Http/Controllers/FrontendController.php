<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Task;
use App\Models\Contact;


class FrontendController extends Controller
{

    public function index()
    {
    	$menus = Menu::all();
    	$tasks = Task::all();
    	$contacts = Contact::first();
        return view('frontend.index',compact('menus','tasks','contacts'));
    }

}
