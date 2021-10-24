<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <style>
            h2 {
                text-align: center;
                margin-top: 20px;
            }
            div {
                text-align: center;
            }
            button {
                font-weight: bolder;
                color: black;
                background-color: #ffcd4a;
                border: solid 2px #ffcd4a;
                padding: 10px;
                padding-left: 15px;
                padding-right: 15px;
            }
            button:hover {
                color: white;
                background-color: #ffcd4a;
                border: solid 3px #ffcd4a;
            }
            #T_date {
                width: 30%;
                height: 50px;
                padding-left: 20px;
                line-height: 50px;
                font-weight: 300;
            }
            #cus {
                width: 40%;
                height: 50px;
                padding-left: 20px;
                line-height: 50px;
                font-weight: 300;
            }
        </style>
    </head>
    <body>
        <header id="header_index">
            <div id="h_in">
                <div class="logo"><a href="index.php"><img src="PSMaker_logo.jpg" alt=""></a></div>
                <ul class="menu">
                    <li class="m1" style="color: rgb(255,205,74);">장애인차량 등록</li>
                    <li class="m2">장애인차량 조회</li>
                    <li class="m3">위반차량 조회</li>
                </ul>
            </div>
        </header>
        <div id="condition">
            <h2>장애인차량 등록</h2>
            <div style="margin-left: 38%; margin-top: 20px;">
                <hr width="40%" size="1" style="color: grey;">
            </div><br><br>
            <?php
                $conn = mysqli_connect('localhost', 'root', 'jykim9926', 'carnumbers');
                // var_dump($_POST);
                $sql = "
                    INSERT INTO topic2_disabled
                    (name, place, car_number, phone_number)
                    VALUES(
                        '{$_POST['C_name']}',
                        '{$_POST['C_add3']}',
                        '{$_POST['C_car']}',
                        '{$_POST['C_phone']}'
                    )
                ";
                $result = mysqli_query($conn, $sql);
                if($result === false){
                    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
                    error_log(mysqli_error($conn));
                } 
                else{
                    echo '성공했습니다. <br> <button><a href="index.php">돌아가기</a></button>';
                }
            ?>
            <br><br>
            <hr style="color: grey;">
        </div>
        <script>
            $(window).scroll(function(){
                var sct = $(window).scrollTop()
                if(sct>=230){
                    $("#header_index").css({backgroundColor:"#fff", borderBottom:"1px solid #000"}
                        )
                }else {
                    $("#header_index").css({"backgroundColor":"transparent", borderBottom:"1px solid #000"})
                }
            })
            $(window).scroll(function(){
                var gotop = $(window).scrollTop()
                if(gotop>=500){
                    $(".top_b").css({display:"block"})
                }else {
                    $(".top_b").css({display:"none"})
                }
            })
    
            $(".top_b").click(function(){
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            })
            $(".m2, .m3").hover(function(){
                $(this).css("color", "#ffcd4a");
            }, function(){
                $(this).css("color", "black");
            })
            $(".m1").click(function(){
                location.href = 'register.php';
            })			  
            $(".m2").click(function(){
                location.href = 'view.php';
            })
            $(".m3").click(function(){
                location.href = 'search.php';
            })
        </script>
    </body>
</html>

