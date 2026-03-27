<?php require_once 'pelanggan.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Laundry - Kelompok 9</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            font-size: 22px;
            border-bottom: 2px solid #4A90E2;
            padding-bottom: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }
        button:hover {
            background-color: #357ABD;
        }
        .result-box {
            margin-top: 25px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border-left: 5px solid #4A90E2;
            font-size: 14px;
            line-height: 1.6;
        }
        .reset-link {
            display: inline-block;
            margin-top: 10px;
            color: #4A90E2;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tugas Proyek PBO - Kelompok 9</h2>

    <form method="POST" action="">
        <input type="text" name="fname" placeholder="Firstname" required>
        <input type="text" name="lname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" rows="3" required></textarea>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Poin 02: Logic Form PHP (Menggunakan Class Pelanggan)
    if (isset($_POST['submit'])) {
        $mhs = new Pelanggan(
            $_POST['fname'], 
            $_POST['lname'], 
            $_POST['phone'], 
            $_POST['address']
        );
        
        // Poin 03: Menampilkan Data sesuai Instruksi PDF
        echo '<div class="result-box">';
        echo "<strong>" . $mhs->tampilkanNama() . "</strong><br>";
        echo $mhs->tampilkanKontak() . "<br>";
        echo "<a href='index.php' class='reset-link'>Reset Form</a>";
        echo '</div>'; 
    }
    ?>
</div>

</body>
</html> 