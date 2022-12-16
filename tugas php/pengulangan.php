<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, td, th{
            border : 1px solid;
            text-align: left;
            padding: 10px;
            border-collapse: collapse;
        }
        
        
    </style>
</head>

<body>
    

<?php
$mahasiswa=[
    [
        "nama" => "Rizky",
        "nim" => "12345",
        "jurusan" => "informatika",
        "email" =>"rizky@gmail.com",
        "nilai"=>90,
    ],
    [
        "nama" => "muhammad",
        "nim" => "12345",
        "jurusan" => "informatika",
        "email" =>"muhammad@gmail.com",
        "nilai"=>60,
    ],
    [
        "nama" => "ahmad",
        "nim" => "12345",
        "jurusan" => "informatika",
        "email" =>"ahmad@gmail.com",
        "nilai"=>80,
    ]
]
?>
 <table >
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td ><?= $mhs["nama"];?> </td>
                
                <td><?= $mhs["nim"];?></td>
                <td><?= $mhs["jurusan"];?></td>
                <td><?= $mhs["email"];?></td>
                <td><?= $mhs["nilai"];?></td>
                <td><?php if ($mhs["nilai"] > 60){
                    echo 'LULUS';
                }else{
                    echo 'TIDAK';
                }
                 ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>
