@extends('layouts.app2')
@section('template')
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2 class="text-center">List Menu</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">
                    @foreach($menus as $index=>$menu)
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Paket</th>
                            <th class="text-center" scope="col">Harga</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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
</div>
@endsection