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
    <div class="top">
        <!-- <img src="./assets/img/bg.png" alt=""> -->
    </div>
    <!-- main -->
    <main class="index">
        <div class="main__step">
            <a href="#!" class="step__item active" id="step-link1">
                <span>
                    STEP01 <br>
                    開始時期
                </span>
            </a>
            <a href="#!" class="step__item" id="step-link2">
                <span>
                    STEP02 <br>
                    ポジション
                </span>
            </a>
            <a href="#!" class="step__item" id="step-link3">
                <span>
                    STEP03 <br>
                    スキル
                </span>
            </a>
            <a href="#!" class="step__item" id="step-link4">
                <span>
                    STEP04 <br>
                    テクノロジー
                </span>
            </a>
            <a href="#!" class="step__item" id="step-link5">
                <span>
                    STEP05 <br>
                    希望単金/エリア
                </span>
            </a>
            <a href="#!" class="step__item" id="step-link6">
                <span>
                    STEP06 <br>
                    ご連絡先
                </span>
            </a>
        </div>
        <div class="main__content main__content--pc">
            <div class="fit-content">
                <div class="content__title">
                    <p class="title__top"><span>STEP01</span></p>
                    <p class="title__main">ご希望の案件開始時期</p>
                </div>
                <div class="content__multi-text pc">
                    <p>※複数選択可</p>
                </div>
                <div class="content__main">
                    <div class="main__btns">
                        <div class="btn__line">
                            <div class="btn__item">今すぐ<span style="display: none;">,</span></div>
                            <div class="btn__item">1カ月～2カ月以内<span style="display: none;">,</span></div>
                            <div class="btn__item">3カ月～6カ月以内<span style="display: none;">,</span></div>
                            <div class="btn__item">1年以内<span style="display: none;">,</span></div>
                            <div class="btn__item">未定<span style="display: none;">,</span></div>
                        </div>
                        <div id="error-select"></div>
                    </div>
                </div>
                <div class="content__next">
                    <a href="#!" class="next__btn" id="next">次へ</a>
                </div>
            </div>
        </div>
        <div class="main__content main__content--sp">
            <div class="content__main">
                <div class="main__btns">
                    <div class="btn__line">
                        <div class="btn__item">今すぐ<span style="display: none;">,</span></div>
                        <div class="btn__item">1カ月～2カ月以内<span style="display: none;">,</span></div>
                    </div>
                    <div class="btn__line">
                        <div class="btn__item">3カ月～6カ月以内<span style="display: none;">,</span></div>
                        <div class="btn__item">1年以内<span style="display: none;">,</span></div>
                    </div>
                    <div class="fit-content">
                        <div class="btn__item">未定<span style="display: none;">,</span></div>
                    </div>
                    <div id="error-select-sp"></div>
                </div>
            </div>
            <div class="content__multi-text sp">
                <p>※複数選択可</p>
            </div>
            <div class="content__next">
                <a href="#!" class="next__btn" id="next-sp">次へ</a>
            </div>
        </div>
    </main>
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
        $(document).ready(function() {
            var error_select = `<p style="color: red; text-align: center;">※選択をお願いいたします</p>`;
            var step1 = localStorage.getItem('step1');
            if (step1 != '' && step1 != null) {
                var array = step1.split(',');
                for (var i = 0; i < array.length - 1; i++) {
                    var real = array[i] + ',';
                    $('.btn__item').each(function() {
                        if ($(this).text() == real) {
                            $(this).addClass('active');
                        }
                    })
                }
            }

            $('#next').click(function() {
                var step1 = '';
                step1 = $('.main__content--pc .btn__item.active').text();
                console.log(step1);
                if (step1 != '') {
                    localStorage.setItem('step1', step1);
                    location.href = 'step2.php';
                } else {
                    $('#error-select').html(error_select);
                }
            })

            $('#next-sp').click(function() {
                var step1 = '';
                step1 = $('.main__content--sp .btn__item.active').text();
                if (step1 != '') {
                    localStorage.setItem('step1', step1);
                    location.href = 'step2.php';
                } else {
                    $('#error-select-sp').html(error_select);
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var step1 = localStorage.getItem('step1');
            var step2 = localStorage.getItem('step2');
            var step3 = localStorage.getItem('step3');
            var step4 = localStorage.getItem('step4');
            var step5 = localStorage.getItem('step5');
            var name = localStorage.getItem('name');
            if ((step2 == '' && step1 == '') || (step2 == null && step1 == null)) {
                $('#step-link2').css('cursor', 'not-allowed');
            }
            if ((step3 == '' && step2 == '') || (step2 == null && step3 == null)) {
                $('#step-link3').css('cursor', 'not-allowed');
            }
            if ((step4 == '' && step3 == '') || (step3 == null && step4 == null)) {
                $('#step-link4').css('cursor', 'not-allowed');
            }
            if ((step5 == '' && step4 == '') || (step5 == null && step4 == null)) {
                $('#step-link5').css('cursor', 'not-allowed');
            }
            if ((name == '' && step5 == '') || (name == null && step5 == null)) {
                $('#step-link6').css('cursor', 'not-allowed');
            }
            $('#step-link2').click(function() {
                if ((step2 != '' || step1 != '') && (step2 != null || step1 != null)) {
                    location.href = 'step2.php';
                }
            })
            $('#step-link3').click(function() {
                if ((step3 != '' || step2 != '') && (step2 != null || step3 != null)) {
                    location.href = 'step3.php';
                }
            })
            $('#step-link4').click(function() {
                if ((step4 != '' || step3 != '') && (step3 != null || step4 != null)) {
                    location.href = 'step4.php';
                }
            })
            $('#step-link5').click(function() {
                if ((step5 != '' || step4 != '') && (step4 != null || step5 != null)) {
                    location.href = 'step5.php';
                }
            })
            $('#step-link6').click(function() {
                if ((name != '' || step5 != '') && (name != null || step5 != null)) {
                    location.href = 'step6.php';
                }
            })
        })
    </script>
</body>

</html>