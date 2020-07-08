<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhập số cuối cùng: <input type="number" name="nb">
        <button type="submit" name="submit">Tính</button>
    </form>
    <?php
    if(isset($_POST["submit"])){
        $s=0;
        $n=$_POST["nb"];
        for($i=1;$i<$n+1;$i++){
           $s+=$i;
        }
        echo $s;

    }
    ?>

</body>
</html>