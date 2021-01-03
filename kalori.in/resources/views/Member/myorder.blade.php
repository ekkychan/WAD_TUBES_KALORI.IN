@extends('layouts.app3')

@section('isi')
<br>
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2 class="text-center">MyOrder</h2>
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
                            <th class="text-center" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(Auth::user()->orders as $index=>$order)
                        <tr>
                            <td class="text-center">{{$index+1}}</td>
                            <td class="text-center">{{$order->user->name}}</td>
                            <td class="text-center">{{$order->nohp}}</td>
                            <td class="text-center">{{$order->alamat}}</td>
                            <td class="text-center">{{$order->menu->paket}}</td>
                            <td class="text-center">{{$order->jumlah}}</td>
                            @php 
                            $harga = $order->menu->harga*$order->jumlah;
                            @endphp
                            <td class="text-center">Rp. {{number_format($harga,0,",",".")}}</td>
                            <td class="text-center">{{$order->request}}</td>
                            <td class="text-center">{{$order->status}}</td>
                        </tr>
                        @endforeach
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
<br>
<br>
<br>
@endsection