<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Form Belanja</title>
  </head>
  <body style="background-color:yellow;">
  <div class="container" style="margin-top:2em; background-color:">

        <div class="row">
            <div class="col-sm bg-light">
           <body style="background-color:#f1f11;>
    <div class="container" style="margin-top:2em;">
        <div class="row">
        <h5 class="card-header bg-primary text-white">Belanja</h5>
            <div class="col-sm" style="background-color:white; margin-right:1em; padding-top:1em;">
            <form class="form-horizontal" method="post" action="belanja.php" autocomplete="off">
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="customer">Customer</label> 
                    <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Produk</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-sm-4" style="background-color:white; padding-top:1em;">
                <table class="table">
                    <tr class="bg-primary text-white">
                        <td>Daftar Harga</td>
                    </tr>
                    <tr>
                        <td>TV: 4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas: 3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci: 3.800.000</td>
                    </tr>
                    <tr class="text-white bg-primary">
                        <td>HARGA DAPAT BERUBAH SETIAP SAAT!</td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
    error_reporting(0);
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $kirim = $_POST['kirim'];

    if ($produk == 'TV') {
        $total = $jumlah * 4200000;
    }
    elseif ($produk == 'Kulkas') {
        $total = $jumlah * 3100000;
    }
    elseif ($produk == 'Mesin Cuci') {
        $total = $jumlah * 3800000;
    }
    ?>

        <div class="row">
            <div class="col-md" style="margin-top:1.5em;">
                <table class="table" style="max-width:30em; background-color:white;">
                    <tr>
                        <td>Customer</td>
                        <td>:</td>
                        <td><?php echo $customer; ?></td>
                    </tr>
                    <tr>
                        <td>Produk</td>
                        <td style="padding-right:3em;">:</td>
                        <td><?php echo $produk; ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td><?php echo $jumlah; ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td><?php echo number_format($total,2,',','.'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>