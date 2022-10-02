<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php
    $mhs1 = ["nim" => "1911501193", "nama" => "anggi", "nilai" => 70];
    $mhs2 = ["nim" => "1912500590", "nama" => "ayu", "nilai" => 80];
    $mhs3 = ["nim" => "1911507721", "nama" => "Egj", "nilai" => 20];
    $mhs4 = ["nim" => "193215673", "nama" => "ningtyas", "nilai" => 50];
    $mhs5 = ["nim" => "191162536", "nama" => "Juleha", "nilai" => 50];
    $mhs6 = ["nim" => "191190234", "nama" => "sisca", "nilai" => 30];
    $mhs7 = ["nim" => "193125637", "nama" => "zahfira", "nilai" => 75];
    $mhs8 = ["nim" => "1972514890", "nama" => "hanafi", "nilai" => 10];
    $mhs9 = ["nim" => "32516278", "nama" => "fadhilah", "nilai" => 30];
    $mhs10 = ["nim" => "32516730", "nama" => "indra", "nilai" => 65];

    $kumpulanMahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7, $mhs8, $mhs9, $mhs10];
    $kumpulanJudul = ["NO", "NIM", "NAMA", "NILAI", "KETERANGAN", "GRADE", "PREDIKAT"];
    ?>
    <h1 class="text-center">Data Nilai Mahasiswa</h1>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <?php
                    foreach ($kumpulanJudul as $judul) { ?>
                        <th><?= $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kumpulanMahasiswa as $mahasiswa) {
                    $nim = $mahasiswa["nim"];
                    $nama = $mahasiswa["nama"];
                    $nilai = $mahasiswa["nilai"];

                    $keterangan = ($nilai >= 60) ? "Lulus" : "Gagal";

                    if ($nilai >= 90 && $nilai <= 100) {
                        $grade = "A";
                    } elseif ($nilai >= 80 && $nilai <= 90) {
                        $grade = "B";
                    } elseif ($nilai >= 70 && $nilai <= 80) {
                        $grade = "C";
                    } elseif ($nilai >= 60 && $nilai <= 70) {
                        $grade = "D";
                    } else {
                        $grade = "E";
                    }
                    switch ($grade) {
                        case 'A';
                            $predikat = "Memuaskan";
                        case 'B';
                            $predikat = "Baik";
                        case 'C';
                            $predikat = "Cukup";
                        case 'D';
                            $predikat = "Kurang";
                            break;
                        default;
                            $prdikat = "buruk";
                            break;
                    }
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $nim ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $nilai ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php
                $jumlahMahasiswa = count($kumpulanMahasiswa);
                $kumpulanNilai = array_column($kumpulanMahasiswa, 'nilai');
                $nilaiTerbesar = max($kumpulanNilai);
                $nilaiTerkecil = min($kumpulanNilai);
                $totalNilai = array_sum($kumpulanNilai);
                $rata2 = $totalNilai / $jumlahMahasiswa;

                $tfoot = [
                    "Nilai Terbesar" => $nilaiTerbesar,
                    "Nilai Terkecil" => $nilaiTerkecil,
                    "Rata-rata" => $rata2,
                    "Jumlah Mahasiswa" => $jumlahMahasiswa,
                ];

                foreach ($tfoot as $key => $value) { ?>
                    <tr>
                        <th colspan="4"><?= $key ?></th>
                        <th colspan="3"><?= $value ?></th>
                    </tr>
                <?php } ?>
            </tfoot>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"> </script>
</body>

</html>