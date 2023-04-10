<html>
<head>
<title> Pemrograman PHP dengan Array </title>
</head>
<body>
    <?php
    //penulisan array dapat dibuat seperti berikut
    $nama[] = "Nizar";
    $nama[] = "Maulana";
    $nama[] = "Arrasyid";
    echo $nama[0] . $nama[1] . $nama[2];
    echo "<br>";
    $jum_array = count($nama);
    echo "jumlah elemen array = ".$jum_array;
    ?>
</body>
</html>