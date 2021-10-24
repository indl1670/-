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
                    <li class="m1">장애인차량 등록</li>
                    <li class="m2">장애인차량 조회</li>
                    <li class="m3" style="color: rgb(255,205,74);">위반차량 조회</li>
                </ul>
            </div>
        </header>
        <div id="condition">
            <h2>일자별 위반차량 조회</h2>
            <div style="margin-left: 38%; margin-top: 20px;">
                <hr width="40%" size="1" style="color: grey;">
            </div>
            <br>
            <table cellspacing="25" style='margin-left: 34.5%; margin-top: 0px; margin-bottom: 10px;'>
                <th>이름</th>
                <th>주거지</th>
                <th>차량번호</th>
                <th>전화번호</th>
                <th>위반횟수</th>
                <th>최신위반날짜</th> 
            <?php
                $conn = mysqli_connect(
                    '127.0.0.1', 
                    'root', 
                    'jykim9926', 
                    'carnumbers');

                $sql = "SELECT * FROM topic WHERE date LIKE '{$_POST['T_date']}'"; 
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td align = 'center'>" . $row['name']."</td>";
                        echo "<td align = 'center'>" . $row['place']."</td>";
                        echo "<td align = 'center'>" . $row['car_number']."</td>";
                        echo "<td align = 'center'>" . $row['phone_number']."</td>";
                        echo "<td align = 'center'>" . $row['count']."</td>";
                        echo "<td align = 'center'>" . $row['date']."</td></tr>";
                    }}
                else{
                    echo "일치하는 데이터가 없습니다.";
                }
            ?>
            </table>
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
            $(".m1, .m2").hover(function(){
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