<?php
$conn = mysqli_connect('localhost', 'root', 'jykim9926', 'carnumbers');
var_dump($_POST);
$sql = "
    INSERT INTO topic
    (name, place, car_number, phone_number)
    VALUES(
        '{$_POST['C_name']}',
        '{$_POST['C_add3']}',
        '{$_POST['C_car']}',
        '{$_POST['C_phone']}'
    )
";
echo $sql;
$result = mysqli_query($conn, $sql);
if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
} else{
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>