@extends('layouts.app2')
@section('template')
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2 class="text-center">List User</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Nama</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Role</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($users as $index=>$user)
                        <tr class="text-center">
                            <td>{{$index+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->role}}</td>
                            <td>
                                <form action="/deleteuser/{{$user->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/EditUser/{{$user->id}}" class="btn btn-primary">Edit</a>
                                    <button href="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <h2 class="text-center">List Menu</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Paket</th>
                            <th class="text-center" scope="col">Harga</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $index=>$menu)
                        <tr class="text-center">
                            <td>{{$index+1}}</td>
                            <td>{{$menu->paket}}</td>
                            <td>{{$menu->harga}}</td>
                            <td>
                                <form action="/deletemenu/{{$menu->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/EditMenu/{{$menu->id}}" class="btn btn-primary">Edit</a>
                                    <button href="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2 class="text-center">List Info/Article</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Judul</th>
                            <th class="text-center" scope="col">Tanggal Post</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($infos as $index=>$info)
                        <tr class="text-center">
                            <td>{{$index+1}}</td>
                            <td>{{$info->judul}}</td>
                            <td>{{date('j F',strtotime($info->created_at))}}</td>
                            <td>
                                <form action="/deleteinfo/{{$info->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/EditInfo/{{$info->id}}" class="btn btn-primary">Edit</a>
                                    <button href="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <h2 class="text-center">List Order</h2>
        <div class="col-10 mt-5">
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
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $index=>$order)
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
@endsection