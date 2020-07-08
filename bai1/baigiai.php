<?php
if(isset($a,$b)){
    $a=$_POST["soa"];
    $b=$_POST["sob"];
    if($a!=0){
        $x=-$b/$a;
    
        echo "Phương trình có nghiệm x= ".$x;
    }else{
        echo "Phương trình vô nghiệm";
    }
}else{
    echo"Bạn chưa nhập số";
}