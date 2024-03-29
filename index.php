<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>
    <!-- link태그로 style.css 파일 연결-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include "common/header.php";
    ?>
    <div id="container">
        <ul class="side_bar">
            <li>
                <a href="#">
                    <img src="img/insta.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="img/youtube.png">
                </a>
            </li><li>
                <a href="#">
                    <img src="img/twitter.png">
                </a>
            </li>
        </ul>
        <div class="visual_box">
            <video autoplay muted loop>
                <source src="img/tft_cinematic.mp4">
            </video>
            <div class="visual_text_box">
                <p class="small_title">ALL NEW GAMES ARE</p>
                <p class="big_title">ONLY IN GAMESPLAY</p>
                <p class="sub_text">
                    Spare ribs venison swine flank, ribeye pastrami jowl kielbasa han tongue meatloaf.<br>
                    Pork belly drumstick alcatra leberkas, venison picanha pork.
                </p>
                <a class="upcoming_btn" href="#">UPCOMING GAMES</a>
            </div>
        </div>
        <div class="upcoming_games">
            <div class="center">
                <p class="cont_title">
                    UPCOMING GAMES
                </p>
                <div class="upcoming_box clear_fix">
                    <div class="left">
                        <p class="mini_title">
                            NEW GAMES ACTION
                        </p>
                        <h3>FIFAL 2018</h3>
                        <p class="context space">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius<br>
                            mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum<br>
                            suspendisse ultrices gravida. Risus commodo viverra maecenas<br>
                            accumsan lacus vel facilisis. 
                        </p>
                        <p class="context">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius<br>
                            mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum<br>
                            suspendisse ultrices gravida. Risus commodo viverra maecenas<br>
                            accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur<br>
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                        </p>
                        <a class="readmore_btn" href="#">READ MORE</a>
                    </div>
                    <div class="right">
                        <div class="imgbox">
                            <img src="img/mario.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials">
            <div class="center">
                <p class="cont_title">
                    TESTIMONIALS
                </p>
                <div class="comment_wrap clear_fix">
                    <div class="list">
                        <div class="imgbox">
                            <img src="img/member01.png">
                        </div>
                        <p class="name">BIRDIE STEPHENS</p>
                        <p class="position">GAMER</p>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipi<br>
                            scing elit, sed do eiusmod tempor incididunt ut<br>
                            abore et dolore magna aliqua. Quis ipsum sus<br>
                            viverra maecenas accumsan lacus vel facilisis.
                        </p>
                        <div class="back_img">
                            <img src="img/playing.png">
                        </div>
                    </div>
                    <div class="list">
                        <div class="imgbox">
                            <img src="img/member02.png">
                        </div>
                        <p class="name">MIGUEL CARPENTER</p>
                        <p class="position">GAMER</p>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipi<br>
                            scing elit, sed do eiusmod tempor incididunt ut<br>
                            abore et dolore magna aliqua. Quis ipsum sus<br>
                            viverra maecenas accumsan lacus vel facilisis.
                        </p>
                        <div class="back_img">
                            <img src="img/playing.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <?php 
    include "common/footer.php";
   ?>
</body>
</html>