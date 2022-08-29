<?php 
        //variabel
        $nPanjang = $_POST['namaPanjang'];

        $nPanggilan = $_POST['namaPanggilan'];

        $nim = $_POST['nim'];
        $int_nim = (int)$nim;

        $usia = $_POST['usia'];
        $int_usia = (int)$usia;

        $alamat = $_POST['alamat'];

        $tall = $_POST['tinggi'];
        $float_tall = (float)$tall;

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hasil</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>IDENTITAS DIRI</h1>
        <table>
                <tr>
                        <td>Nama Panjang</td>
                        <td>:</td>
                        <td><?php echo $nPanjang;?></td>
                </tr>
                <tr>
                        <td>Nama Panggilan</td>
                        <td>:</td>
                        <td><?php echo $nPanggilan;?></td>
                </tr>
                <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?php echo $int_nim;?></td>
                </tr>
                <tr>
                        <td>Usia</td>
                        <td>:</td>
                        <td><?php echo $int_usia." tahun"?></td>
                </tr>
                <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $alamat;?></td>
                </tr>
                <tr>
                        <td>Tinggi Badan</td>
                        <td>:</td>
                        <td><?php echo $float_tall." cm.";?></td>
                </tr>
        </table>
</body>
</html>