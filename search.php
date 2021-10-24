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
            #input {
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
                    <li class="m3" style="color: rgb(255,205,74);">위반차량 조회</li>
                </ul>
            </div>
        </header>
        <!-- <div id="condition">
            <h2>일자별 위반차량 조회</h2>
            <div style="margin-left: 38%; margin-top: 20px;">
                <hr width="40%" size="1" style="color: grey;">
            </div>
            <br><br>
            <form action="process_date_search.php" method="POST">
                <span><input id="T_date" name="T_date" placeholder="연도-월-일">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit">조회</button></span>
            </form>
            <br><br>
          </div> -->
          <div id="information">
            <h2>위반차량 조회</h2>
            <div style="margin-left: 38%; margin-top: 20px;">
                <hr width="40%" size="1" style="color: grey;">
            </div>
            <br><br>
            <form action="process_condition_search.php" method="POST">
                <span>
                    <select id="cus" name="cond1" style="vertical-align: middle; text-align-last: center; width: 145px; margin-left: 10px;"> 
                        <option value="">----------선택----------</option>
                        <option value="C_num">차량번호</option>
                        <option value="C_name">이름</option>
                        <option value="C_phone">연락처</option>
                        <option value="C_date">날짜</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="input" name="input">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit">조회</button> 
                </span>
            </form>
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