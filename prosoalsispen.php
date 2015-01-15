<html>
<head>
<title>Kuis Online</title>
</head>
<body>
<?php
    $jawaban = array ("D","D","B","B","B","A","B","E","D","D");
    $nilai=0;
    $i=1;
    foreach ($jawaban as $jwb)
    {
        if($jwb == $_POST['soal_'.$i])
        {
            $nilai = $nilai+1;
            $i++;
        }
        else
        {
            $nilai = $nilai+0;
            $i++;
        }
    }
	echo "<h2><p align=center>Hasil Test</p></h2>";
    echo "<p align=center>Jumlah Jawaban Benar = ".$nilai."<br></p>";
    echo "<p align=center>Nilai Anda adalah ".$nilai*(10)."</p><br>";
    if ($nilai>7)
    {
		echo "<p align=center><img src=./sip.gif></p>";
        echo "<p align=center>Nilai Bagus</p>";
    }
    elseif ($nilai>4)
    {
		echo "<p align=center><img src=./ya.gif></p>";
        echo "<p align=center>Nilai Cukup</p>";
    }
    else
    {
		echo "<p align=center><img src=./no.gif></p>";
        echo "<p align=center>Nilai Kurang</p>";
    }
    
?>
</body>
</html> 