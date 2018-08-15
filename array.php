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
    $name = array("มอส","ปิ่น","ฟลุ๊ค","นิค");
    $contry=array("TH"=>"THAILAND","EN"=>"ENGLAND","JP"=>"JAPAN");
    foreach($name as $moss){
        echo"$moss<br>";
    }
    echo "อาเรย์ตำแหน่งที่ 0 = ".$name[0]."<br>";
    print_r($name);
    echo "<br>";
    print_r($contry);
    echo "<br>";    
    echo $contry["TH"];
    echo "<br>";
    foreach($contry as $key=>$value){
        echo"คีย์ : $key"." หรือ $value<br>";
    }
    $countname=count($name);
    echo $countname;
    echo "<br>";
    for($i=0;$i<$countname;$i++){
        echo $name[$i]."<br>";
    }
    ?>
</body>
</html>