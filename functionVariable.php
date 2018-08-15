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
    $name="moss";
    $age="23";
    $city=array("moss",12,12.5);
    echo gettype($name);
    echo "<br>";
    var_dump($name);
    echo "<br>";
    var_dump($city);
    echo "<br>";
    for($i=0;$i<count($city);$i++){
        echo gettype($city[$i])."<br>";
    }
    ?>
</body>
</html>