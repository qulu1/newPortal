<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Xeber;

use App\User;

use App\Role;

use App\Category;









class NewsController extends Controller
{
    public function home(){
      $cat=Category::all();

    	return view("news.home",compact('cat'));

    }
    public function single(){

    	return view("news.single");

    }
    public function category(){

    	return view("news.category");

    }

    public function index(){

        $roles = Role::all();

        $users = User::all();

        $news = Xeber::all();

        return view("news.relations",compact('roles','users','news'));
    }


}
