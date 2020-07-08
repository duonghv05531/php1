<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Giải phương trình bậc 1</h1>
        <h1>Please fill the number</h1><br>
        Number 1: <input type="number" name="nb1"> <br>
        Number 2: <input type="number" name="nb2"> <br>
        <button type="submit">Caculate</button>
    </form>
    <?php
    
    if(isset($_POST["nb1"],$_POST["nb2"])){
        $a=$_POST["nb1"];
        $b=$_POST["nb2"];
        if($b==0){
            $result = "The equation has countless solutions";
        }else{
            $result=-$b/$a;
        }
    }else{
        echo"Please fill the number";
    }
    ?>
    <hr>
    <h1>Result</h1>
    <?php

    if(isset($_POST["nb1"],$_POST["nb2"])){
    echo "<p> Equation: ".$a."x + (".$b.") = 0 has a solutions is: ".$result;
    }
    ?>
</body>
</html>