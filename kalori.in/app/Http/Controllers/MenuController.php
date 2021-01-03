<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function create(){
        return view('Admin.AddMenu');
    }
    public function make(){
        return view('Admin.AddInformation');
    }
    public function store(Request $request){
        $file = time().'.'.$request->img_path->extension();
        $request->img_path->move(public_path('images/menu/'),$file);
        Menu::insert([
            'paket'=>$request->paket,
            'harga'=>$request->harga,
            'senin_lunch'=>$request->senin_lunch,
            'senin_dinner'=>$request->senin_dinner,
            'selasa_lunch'=>$request->selasa_lunch,
            'selasa_dinner'=>$request->selasa_dinner,
            'rabu_lunch'=>$request->rabu_lunch,
            'rabu_dinner'=>$request->rabu_dinner,
            'kamis_lunch'=>$request->kamis_lunch,
            'kamis_dinner'=>$request->kamis_dinner,
            'jumat_lunch'=>$request->jumat_lunch,
            'jumat_dinner'=>$request->jumat_dinner,
            'sabtu_lunch'=>$request->sabtu_lunch,
            'sabtu_dinner'=>$request->sabtu_dinner,
            'img_path'=>$file
        ]);
        return redirect('/admin');
    }
    public function updateuser($id,Request $request){
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
        ]);
        return redirect('/admin');  
    }
    public function hapusmenu($id){
        Menu::where ('id',$id)->delete();
        return redirect('/admin');
    }
    public function hapususer($id){
        User::where ('id',$id)->delete();
        return redirect('/admin');
    }
    public function edituser($id){
        $user = User::find($id);
        return view('Admin.EditUser',compact('user'));
    }
    public function index(){
        $menus = Menu::all();
        $users = User::all();
        $orders = Order::all();
        return view('Admin.home', compact('menus','users','orders'));
    }

    public function edit($id){
        $menu = Menu::find($id);
        return view('Admin.EditMenu', compact('menu'));
    }

    public function update($id,Request $request){
        
        if($request->img_path == null){
            Menu::where('id',$id)->update([
                'paket'=>$request->paket,
                'harga'=>$request->harga,
                'senin_lunch'=>$request->senin_lunch,
                'senin_dinner'=>$request->senin_dinner,
                'selasa_lunch'=>$request->selasa_lunch,
                'selasa_dinner'=>$request->selasa_dinner,
                'rabu_lunch'=>$request->rabu_lunch,
                'rabu_dinner'=>$request->rabu_dinner,
                'kamis_lunch'=>$request->kamis_lunch,
                'kamis_dinner'=>$request->kamis_dinner,
                'jumat_lunch'=>$request->jumat_lunch,
                'jumat_dinner'=>$request->jumat_dinner,
                'sabtu_lunch'=>$request->sabtu_lunch,
                'sabtu_dinner'=>$request->sabtu_dinner,
            ]);
        }else{
            $file = time().'.'.$request->img_path->extension();
            $request->img_path->move(public_path('img/'),$file);
            Menu::where('id',$id)->update([
                'paket'=>$request->paket,
                'harga'=>$request->harga,
                'senin_lunch'=>$request->senin_lunch,
                'senin_dinner'=>$request->senin_dinner,
                'selasa_lunch'=>$request->selasa_lunch,
                'selasa_dinner'=>$request->selasa_dinner,
                'rabu_lunch'=>$request->rabu_lunch,
                'rabu_dinner'=>$request->rabu_dinner,
                'kamis_lunch'=>$request->kamis_lunch,
                'kamis_dinner'=>$request->kamis_dinner,
                'jumat_lunch'=>$request->jumat_lunch,
                'jumat_dinner'=>$request->jumat_dinner,
                'sabtu_lunch'=>$request->sabtu_lunch,
                'sabtu_dinner'=>$request->sabtu_dinner,
                'img_path'=>$file
            ]);
        }
        return redirect('/admin');  
    }
    public function addinfo(Request $request){
        $file = time().'.'.$request->img_path->extension();
        $request->img_path->move(public_path('images/info/'),$file);
        Information::insert([
            'user_id'=>Auth::user()->id,
            'judul'=>$request->judul,
            'header'=>$request->header,
            'isi'=>$request->isi,
            'img_path'=>$file,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect('/admin');
    }
    public function lihat($id){
        $info = Information::find($id);
        return view('Member.detail', compact('info'));
    }


}