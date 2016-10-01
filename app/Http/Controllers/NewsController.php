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

        // $xeber = Xeber::find($id);

        // $xeber_count = $xeber->count += 1;

        // $xeber->update([

        //     "count"=>$xeber_count

        // ]);

    	return view("news.home",compact('cat','xeber_order'));

    }
    public function single($id){

        $xeber = Xeber::find($id);

        $xeber_count = $xeber->count += 1;

        $xeber->update([

            "count"=>$xeber_count

        ]);

    	return view("news.single",compact('xeber', 'xeber_count'));

    }


    public function category($id){

        $cat = Category::find($id);

    	return view("news.category", compact("cat"));

    }

    public function index(){

        $roles = Role::all();

        $users = User::all();

        $news = Xeber::all();

        return view("news.relations",compact('roles','users','news'));
    }


}
