<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Member.myorder');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateOrder($id)
    {
        $menu=Menu::find($id);
        return view('Member.order',compact('menu'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        Cart::insert([
            'user_id'=>Auth::user()->id,
            'menu_id'=>$id,
            'nohp'=>$request->nohp,
            'alamat'=>$request->alamat,
            'jumlah'=>$request->jumlah,
            'request'=>$request->custom,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect('/cart')->with('success','Order successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editOrder($id)
    {
        Order::where('id',$id)->update([
            'status'=>'Pesanan diterima',
        ]);
        return redirect('/admin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderadd()
    {

        $carts=Auth::user()->carts;
        foreach ($carts as $cart){
            Order::insert([
                'menu_id'=>$cart->menu_id,
                'user_id'=>$cart->user_id,
                'nohp'=>$cart->nohp,
                'alamat'=>$cart->alamat,
                'jumlah'=>$cart->jumlah,
                'request'=>$cart->request,
                'status'=>'Pembayaran berhasil',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            $cart->delete();
        }

        return redirect('/myorder')->with('success','Order successfully added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
