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
    $str = "moss";
    for($i=0;$i<strlen($str);$i++){
        echo "Hello<br>";
    }
    echo '$strมีความยาว ='.strlen($str)."<br>";
    echo "strtoupper =".strtoupper($str)."<br>";
    echo "strtolower =".strtolower($str)."<br>";
    echo "ucwords =".ucwords($str)."<br>";
    echo "ucfirst =".ucfirst($str)."<br>";

    $srt="        mossgrammer          ";
    echo '$strมีความยาว ='.strlen($srt)."<br>";
    $trim = trim($srt);
    echo "trim มีความยาว =".strlen($trim)."<br>";
    $trim = ltrim($srt);
    echo "ltrim มีความยาว =".strlen($trim)."<br>";
    $trim = rtrim($srt);
    echo "rtrim มีความยาว =".strlen($trim)."<br>";

    $arr=array("thai","loa","japan");
    $pang=implode(",",$arr);
    echo $pang."<br>";

    ?>
</body>
</html>