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
    function random_number(){
        $sum=0;
        for($i=0;$i<=10;$i++){
           $sum+=rand(1,20);
        }
        echo "ผลรวม = ".$sum."<br>";
    }
    function summation(){
        $var = 5+2;
        echo $var."<br>";
    }
    function fullName($name,$lname){
        echo "ชื่อเต็ม :".$name.$lname."<br>";
    }
    function summary($num1,$num2){
        echo "ผลรวม :".($num1+$num2)."<br>";
    }
    function summy($arr){
        print_r ($arr);
        echo "<br>";
    }
    function summo($aoo){
        $sum=0;
        for($i=0;$i<count($aoo);$i++){
            $sum+=$aoo[$i];    
        }
        echo "SumArray = ".$sum."<br>";
    }
    function add(){
        $var = 10+20;
        return $var;
    }
    function addAll($var1,$var2){
        $sum=$var1+$var2;
        return $sum;
    }
    function summa($var){
        $sum = 0;
        for($i=0;$i<count($var);$i++){
            $sum+=$var[$i];
        }
        return $sum;
    }
    echo "แสดงผลลัพธ์<br>";
    random_number();
    summation();
    fullName("Moss","Pasathon");
    summary(10,20);
    $arr=array(10,20,30,40);
    summy($arr);
    summy(array(10,20,30));
    summo(array(1,2,3));
    $resault=add();
    echo "result = ".$resault;
    $varsum=addAll(10,20);
    echo "<br>";
    echo "varsum =".$varsum."<br>";
    $sum2=summa(array(10,20,30,40,50));
    echo "sum2 = ".$sum2."<br>";
    ?>
</body>
</html>