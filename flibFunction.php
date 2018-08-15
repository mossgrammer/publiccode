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
    $room=array("A1"=>"60","B2"=>"50","B1","60");
    print_r ($room);
    echo"<br>หลังใช้งานฟังก์ชัน<br>";
    $flipvar=array_flip($room);
    print_r ($flipvar);

    ?>
</body>
</html>