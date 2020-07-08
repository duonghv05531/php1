<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
</head>
<body>
    <form action="" method="post">
        Student Name: <input type="text" name="name"> <br>
        Student Id: <input type="text" name="id"> <br>
        Mark: <input type="number" name="mark"> <br> <br>
        <button type="submit" name="submit">Show result</button>
    </form>
    <?php

        if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $id=$_POST["id"];
            $mark=$_POST["mark"];
            if($mark<5){
                $result="Weak learning capacity";
            }elseif($mark<6.5){
                $result="Medium learning capacity";
            }elseif($mark<7.5){
                $result="Học lực khá";
            }elseif($mark<9){
                $result="Học lực giỏi";
            }else{
                $result="Học lực xuất xắc";
            }
        }else{
            echo "";
        }
    ?>
    <hr>
    <h1>Sudent info</h1>
    <?php
    
    if(isset($name,$id,$mark)){
        ?>
        
        <p>Student: <?=$name?> </p>
        <p>ID: <?=$id?></p>
        <p>Mark: <?=$mark?></p>
        <p>Học lực: <?=$result?> </p>
    <?php
    }
    ?>
</body>
</html>