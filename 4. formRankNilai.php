<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Nilai</title>
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
        <h2>Ranking Nilai Siswa</h2>
        <?php
        $siswa = [
            "Budi" => 85,
            "Siti" => 90,
            "Andi" => 78,
            "Rina" => 88,
            "Dewi" => 95
        ];

        arsort($siswa); // Mengurutkan dari yang tertinggi

        echo "<table>";
        echo "<tr><th>Nama</th><th>Nilai</th></tr>";

        foreach ($siswa as $nama => $nilai) {
            echo "<tr><td>$nama</td><td>$nilai</td></tr>";
        }

        $nilaiTertinggi = max($siswa);
        $nilaiTerendah = min($siswa);

        echo "</table>";
        echo "<p>Nilai tertinggi: <strong>$nilaiTertinggi</strong></p>";
        echo "<p>Nilai terendah: <strong>$nilaiTerendah</strong></p>";
        ?>
    </div>
</body>
</html>
