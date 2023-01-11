<?php
$nama = isset($_POST['nama'])? $_POST['nama']:'';
$alamat = isset($_POST['alamat']) ? $_POST ['alamat'] :'';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nama : <?php echo $nama ?></h2>
    <h2>Alamat: <?php echo $alamat ?></h2>
</body>
</html>

<?php
echo "nama anda adalah $nama dan rumah anda di $alamat";?>