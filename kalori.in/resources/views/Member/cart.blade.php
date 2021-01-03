@extends('layouts.app3')

@section('isi')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2 class="text-center">Cart</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Nama</th>
                            <th class="text-center" scope="col">NoHp</th>
                            <th class="text-center" scope="col">Alamat</th>
                            <th class="text-center" scope="col">Menu</th>
                            <th class="text-center" scope="col">Jumlah</th>
                            <th class="text-center" scope="col">Harga</th>
                            <th class="text-center" scope="col">Special Request</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                        $total=0;
                        @endphp
                        @foreach(Auth::user()->carts as $index=>$cart)
                        <tr>
                            <td class="text-center">{{$index+1}}</td>
                            <td class="text-center">{{$cart->user->name}}</td>
                            <td class="text-center">{{$cart->nohp}}</td>
                            <td class="text-center">{{$cart->alamat}}</td>
                            <td class="text-center">{{$cart->menu->paket}}</td>
                            <td class="text-center">{{$cart->jumlah}}</td>
                            @php 
                            $harga = $cart->menu->harga*$cart->jumlah;
                            $total = $total+$harga;
                            @endphp
                            <td class="text-center">Rp. {{number_format($harga,0,",",".")}}</td>
                            <td class="text-center">{{$cart->request}}</td>
                            <td class="text-center">
                            <form action="/deletecart/{{$cart->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                        <td class="text-center"colspan="7"><b> Total Pesanan </b></td>
                        <td class="text-center">Rp. {{number_format($total,0,",",".")}}</td>
                        <td class="text-center">
                            <form action="/order" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">Bayar</button>
                            </form>
                        </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
@endsection