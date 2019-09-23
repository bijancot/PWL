<html>
<head>
<title>My Form</title>
</head>
<body>

<h3>Your form was successfully submitted!</h3>
<?php echo "UTS = ".$uts."<br/>";
echo "UAS = ".$uas."<br/>";
echo "TUGAS = ".$tugas."<br/>";
$this->load->helper('html');
if($uts<=0){
    echo "tidak lulus E";
}else {
    $Huas=($uas*40)/100;
$Huts=($uts*30)/100;
$Htugas=($tugas*30)/100;

$nilai= $Huas+$Huts+$Htugas;

echo "nilai dalam bentuk angka :".$nilai."<br/>";

if ($nilai>=85 && $nilai <=100)
{
    echo "Nilai dalam bentuk huruf A";
}
else if ($nilai>75 && $nilai <=84)
{
    echo "Nilai dalam bentuk huruf B";
}
else if ($nilai>60 && $nilai <=74)
{
    echo "Nilai dalam bentuk huruf C";
}
else if ($nilai>46 && $nilai <=59)
{
    echo "Nilai dalam bentuk huruf D";
}
else if ($nilai>0 && $nilai <=45)
{
    echo heading('Nilai dalam bentuk huruf E, TIDAK LULUS','1');
}
else
{
    echo "Nilai Yang Anda Inputkan Salah !! ";
}
}
?>


<p><?php echo anchor('pertemuan3/tugas', 'Try it again!'); ?></p>

</body>
</html>