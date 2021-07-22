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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- javascript -->
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./libs/slick/slick.min.js"></script>
    <script src="./assets/js/theme.js"></script>
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="nav__logo">
                <img src="./assets/img/logo.png" alt="" class="logo__img">

            </div>
            <p class="nav__text">ITエンジニア専門 フリーランスエージェント</p>
        </nav>
    </header>
    <!-- main -->
    <main>
        <div class="main__step">
            <a href="#!" id="step-link1" class="step__item">
                <span>
                    STEP01 <br>
                    開始時期
                </span>
            </a>
            <a href="#!" id="step-link2" class="step__item">
                <span>
                    STEP02 <br>
                    ポジション
                </span>
            </a>
            <a href="#!" id="step-link3" class="step__item">
                <span>
                    STEP03 <br>
                    スキル
                </span>
            </a>
            <a href="#!" id="step-link4" class="step__item">
                <span>
                    STEP04 <br>
                    テクノロジー
                </span>
            </a>
            <a href="#!" id="step-link5" class="step__item active">
                <span>
                    STEP05 <br>
                    希望単金/エリア
                </span>
            </a>
            <a href="#!" id="step-link6" class="step__item">
                <span>
                    STEP06 <br>
                    ご連絡先
                </span>
            </a>
        </div>
        <div class="main__content main__content--pc">
            <div class="fit-content">
                <div class="content__title">
                    <p class="title__top"><span>STEP05</span></p>
                    <p class="title__main">ご希望単金と<br class="sp">最寄り駅を<br class="sp">教えてください</p>
                </div>
                <div class="content__multi-text pc">
                    <p>※複数選択可</p>
                </div>
                <div class="content__main">
                    <div class="main__btns">
                        <div class="btn__line">
                            <div class="btn__item">50~70万<span style="display: none;">,</span></div>
                            <div class="btn__item">70~90万<span style="display: none;">,</span></div>
                            <div class="btn__item">90~110万<span style="display: none;">,</span></div>
                        </div>
                        <div class="btn__line">
                            <div class="btn__item">130~150万<span style="display: none;">,</span></div>
                            <div class="btn__item">150万~<span style="display: none;">,</span></div>
                        </div>
                        <div id="error-select"></div>
                    </div>
                    <div class="main__form">
                        <div class="form__item">
                            <p class="form-label">最寄り駅 <span class="badge">必須</span></p>
                            <div class="form-control">
                                <input type="text" id="station" placeholder="例）東京駅">
                                <div class="error-station"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content__next">
                    <a href="#!" class="next__btn" id="next">次へ</a>
                    <a href="#!" class="next__btn next__btn--prev">戻る</a>
                </div>
            </div>
            <figure class="person__left">
                <img src="./assets/img/5-1.png" alt="">
            </figure>
            <figure class="person__right">
                <img src="./assets/img/5-2.png" alt="">
            </figure>
            <div class="person__bottom">
                <figure class="person__item">
                    <img src="./assets/img/person9-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person1-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person3-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person7-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person4-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person2-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person6-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person8-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person5-h.png" alt="">
                </figure>
            </div>
        </div>
        <div class="main__content main__content--sp">
            <div class="content__multi-text sp">
                <p>※複数選択可</p>
            </div>
            <div class="content__main">
                <div class="main__btns">
                    <div class="btn__line">
                        <div class="btn__item">50~70万<span style="display: none;">,</span></div>
                        <div class="btn__item">70~90万<span style="display: none;">,</span></div>
                    </div>
                    <div class="btn__line">
                        <div class="btn__item">90~110万<span style="display: none;">,</span></div>
                        <div class="btn__item">130~150万<span style="display: none;">,</span></div>
                    </div>
                    <div class="fit-content">
                        <div class="btn__item">150万~<span style="display: none;">,</span></div>
                    </div>
                    <div id="error-select-sp"></div>
                </div>
                <div class="main__form">
                    <div class="form__item">
                        <p class="form-label">最寄り駅 <span class="badge">必須</span></p>
                        <div class="form-control">
                            <input type="text" id="station-sp" placeholder="例）東京駅">
                            <div class="error-station-sp"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content__next">
                <a href="#!" class="next__btn" id="next-sp">次へ</a>
                <a href="#!" class="next__btn next__btn--prev">戻る</a>
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
            var errorMessage = '<p style="color: red; text-align: left;">※必須項目です</p>';
            var step5 = localStorage.getItem('step5');
            var station = localStorage.getItem('station');
            $('.form-control input').val(station);
            if (step5 != '' && step5 != null) {
                var array = step5.split(',');
                for (var i = 0; i < array.length - 1; i++) {
                    var real = array[i] + ',';
                    $('.btn__item').each(function() {
                        if ($(this).text() == real) {
                            $(this).addClass('active');
                        }
                    })
                }
            }

            $('.next__btn--prev').click(function() {
                location.href = 'step4.php';
            })

            $('#next').click(function() {
                var step5 = '';
                var station = '';
                step5 = $('.main__content--pc .btn__item.active').text();
                station = $('#station').val();
                if (step5 != '' && station != '') {
                    localStorage.setItem('step5', step5);
                    localStorage.setItem('station', station);
                    location.href = 'step6.php';
                } else {
                    if (step5 == '') {
                        $('#error-select').html(error_select);
                    }
                    if (station == '') {
                        $('.error-station').html(errorMessage);
                    }
                }
            })

            $('#next-sp').click(function() {
                var step5 = '';
                var station = '';
                step5 = $('.main__content--sp .btn__item.active').text();
                station = $('#station-sp').val();
                if (step5 != '' && station != '') {
                    localStorage.setItem('step5', step5);
                    localStorage.setItem('station', station);
                    location.href = 'step6.php';
                } else {
                    if (step5 == '') {
                        $('#error-select-sp').html(error_select);
                    }
                    if (station == '') {
                        $('.error-station-sp').html(errorMessage);
                    }
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var step2 = localStorage.getItem('step2');
            var step3 = localStorage.getItem('step3');
            var step4 = localStorage.getItem('step4');
            var step1 = localStorage.getItem('step1');
            var step5 = localStorage.getItem('step5');
            var name = localStorage.getItem('name');

            if ((name == '' && step5 == '') || (step5 == null && name == null)) {
                $('#step-link6').css('cursor', 'not-allowed');
            }

            $('#step-link2').click(function() {
                location.href = 'step2.php';
            })
            $('#step-link3').click(function() {
                location.href = 'step3.php';
            })
            $('#step-link4').click(function() {
                location.href = 'step4.php';
            })
            $('#step-link1').click(function() {
                location.href = 'index.php';
            })

            $('#step-link6').click(function() {
                if ((name != '' || step5 != '') && (step5 != null || name != null)) {
                    location.href = 'step6.php';
                }
            })
        })
    </script>
</body>

</html>