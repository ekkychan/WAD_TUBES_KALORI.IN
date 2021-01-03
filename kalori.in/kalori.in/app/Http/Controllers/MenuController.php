<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create(){
        return view('Admin.AddMenu');
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
        return redirect('/home');
    }

    public function hapusmenu($id){
        Menu::where ('id',$id)->delete();
        return redirect('/admin');
    }
    public function index(){
        $menus = Menu::all();
        return view('Admin.home', compact('menus'));
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

}