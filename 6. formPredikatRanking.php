<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predikat dan Ranking</title>
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
        <h2>Predikat dan Ranking</h2>
        <?php
        $siswa = [
            "Budi" => 85,
            "Siti" => 90,
            "Andi" => 78,
            "Rina" => 88,
            "Dewi" => 95
        ];

        arsort($siswa); // Mengurutkan dari yang tertinggi

        function predikat($nilai) {
            if ($nilai >= 85) return "A";
            elseif ($nilai >= 75) return "B";
            elseif ($nilai >= 65) return "C";
            else return "D";
        }

        echo "<table>";
        echo "<tr><th>Nama</th><th>Nilai</th><th>Predikat</th></tr>";

        foreach ($siswa as $nama => $nilai) {
            echo "<tr><td>$nama</td><td>$nilai</td><td>".predikat($nilai)."</td></tr>";
        }

        echo "</table>";
        ?>
    </div>
</body>
</html>
