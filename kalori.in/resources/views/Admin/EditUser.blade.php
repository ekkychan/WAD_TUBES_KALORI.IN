@extends('layouts.app2')
@section('template')
<form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" id="file" name="name" value="{{ $user->name}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" id="file" name="email" value="{{ $user->email }}" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Role</label>
        <select name="role_id" class="form-control">
            <option value="1" {{ $user->role_id == 1 ? 'checked':'' }}>Admin</option>
            <option value="2" {{ $user->role_id == 2 ? 'checked':'' }} >User</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </div>
</form>
@endsection