<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tahun Kabisat</title>
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
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Filter Tahun Kabisat</h2>
        <form method="post">
            <input type="number" name="tahun" placeholder="Masukkan Tahun" required>
            <input type="submit" value="Cek Kabisat">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tahun = $_POST['tahun'];

            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                echo "<p>$tahun adalah tahun kabisat.</p>";
            } else {
                echo "<p>$tahun bukan tahun kabisat.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
