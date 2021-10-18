<?php
header('Content-Type:text/html;charset=utf-8');

if(!$conn = mysqli_connect('127.0.0.1', 'root', 'jykim9926')) echo "mysql 연결실패<br/>";
else echo "mysql 연결성공<br/>";

$conn = mysqli_connect(
    '127.0.0.1', 
    'root', 
    'jykim9926', 
    'carnumbers') or die("실패");
    
    $sql = "
    INSERT INTO topic
        (name, place, car_number, phone_number)
        VALUES(
            'parkim',
            'centun',
            '24938',
            '1036786354'
        );";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
    }
    
?>