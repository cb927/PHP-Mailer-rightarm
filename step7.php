<!-- HTMLコード -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <title>右腕.com｜ライトアーム株式会社</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./assets/img/logo.png" />

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./libs/slick/slick.css">
    <link rel="stylesheet" href="./libs/slick/slick-theme.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <!-- javascript -->
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./libs/slick/slick.min.js"></script>
    <script src="./assets/js/theme.js"></script>
</head>

<body>
    <!-- header -->
    <header class="index">
        <nav class="navbar">
            <div class="nav__logo">
                <img src="./assets/img/logo.png" alt="" class="logo__img">
                
            </div>
            <p class="nav__text">ITエンジニア専門 フリーランスエージェント</p>
        </nav>
    </header>
    <div class="top-last">
        <p class="top__text">
            アンケートにご協力いただき<br class="sp">ありがとうございました。<br>
            担当者よりご連絡させていただきます。
        </p>
    </div>
    <!-- footer -->
    <footer>
        <a href="http://rightarm.co.jp/%e3%83%97%e3%83%a9%e3%82%a4%e3%83%90%e3%82%b7%e3%83%bc%e3%83%9d%e3%83%aa%e3%82%b7%e3%83%bc/" class="footer__top"><span>プライバシーポリシー</span></a>
        <div class="footer__main">
            ライトアーム株式会社 <br>
            〒101-0042 <br class="sp"> 東京都千代田区神田東松下町17 <br class="sp">ニッテン神田ビル 7階<br>
            TEL:03-6260-8850<br>
            <span class="pc">https://rightarm.co.jp/</span>
        </div>
        <div class="footer__copyright">Copyright © Right Arm Co., Ltd.</div>
    </footer>
    <script>
        $(document).ready(function(){
            localStorage.setItem('step1', '');
            localStorage.setItem('step2', '');
            localStorage.setItem('step3', '');
            localStorage.setItem('step4', '');
            localStorage.setItem('step5', '');
            localStorage.setItem('station', '');
            localStorage.setItem('name', '');
            localStorage.setItem('age', '');
            localStorage.setItem('email', '');
            localStorage.setItem('phone', '');
        })
    </script>
</body>

</html>