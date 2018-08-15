<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $number = range(10,20);
    for($i=0;$i<count($number);$i++){
        echo $number[$i]."<br>";
    }
    echo "หลังการใช้การฟังก์ชัน<br>";
    $arre=array_reverse($number);

    for($i=0;$i<count($arre);$i++){
        echo $arre[$i]."<br>";
    }
    ?>
</body>
</html>