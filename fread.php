<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pembacaan Data</h2>
    <?php
    $file='C:\\Teks.txt';
    if(file_exists($file))
    {
        $fo=fopen($file,"r");
        $isi=fread($fo,filesize("$file"));
        echo("Isi dari file <b> $file </b> adalah <b>\" $isi \" </b");
        fclose($fo);
    }else
    {
        echo("File <b> $file </b> tidak ada !");
    }
    ?>
</body>
</html>