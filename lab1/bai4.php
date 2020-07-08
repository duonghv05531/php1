<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        margin:0;
        padding:0;

    }
    h1,p{
        margin-left:15%;
    }
        .main{
        padding-top:10px;
        width:500px;
        margin: auto;
        }
        button{
            margin-left: 20%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="main">
    <h1>Bảng chọn</h1>
    <p>1:Cộng</p>
    <p>2:Trừ</p>
    <p>3:Nhân</p>
    <p>4:chia</p>
    <form action="" method="post">
        Number 1: <input type="number" name="nb1"> <br>
        Number 2: <input type="number" name="nb2"> <br>
        Switch: <input style="margin-left: 20px" type="number" placehodel="Nhập số tương ứng bảng chọn" name="sw"> <br>
        <button type="submit">Caculate</button>
    </form>
    <?php
        if(isset($result)){
            echo "<p>Result = ".$result."</p>";
        }
    ?>
    </div>
    
    <?php
    if(!isset($_POST["nb1"],$_POST["nb2"])){
        $result="điền số vào";
        die();
    }else{
        $a=$_POST["nb1"];
        $b=$_POST["nb2"];
        $sw=$_POST["sw"];
        switch($sw){
            case 1 :
                $result=$a+$b;
            break;
            case 2: 
                $result=$a-$b;
            break;
            case 3:
                $result=$a*$b;
            break;
            case 4:
                if($b==0){
                    echo "Can't devision for 0";
                break;
                }else{
                    $result=$a/$b;
                break;
                }
            default: 
                echo "pick from 1 to 4";
            break;
        }
    }
    ?>

</body>
</html>