<?php

    require 'koneksi.php';

    if( isset($_POST['submit'])){
        if(tambah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data Anda Berhasil Dimasukkan');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Anda Gagal Dimasukan');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Input Data Siswa</title>
    <style>
      body {
        background-color : #fbff00;
      }
       .h3{
        text-align : center;
       }
    </style>
</head>
<body>
    <ul>
        <form action="index.php" method="POST" enctype="multipart/form-data" >
        <div class="position-absolute top-50 start-50 translate-middle">
        <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
        <div class ="card-body">
          <div class="h3">
            <h3>Masukkan Data</h3>
          </div>
          <div class="table">
    <div class="mb-3">
        <label class="form-label">Nama Donatur :</label>
        <input type="text" class="form-control" name="donatur">
        </div>
    <div class="mb-3">
        <label class="form-label">Donatur ID :</label>
        <input type="text" class="form-control" name="donatur_id">
        <div id="emailHelp" class="form-text"></div>
        </div>
    <div class="mb-3">
        <label class="form-label">Paket :</label>
        <input type="text" class="form-control" name="paket">
        </div>
    <div class="mb-3">
        <label class="form-label">Kategori :</label>
        <input type="text" class="form-control" name="kategori">
    </div>
    <div class="mb-3">
        <label class="form-label">Nominal/barang :</label>
        <input type="text" class="form-control" name="nominal">
    </div>
    </i><button type='submit' name='tambah'>Submit</button>
        </form>
    </ul>
</body>
</html>     