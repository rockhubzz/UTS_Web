<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rata-rata Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Rata-rata Nilai Siswa</h2>
        <?php
        $siswa = [
            "Budi" => 85,
            "Siti" => 90,
            "Andi" => 78,
            "Rina" => 88,
            "Dewi" => 95
        ];

        $total = 0;
        $jumlahSiswa = count($siswa);

        echo "<table>";
        echo "<tr><th>Nama</th><th>Nilai</th></tr>";

        foreach ($siswa as $nama => $nilai) {
            echo "<tr><td>$nama</td><td>$nilai</td></tr>";
            $total += $nilai;
        }

        $rataRata = $total / $jumlahSiswa;

        echo "</table>";
        echo "<p>Rata-rata nilai: <strong>$rataRata</strong></p>";
        ?>
    </div>
</body>
</html>
