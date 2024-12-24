<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Karyawan</title>
</head>
<body>
    <h2>Program Hitung Gaji Karyawan</h2>
    <form method="post">
        <label for="jam_kerja">Jumlah Jam Kerja:</label>
        <input type="number" id="jam_kerja" name="jam_kerja" required>
        <br><br>
        <label for="tarif_per_jam">Tarif Per Jam:</label>
        <input type="number" id="tarif_per_jam" name="tarif_per_jam" required>
        <br><br>
        <button type="submit" name="submit">Hitung Gaji</button>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $jam_kerja = $_POST['jam_kerja'];
            $tarif_per_jam = $_POST['tarif_per_jam'];
        
            $jam_lembur = $jam_kerja > 40 ? $jam_kerja - 40 : 0;
            $gaji = $jam_kerja > 40 
                ? (40 * $tarif_per_jam) + ($jam_lembur * $tarif_per_jam * 1.5) 
                : $jam_kerja * $tarif_per_jam;
        
            echo "<h3>Hasil Perhitungan:</h3>";
            echo "Jumlah Jam Kerja: $jam_kerja jam<br>";
            echo "Tarif Per Jam: Rp $tarif_per_jam<br>";
            echo "Jam Lembur: $jam_lembur jam<br>";
            echo "Tarif Per Jam Lembur: Rp ".$tarif_per_jam * 1.5 ."<br>";
            echo "Total Gaji: Rp $gaji";
        }
    ?>
</body>
</html>
