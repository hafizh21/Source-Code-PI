<html>
<head>
<title>Kuis Online</title>
</head>
<body>
<?php
    $jawaban = array ("C","A","B","A","C","A","C","A","D","B");
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
    echo "Jumlah Jawaban Benar = ".$nilai."<br>";
    echo "Nilai Anda adalah ".$nilai*(10)."<br>";
    if ($nilai>7)
    {
        echo "Nilai Bagus";
    }
    elseif ($nilai>4)
    {
        echo "Nilai Cukup";
    }
    else
    {
        echo "Nilai Kurang";
    }
    
?>
</body>
</html> 