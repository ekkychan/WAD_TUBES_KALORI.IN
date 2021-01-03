@extends('layouts.app3')

@section('isi')

<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="utf-8">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-left" align="center">
                <h2>Apa itu BMI?</h2>
                <br>
                <br>
                <img src="images/bmii.jpg">
                <br>
                <br>
                <p class="text-2"><span>Body Mass Index (BMI) </span>adalah angka yang menjadi penilaian standar untuk
                    menentukan apakah berat badan anda tergolong normal, kurang, berlebih atau obesitas.</p>
                <br>

            </div>
            <div class="form-detail" id="myform">
                <h2 align="center">BMI Calculate</h2>
                <br>
                <br>
                <div class="form-row">
                    <label for="your_email">Tinggi Badan (cm)</label>
                    <input type="text" name="tinggi" id="tinggi" class="input-text" required>
                </div>
                <div class="form-row">
                    <label for="password">Berat Badan (kg) </label>
                    <input type="text" name="berat" id="berat" class="input-text" required>
                </div>
                <br>
                <div class="d-grid gap-2" ;>
                    <button class="btn btn-danger" onclick="bmi()"
                        style="background-color: rgba(255, 255, 255, 0.945); color: #d65106;">Count</button>
                </div>
                <br>
                <h1 class="text-center text-light" id="bmi"></h1>
                <h3 class="text-center text-light" id="pesan"></h3>
                <script>
                function bmi() {
                    let tb = document.getElementById('tinggi').value
                    let bb = document.getElementById('berat').value
                    let hitung = bb / ((tb / 100) * (tb / 100))
                    let pesan = null
                    if (hitung <= 18.5){
                        pesan ="Berat badan kurang"
                    }else if (hitung > 18.5 && hitung < 22.9 ){
                        pesan ="Berat badan normal"
                    }else if (hitung >=23 && hitung <30){
                        pesan ="Berat badan berlebih(kecenderungan obesitas)"
                    }else if (hitung > 30){
                        pesan ="obesitas"
                    }
                    document.getElementById('bmi').innerHTML = hitung.toFixed(2)
                    document.getElementById('pesan').innerHTML = pesan
                }
                </script>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

    @endsection