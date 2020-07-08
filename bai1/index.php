
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
    <form action="" method ="post" enctype="multipart/form-data"> 
    Name: <input type="text" name="name"> <br>
    Student ID: <input type="text" name="id"> <br>
    <button type="submit" name="send" value="send">send</button>

    </form> 
    <?php
    if(!isset($_POST["name"],$_POST["id"])){
        echo "";
    }else{
        $name = $_POST["name"];
        $id = $_POST["id"];

        echo "<hr> <h1>Student Infor</h1><br> Name: ".$name."<br> Id: ".$id;
    }
    ?>

</body>
</html>
