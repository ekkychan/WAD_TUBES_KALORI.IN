@extends('layouts.app3')

@section('isi')

<div>
    <br>
    <br>
    <br>
    <br>
</div>
<div class="container mt-5">
    <div class="card-group">
        <div class="card">
            <div class="card-body text-center">
                <img src=".jpg">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Order Your Food</h5>
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="name" placeholder="Name ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNomorHP" class="col-sm-4 col-form-label">Phone Number</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" name="nohp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="FormControlTextarea1" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Order</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="flavor">
                                <option value="Paket">Package A</option>
                                <option>Package B</option>
                                <option>Package C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-4 col-form-label">Jumlah Pesanan</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" name="jumlah">
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-lg btn-block" name="order" type="submit">Order</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<br>


@endsection