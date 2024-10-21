<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Warna</title>
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
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Pemilihan Warna Favorit</h2>
        <form method="post">
            <label for="warna">Siapa yang suka warna:</label><br>
            <select name="warna" id="warna">
                <option value="Biru">Biru</option>
                <option value="Hijau">Hijau</option>
                <option value="Merah">Merah</option>
                <option value="Kuning">Kuning</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $warna = $_POST['warna'];
            echo "<p>Anda suka warna $warna.</p>";
        }
        ?>
    </div>
</body>
</html>
