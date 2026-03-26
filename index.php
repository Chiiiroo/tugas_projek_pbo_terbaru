<?php require_once 'pelanggan.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Smart Laundry - Kelompok 9</title>
</head>
<body>
    <h2>Input Form</h2>
    <form method="POST">
        <input type="text" name="fname" placeholder="Firstname" required><br>
        <input type="text" name="lname" placeholder="Lastname" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <textarea name="address" placeholder="Address"></textarea><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        // Membuat Object dari Class Pelanggan
        $mhs = new Pelanggan($_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['address']);
        
        // Menampilkan hasil sesuai instruksi PDF
        echo "<b>" . $mhs->tampilkanNama() . "</b><br>";
        echo $mhs->tampilkanKontak();
        echo "<br><br><a href='index.php'>Reset</a>";
    }
    ?>
</body>
</html>