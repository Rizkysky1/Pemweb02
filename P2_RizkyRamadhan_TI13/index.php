<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="container-fluid">
    <div class="row mt-5">
        <div class="col-8">
            <!-- ini form -->
            <form method="Post" action="">
  <div class="form-group row">
    <label for="Costomer" class="col-4 col-form-label">costumor</label> 
    <div class="col-8">
      <input id="Costomer" name="Costomer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="Produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_1" type="radio" class="custom-control-input" value="Kulkas "> 
        <label for="Produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="Produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="Jumlah" name="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
        </div>

        <div class="col-4">
            <!-- ini daftar harga -->
            <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Daftar harga</li>
  <li class="list-group-item">TV : 4.200.000</li>
  <li class="list-group-item">Kulkas : 3.100.00</li>
  <li class="list-group-item">Mesin Cuci : 3.000.000</li>
  <li class="list-group-item">harga dapat Berubah Setiap Saat</li>
</ul>
        </div>
    </div>
   </div> 

   <hr>

   <?php  if (isset ($_POST ['submit']) && isset($_POST['Produk']) ) :  ?>

   Nama costomer : <?= $_POST['Costomer'] ?>
   <br>
   Produk Pilihan : <?= $_POST['Produk'] ?>
   <br>
   Jumlah Beli : <?= $_POST['Jumlah'] ?>
   <br>

   <?php

    if($_POST['Produk'] == "TV" && $_POST['Jumlah'] >-1 ){
    $harga = 4200000 * $_POST['Jumlah'];
    echo 'TOTAL BELANJA : ' . $harga;
     } elseif($_POST['produk'] == "kulkas" && $_POST['Jumlah'] >-1 ){
    $harga = 3100000 * $_POST['Jumlah'];
    echo 'TOTAL BELANJA : ' . $harga;
    } elseif($_POST['produk'] == "Mesin Cuci" && $_POST['Jumlah'] >-1 ){
    $harga = 3000000 * $_POST['Jumlah'];
    echo 'TOTAL BELANJA : ' . $harga;
    }

   ?>

   <?php  endif  ?>
</body>
</html>