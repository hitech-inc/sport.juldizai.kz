<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Task;
use App\Models\Contact;
use App\Models\Photo;


class FrontendController extends Controller
{

    public function index()
    {
    	$menus = Menu::all();
    	$tasks = Task::all();
    	$contacts = Contact::first();
    	$gallery = Photo::all()->where('alt','gallery-photos')->take(8);
        return view('frontend.index',compact('menus','tasks','contacts','gallery'));
    }

}
