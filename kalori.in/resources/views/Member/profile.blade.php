@extends('layouts.app3')

@section('isi')
<br>
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="container mt-5">
        <form action="{{ route('profile.update',$user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control" id="file" name="name" value="{{ $user->name}}">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="text" class="form-control" id="file" name="email" value="{{ $user->email }}">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection