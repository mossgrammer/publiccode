<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php
    echo "Sort Array";
    ?></title>
</head>
<body>
    <?php
    $contry =array("BK"=>"Bankok","UD"=>"Udontani","CB"=>"Chonburi");
    $food =array("ผลไม้","อาหารคาว","ของหวาน","ไอศกรีม","อาหารทะเล");
    echo "ก่อนการเรียงลำดับ<br>";
    echo"<pre>";
    for($i=0;$i<count($food);$i++){
        echo $food[$i]."<br>";
    }
    echo"</pre>";

    echo "เรียงจากน้อยไปมาก<br>";
    sort($food);
    echo"<pre>";
    for($i=0;$i<count($food);$i++){
        echo $food[$i]."<br>";
    }
    echo"</pre>";
    
    echo "เรียงจากมากไปน้อย<br>";
    rsort($food);
    echo"<pre>";
    for($i=0;$i<count($food);$i++){
        echo $food[$i]."<br>";
    }
    echo"</pre>";
    
    asort($contry);
    print_r($contry);
    echo"<br>";
    arsort($contry);
    print_r($contry);
    echo"<br>";
    ksort($contry);
    print_r($contry);
    echo"<br>";
    krsort($contry);
    print_r($contry);


    ?>
</body>
</html>