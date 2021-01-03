<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = Menu::all();
        return view('Member.home', compact('menus'));
    }
    public function indexinfo()
    {
        $infos = Information::all();
        return view('Member.information', compact('infos'));
    }
    public function editprofile(){
        $user = User::find(Auth::user()->id);
        return view('Member.profile',compact('user'));
    }
    public function updateprofile(Request $request){
        User::where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect('/profile');  
    }
}
