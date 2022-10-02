<?php
require 'Pegawai.php';

// Array Multidimensi

$daftarPegawai = [
    [
        'nip' => 771234567,
        'nama' => 'Anggi Ayu Ningtyas',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Menikah'
    ],
    [
        'nip' => 881234567,
        'nama' => 'Maudy Ayunda',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Menikah'
    ],
    [
        'nip' => 991234567,
        'nama' => 'Nashila',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Menikah'
    ],
    [
        'nip' => 110991234,
        'nama' => 'Wahyu Desena',
        'jabatan' => 'Kabag',
        'agama' => 'Islam',
        'status' => 'Belum Menikah'
    ],
    [
        'nip' => 120991234,
        'nama' => 'Gita Gutawa',
        'jabatan' => 'Asmen',
        'agama' => 'Kristen',
        'status' => 'Menikah'
    ],
    [
        'nip' => 130991234,
        'nama' => 'Rosa Maulina ',
        'jabatan' => 'Staff',
        'agama' => 'Kristen',
        'status' => 'Belum Menikah'
    ],
    [
        'nip' => 140991234,
        'nama' => 'Lyodra Ginting',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Menikah'
    ],
    [
        'nip' => 150991234,
        'nama' => 'Tiara Andini',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Menikah'
    ],
    [
        'nip' => 160991234,
        'nama' => 'Mahalini Raharja',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Belum Menikah'
    ],
    [
        'nip' => 170991234,
        'nama' => 'Angga Yunanda',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Belum Menikah'
    ],
    [
        'nip' => 180991234,
        'nama' => 'Prilly ',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Menikah'
    ],
    [
        'nip' => 191234562,
        'nama' => 'Jerome',
        'jabatan' => 'Manager',
        'agama' => 'Islam',
        'status' => 'Menikah'
    ],
]

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anggi Ayu Ningtyas - PT. Anggi Ayu Ningtyas Sejahtera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid col-lg-12 bg-light p-4">
        <h1 class="text-center fs-2 mb-0 my-3"><?= Pegawai::PT ?></h1>
        <p class="text-center fs-4 mb-5">Menampilkan Data Pegawai Menggunakan Class & Object Class</p>

        <div class="row">
            <?php
            // Perulangan
            foreach ($daftarPegawai as $dpegawai) {
                $pegawai = new Pegawai($dpegawai['nip'], $dpegawai['nama'], $dpegawai['jabatan'], $dpegawai['agama'], $dpegawai['status']);
                $pegawai->cetak();
            }
            ?>
        </div><br>
        <h6 class="text-left p-1 mt-0 my-0 col-lg-3">JUMLAH PEGAWAI: <?= Pegawai::$no ?></h6>
    </div>

    <p class="text-center text-muted p-5 mt-0 my-0 bg-dark small">@anggiayuningtyas, 2022. All rights reserved</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>