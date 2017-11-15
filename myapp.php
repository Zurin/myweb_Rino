<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="css/utama.css">
    <link rel="stylesheet" href="css/akses_font.css">
</head>
<body>
    <div class="navbar">
        <ul>
            <li class="title"><i class="fa fa-user"></i> Curriculum Vitae</li>
            <li class="right"><a class="active" href="myapp.php"><i class="fa fa-file-code-o"></i> My App</a></li>
            <li class="right"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="card">
            <div class="row">
                    <h3 class="border-green"><i class="fa fa-square"></i> Aplikasi Hitung Bangun Ruang Balok</h3>
                    <div class="kol-4">
                        <div class="profile">
                            <img src="img/balok.jpg" align="center">
                        </div>
                    </div>
                    <div class="kol-4">
                        <div class="profile">
                            <br>
                            <div class="profile-content">
                                 <div class="form">
                                  <form action="myapp.php" method="post">
                                    <label for="panjang">Panjang Balok (m)</label>
                                    <input type="number" id="panjang" name="panjang" placeholder="Masukkan panjang balok" required="required">

                                    <label for="lebar">Lebar Balok (m)</label>
                                    <input type="number" id="lebar" name="lebar" placeholder="Masukkan lebar balok" required="required">

                                    <label for="tinggi">Tinggi Balok (m)</label>
                                    <input type="number" id="tinggi" name="tinggi" placeholder="Masukkan tinggi balok" required="required">                                    
                                  
                                    <input type="submit" name="hitung" value="Hitung">
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kol-4">
                        <div class="profile">
                            <h4 class="border-red" style="padding-top:10px; padding-bottom:10px;">Hasil</h4>
                            <div class="profile-content">
                                 <?php 
                                    if (isset($_POST['hitung'])) {
                                        $p = $_POST['panjang'];
                                        $l = $_POST['lebar'];
                                        $t = $_POST['tinggi'];
                                        $luas = 2 * ($p*$l + $p*$t + $l*$t);
                                        $volume = $p * $l * $t;
                                  ?>
                                    <div style="overflow-x:auto;">
                                        <table>
                                                <tr>
                                                    <th>Panjang</th>
                                                    <td>:</td>
                                                    <td><?php echo number_format($p, 0, ',', '.'); ?> m</td>
                                                </tr>
                                                <tr>
                                                    <th>Lebar</th>
                                                    <td>:</td>
                                                    <td><?php echo number_format($l, 0, ',', '.');; ?> m</td>
                                                </tr>
                                                <tr>
                                                    <th>Tinggi</th>
                                                    <td>:</td>
                                                    <td><?php echo number_format($t, 0, ',', '.');; ?> m</td>
                                                </tr>
                                                <tr>
                                                    <th>Luas Balok</th>
                                                    <td>:</td>
                                                    <td><?php echo number_format($luas, 0, ',', '.'); ?> m<sup>2</sup></td>
                                                </tr>
                                                <tr>
                                                    <th>Volume Balok</th>
                                                    <td>:</td>
                                                    <td><?php echo number_format($volume, 0, ',', '.'); ?> m<sup>3</sup></td>
                                                </tr>
                                        </table>
                                    </div>
                                  <?php } else { ?>
                                  <h3 align="center">Belum dilakukan penghitungan</h3>
                                  <?php } ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="footer">
            <p>
                &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Rino Ridlo Julianto
            </p>
    </div>
</body>
</html>