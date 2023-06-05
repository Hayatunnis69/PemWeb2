
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>BMI Pasien</title>
    
</head>
<body>
    <div class="container">
        <h2>BMI Pasien</h2>
            <form method="POST" action="">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Berat Badan</label> 
                <div class="col-8">
                <input id="berat" name="berat" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Tinggi Badan</label> 
                <div class="col-8">
                <input id="tinggi" name="tinggi" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Umur</label> 
                <div class="col-8">
                <input id="umur" name="umur" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" required="required"> 
                    <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" required="required"> 
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
                <tr class="table-danger text-uppercase">
                    <th>nama</th>
                    <th>berat badan</th>
                    <th>tinggi badan</th>
                    <th>umur</th>
                    <th>jenis kelamin</th>
                    <th>Hasil BMI</th>
                    <th>Status BMI</th>
                </tr>
        <?php 
        if(isset($_POST['submit'])){
            require_once "class_bmi.php";
            
            //tangkap data dari form
            $nama = $_POST["nama"];
            $berat = $_POST["berat"];
            $tinggi = $_POST["tinggi"];
            $umur = $_POST["umur"];
            $jk = $_POST["jk"];

            // buat objek dari class bmi pasien
            $pasien = new bmi($nama, $berat, $tinggi, $umur, $jk);

        ?>
        <tr>
            <td><?= $nama; ?></td>
            <td><?= $berat; ?></td>
            <td><?= $tinggi; ?></td>
            <td><?= $umur; ?></td>
            <td><?= $jk; ?></td>
            <td><?= $pasien->hasilBMI(); ?></td>
            <td><?= $pasien->statusBMI(); ?></td>
                    
        </tr>
                <?php } ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>
</html>