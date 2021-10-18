<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <style>
        form {
            text-align: center;
        }
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
        }
        button:hover {
            color: white;
            background-color: #ffcd4a;
            border: solid 3px #ffcd4a;
        }
        #btn {
            cursor: pointer;
            color: black;
            font-weight: bolder;
            background-color: #ffcd4a;
            border: solid 2px #ffcd4a;
            padding: 10px;
            padding-left: 15px;
            padding-right: 15px;
        }
        #btn:hover {
            color: white;
            background-color: #ffcd4a;
            border: solid 3px #ffcd4a;
        }
        #C_car, #C_name, #C_phone, #C_gender {
            width: 30%;
            height: 50px;
            padding-left: 20px;
            line-height: 50px;
            font-weight: 300;
        }
        #C_add1, #C_add2 {
            width: 8%;
            height: 50px;
            padding-left: 20px;
            line-height: 50px;
            font-weight: 300;
        }
        #C_add3 {
            width: 20%;
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
                    <li class="m3">위반차량 조회</li>
                </ul>
            </div>
        </header>
        <div id="add" class="select">
            <!--
            <h2>파일로 등록</h2>
            <div style="margin-left: 38%; margin-top: 20px;">
                <hr width="40%" size="1" style="color: grey;">
            </div>
            
            <br>
            
            <table>
                <form method="POST" action="process_create.php" enctype="multipart/form-data">
                    <span>
                        <div>
                            <input type="file" value="select_file" name="file">
                            <button type="submit">업로드</button>
                            <br>
                            <br>
                        </div>
                    </span>
                </form>
            </table>
    -->
            <form action="process_create.php" method="POST" >
                <h2>직접 등록</h2>
                <div style="margin-left: 38%; margin-top: 20px;">
                    <hr width="40%" size="1" style="color: grey;">
                    <div style="margin-top: 20px; margin-left: -60%; margin-bottom: 20px;">
                            <label for="C_name"><input type="text" id="C_name" name="C_name" placeholder="이름"></label>
                            <br><br>
                            <label for="C_car"><input type="text" id="C_car" name="C_car" placeholder="차량번호"></label>
                            <br><br>
                            <label for="C_phone"><input type="text" id="C_phone" name="C_phone" placeholder="휴대폰번호"></label>
                            <br><br>
                            <span>
                                <label for="C_gender"></label>
                                    <select id="C_gender" name="C_gender" style="vertical-align: middle; text-align-last: center;">
                                    <option value="">- - - - - - - - - - - - - - - - - - - - - - - -성별- - - - - - - - - - - - - - - - - - - - - - - -</option>
                                    <option value="Male">남</option>
                                    <option value="Female">여</option>
                                    </select>
                            </span>
                            <br><br>
                            <span>
                                <label for="C_address"></label>
                                    <select id="C_add1" name="C_add1" style="vertical-align: middle; text-align-last: center;">
                                        <option value="busan">부산</option>
                                    </select>
                                    <select id="C_add2" name="C_add2" style="vertical-align: middle; text-align-last: center;">
                                        <option value="">-----구-----</option>
                                        <option value="Haeundae">해운대구</option>
                                        <option value="Sooyoung">수영구</option>
                                        <option value="Dongnae">동래구</option>
                                    </select>
                                    <input type="add" id="C_add3" name="C_add3" placeholder="상세주소"></label>
                            </span>
                            <br><br>
                            
                    </div>
                </div>
                <br>
                <p class="button">
                    <input type="submit" value="등록" id="btn">
                    <input type="reset" value="취소"  id="btn" onclick="document.getElementsByClassName('show')[0].style.display='none'
                                                                document.getElementsByClassName('show')[1].style.display='none'
                                                                document.getElementsByClassName('show')[2].style.display='none'">
                </p>
                <br><br>
                <hr style="color: grey;">
            </form>
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
            $(".m1, .m2, .m3").hover(function(){
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