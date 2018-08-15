<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php
    echo "Condition";
    ?></title>
</head>
<body>
    <?php
     $scroll = 100;
     switch ($scroll){
         case 300:echo "300";
         break;
         case 400:echo "400";
         break;
         case 500:echo "500";
         break;
         default:echo "ไม่ตรงกับเคสไหนเลย";
     }
    // if ($scroll == 500){
    //     echo "ตัวเลขถูกต้อง";
    // }
    // else if($scroll==400){
    //     echo "ตัวเลขเท่ากับ 400";
    // }
    // else if($scroll==300){
    //     echo "ตัวเลขเท่ากับ 300";
    // }
    ?>
</body>
</html>