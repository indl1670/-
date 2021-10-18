<?php
$conn = mysqli_connect(
    '127.0.0.1', 
    'root', 
    'jykim9926', 
    'carnumbers');
$sql = "SELECT * FROM topic LIMIT 1000"; 
// select를 할때는 1억개의 데이터를 전체불러오는 불상사가 발생할 수 있으므로 LIMIT를 걸어주는게 안전하다
$result = mysqli_query($conn, $sql);
var_dump($result);
?>