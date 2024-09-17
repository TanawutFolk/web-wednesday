<?php 
    session_start();
    include('server.php'); 
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amulet thailand official</title> <link rel="stylesheet" href="main.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="image/logo.png">
</head>
<body>
        <div class="container">
        <div class="header">
            <div class="header1">
                <a href="firstpage.php"><img src="image/logoindex.png" alt=""></a>
                <ul class="topright">
                    <li class="l2"><a href="cart.php">ตะกร้าสินค้า</a></li>
                    <li>|</li>
                    <li class="l3"><a href="firstpage.php?logout=<?php echo $_SESSION['username']; ?>">Logout</a></li>
                    <li>|</li>
                    <li class="l4">Logged in : <span><?php echo $_SESSION['username']; ?></span></li>
                </ul>
            </div>
            <div class="header2">
                <img src="image/header.gif" alt="">
            </div>
            <ul class="menu">
                <li class="m1"><a href="firstpage.php">กลับหน้าแรก</a></li>
                <li>|</li>
                <li class="m1"><a href="firstpage.php#howtobuy">วิธีเช่าบูชา</a></li>
                <li>|</li>
                <li class="m3"><a href="about.php#about">About</a></li>
                <li>|</li>
                <li class="m3"><a href="firstpage.php#contact">Contact</a></li>
            </ul>
        </div>
            <div class="headshop" id="headshop"></div>
            <div class="shop">
                <div class="topic">
                    เลือกซื้อ(Shop) <font>#page4</font>
                </div>
                <form action="search.php" method="get">
                <input type="text" placeholder="Search"  name="search_name" required>
                <input type="submit" name="search_btn" value="Enter">
                </form>
                <div class="content">
                    <div class="picture">
                        <img src="image/list/d01.png" alt="" id="c_pic">
                        <p>หลวงพ่อรวย ปาสาทิโก<br>รุ่น รวยเจริญไพศาล<br><button class="c1"
                                onclick="window.location.href='d01.php'">View!</button></p>
                    </div>
                    <div class="picture">
                        <img src="image/list/d02.png" alt="" id="c_pic2">
                        <p>หลวงพ่อคูณ ปริสุทโธ<br>รุ่น พระปิดตา ปริสุทโธ<br><button class="c1"
                                onclick="window.location.href='d02.php'">View!</button></p>
                    </div>
                </div>
            </div>
            <div class="change">
                <ul style="width: 15rem;">
                    <li class="l0"><button onclick="window.location.href='pagethree.php'"><</button></li>
                    <li class="l1"><button onclick="window.location.href='firstpage.php'">1</button></li>
                    <li class="l2"><button onclick="window.location.href='pagetwo.php'">2</button></li>
                    <li class="l3"><button onclick="window.location.href='pagethree.php'">3</button></li>
                    <li class="l4"><button>4</button></li>
                </ul>
            </div>
            <div class="footer">
            <div class="headerfooter">ติดต่อสอบถาม</div>
            <div class="contentfooter">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Gmail_Icon_%282013-2020%29.svg/2048px-Gmail_Icon_%282013-2020%29.svg.png" alt="">
                <p>: worawutavc@gmail.com</p>
                <img class="line" src="https://www.rinnotech.co.th/images/editor/LINE_logo.svg_1.png" alt="">
                <p>: worawutavc</p>
                <img src="https://i.pinimg.com/originals/7a/09/e3/7a09e3d2a15875ceb52e6eac215bd73b.png" alt="">
                <p>: 0927255199</p>
            </div>
            <p id="contact">© Amulet thailand official 2021 All Rights Reserved.</p>
            <div class="maybeyouwant">
            สิ่งที่คุณอาจจะสนใจ...<a href="visit/index.html">ClickMe</a>
        </div>
        </div>
        </div>
        <script>
            document.getElementById('c_pic').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic2').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic3').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic4').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic5').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic6').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic7').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic8').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic9').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic10').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic11').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic12').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
        </script>
</body>
</html>