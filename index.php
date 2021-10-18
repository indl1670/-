<?php
$conn = mysqli_connect(
    '127.0.0.1', 
    'root', 
    'jykim9926', 
    'carnumbers');

$sql = "SELECT * FROM topic LIMIT 1000"; 
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
    $list = $list."<li>{$row['name']}</li>";
}
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <title>PSMaker</title>
    </head>

    <body>
        <header id="header_index">
            <div id="h_in">
                <div class="logo"><a href="index.php"><img src="PSMaker_logo.jpg" alt=""></a></div>
                <ul class="menu">
                    <li class="m1">장애인차량 등록1</li>
                    <li class="m2">장애인차량 조회</li>
                    <li class="m3">위반차량 조회</li>
                </ul>
            </div>
        </header>
        <section id="index_main">
            <div class="main_pp" style="top: 0;">
                메인베너
            </div>
        </section>
        <section id="index_blank">
            <div class="blank" style="top: 0;">
                운영현황
            </div>
        </section>
        <section id="contact"> 
            <h3>오류 보고</h3>
            <form name="contactform" method="post" class="sub0503_wrap" width="100%" action="send.php">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr class="inline">
                        <td style="word-break:break-all" >
                            <input name="first_name"  type="text" class="ipt"   maxlength="50" required placeholder="이름">
                        </td>
                    </tr>
                    <tr class="inline">
                        <td style="word-break:break-all">
                            <input name="email"  type="text" class="ipt"   maxlength="80" required placeholder="답변받을 이메일주소">
                        </td>
                    </tr>
                    <tr class="inline">
                        <td style="word-break:break-all">
                            <input name="telephone"  type="text" class="ipt"   maxlength="30" required  placeholder="휴대폰 번호">
                        </td>
                    </tr>
                    <tr>
                        <td valign="bottom">
                            <textarea  name="comments" cols="50" rows="10" required  placeholder="내용"></textarea></td>
                    </tr>
                    <tr>
                        <td height="40" colspan="2" style="text-align:center">
                            <button class="btn_b02 btn" type="submit" value="전송하기" class="btn_submit">메일 보내기</button>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
		<!-- contact -->
		<footer id="index_footer">
			<div class="f_in">
				<div class="f_left">
					 <p class="f_addr">부산 금정구 부산대학로 63번길 2<br>
					 Tel. 010-5448-2069   E-mail. indl1670@naver.com   Phone. 010-5448-2069
					 <p class="f_copy">Copyright © www.PSMaker.com All rights reserved.</p>
				</div>
				 <ul class="f_right">
					<li><a href="">공지사항</a></li>
					<li><a href="">1:1문의</a></li>
					<li><a href="">제품소개</a></li>
				</ul>
			</div>
		</footer>
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
