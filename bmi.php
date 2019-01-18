<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aplikasi BMI (Body Mass Index)</title>
<style>
<body>
form {
    padding: 10px 20px;
}
</style>
</head>

<body>
<h1>Menghitung BMI</h1>

<?php
// Action form
if (isset($_GET['submit'])) {
    // Input form
    $nama        = $_GET['nama'];
    $kelamin    = $_GET['kelamin'];
    $tb            = $_GET['tb']/100;
    $bb            = $_GET['bb'];
    /* Rumus BMI adalah:
    BMI = BERAT BADAN / KUADRAT TINGGI BADAN
    */    
    // Hitung BMI
    $bmi = $bb/($tb*$tb);
    // Mencetak hasil
    echo '<div class="hasil">';
    echo "<h3> Hasil hitung BMI </h3>";
    echo "Nama Anda : $nama<br>";
    echo "Jenis kelamin : $kelamin<br>";
    echo "Tinggi Badan : $tb meter<br>";
    echo "Berat Badan : $bb kilogram<br>";
    echo "Hasil BMI Anda: ".number_format($bmi);
    echo "<br>";
    echo "Kesimpulan : ";

    if($bmi < 18) {
        echo "Anda mengalami under weight";
    }elseif ($bmi <= 25 ) {
        echo "Anda mengalami normal";
    }elseif ($bmi <= 27 ) {
        echo "Anda memiliki over weight";
    }elseif ($bmi > 27 ) {
        echo "Anda memiliki obesitas";
    }

    echo '</div>';
    echo "<br>";
    echo "<hr>";
}
?>

<form    methot="get" action="">
<b>Nama</b><br>
<input type="text" name="nama"><br><p>
<b>Jenis kelamin</b><br>
<input type="radio" name="kelamin" value="Laki-laki"/>Laki-laki<br>
<input type="radio" name="kelamin" value="Perempuan"/>Perempuan<br><p>
<b>Tinggi badan </b> <br>
<input type="text" size="5" name="tb">cm<br><p>
<b>Berat badan </b><br>
<input type="text" size="5" name="bb">kg<br><p>
<p></p>
<input type="submit" name="submit" value="Hitung BMI"><br>
<hr>
</form>
</body>
</html>