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
    $animal =array("cat","dog");
    print_r($animal);
    echo"<hr>";
    array_push($animal,"rat");
    print_r($animal);
    echo"<hr>";
    array_push($animal,"panda");
    print_r($animal);
    echo"<hr>";
    echo "ดึงข้อมูลออกจาก Array<br>";
    array_pop($animal);
    print_r($animal);
    echo"<hr>";
    array_pop($animal);
    print_r($animal);
    ?>
</body>
</html>