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
            <a href="#!" id="step-link5" class="step__item">
                <span>
                    STEP05 <br>
                    希望単金/エリア
                </span>
            </a>
            <a href="#!" id="step-link6" class="step__item active">
                <span>
                    STEP06 <br>
                    ご連絡先
                </span>
            </a>
        </div>
        <div class="main__content main__content--pc">
            <div class="fit-content">
                <div class="content__title">
                    <p class="title__top"><span>STEP06</span></p>
                    <p class="title__main">お名前・ご生年月日・<br class="sp">ご連絡先を<br class="sp">教えてください</p>
                </div>
                <div class="content__main">
                    <div class="main__form">
                        <div class="form__item">
                            <p class="form-label">お名前 <span class="badge">必須</span></p>
                            <div class="form-control">
                                <input type="text" id="name" class="name" placeholder="例）右腕太郎">
                                <div class="error-name"></div>
                            </div>
                        </div>
                        <div class="form__item">
                            <p class="form-label">ご年齢 <span class="badge">必須</span></p>
                            <div class="form-control">
                                <select id="age" class="age">
                                    <option value="">選択してください</option>
                                <?php
                                for ($i = 18; $i < 49; $i++) {
                                ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php
                                }
                                ?>
                                </select>
                                <div class="error-age"></div>
                            </div>
                        </div>
                        <div class="form__item">
                            <p class="form-label">メールアドレス <span class="badge">必須</span></p>
                            <div class="form-control">
                                <input type="text" id="email" class="email" placeholder="例）xxxxxx@gmail.com">
                                <div class="error-email"></div>
                            </div>
                        </div>
                        <div class="form__item">
                            <p class="form-label">電話番号 <span class="badge">必須</span></p>
                            <div class="form-control">
                                <input type="text" id="phone" class="phone" placeholder="例）090-1234-5678">
                                <div class="error-phone"></div>
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
                <img src="./assets/img/6-1.png" alt="">
            </figure>
            <figure class="person__right">
                <img src="./assets/img/6-2.png" alt="">
            </figure>
            <div class="person__bottom">
                <figure class="person__item">
                    <img src="./assets/img/person8-h.png" alt="">
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
                    <img src="./assets/img/person5-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person6-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person9-h.png" alt="">
                </figure>
                <figure class="person__item">
                    <img src="./assets/img/person2-h.png" alt="">
                </figure>
            </div>
        </div>
        <div class="main__content main__content--sp">
            <div class="content__main">
                <div class="main__form">
                    <div class="form__item">
                        <p class="form-label">お名前 <span class="badge">必須</span></p>
                        <div class="form-control">
                            <input type="text" id="name-sp" class="name" placeholder="例）右腕太郎">
                            <div class="error-name"></div>
                        </div>
                    </div>
                    <div class="form__item">
                        <p class="form-label">ご年齢 <span class="badge">必須</span></p>
                        <div class="form-control">
                            <select id="age-sp" class="age">
                                <option value="">選択してください</option>
                                <?php
                                for ($i = 18; $i < 49; $i++) {
                                ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="error-age"></div>
                        </div>
                    </div>
                    <div class="form__item">
                        <p class="form-label">メールアドレス <span class="badge">必須</span></p>
                        <div class="form-control">
                            <input type="text" id="email-sp" class="email" placeholder="例）xxxxxx@gmail.com">
                            <div class="error-email"></div>
                        </div>
                    </div>
                    <div class="form__item">
                        <p class="form-label">電話番号 <span class="badge">必須</span></p>
                        <div class="form-control">
                            <input type="text" id="phone-sp" class="phone" placeholder="例）090-1234-5678">
                            <div class="error-phone"></div>
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
            var errorMessage = '<p style="color: red; text-align: left;">※必須項目です</p>';
            var name = localStorage.getItem('name');
            var age = localStorage.getItem('age');
            var email = localStorage.getItem('email');
            var phone = localStorage.getItem('phone');

            $('.name').val(name);
            $('.age').val(age);
            $('.email').val(email);
            $('.phone').val(phone);

            $('#next').click(function() {
                if ($('#name').val() == '') {
                    $('.error-name').html(errorMessage);
                } else {
                    localStorage.setItem('name', $('#name').val());
                }
                if ($('#age').val() == '') {
                    $('.error-age').html(errorMessage);
                } else {
                    localStorage.setItem('age', $('#age').val());
                }
                if ($('#email').val() == '') {
                    $('.error-email').html(errorMessage);
                } else {
                    localStorage.setItem('email', $('#email').val());
                }
                if ($('#phone').val() == '') {
                    $('.error-phone').html(errorMessage);
                } else {
                    localStorage.setItem('phone', $('#phone').val());
                }

                if ($('#name').val() != '' && $('#age').val() != '' && $('#email').val() != '' && $('#phone').val() != '') {
                    console.log(localStorage.getItem('step1'), "step", localStorage.getItem('step2'), "step2")
                    $.ajax({
                        method: "post",
                        url: "mailto.php",
                        data: {
                            step1: localStorage.getItem('step1'),
                            step2: localStorage.getItem('step2'),
                            step3: localStorage.getItem('step3'),
                            step4: localStorage.getItem('step4'),
                            step5: localStorage.getItem('step5'),
                            station: localStorage.getItem('station'),
                            name: localStorage.getItem('name'),
                            email: localStorage.getItem('email'),
                            phone: localStorage.getItem('phone'),
                            age: localStorage.getItem('age'),
                        },
                        success: function() {
                            location.href = 'step7.php';
                        }
                    });
                }
            })
            $('#next-sp').click(function() {
                if ($('#name-sp').val() == '') {
                    $('.error-name').html(errorMessage);
                } else {
                    localStorage.setItem('name', $('#name-sp').val());
                }
                if ($('#age-sp').val() == '') {
                    $('.error-age').html(errorMessage);
                } else {
                    localStorage.setItem('age', $('#age-sp').val());
                }
                if ($('#email-sp').val() == '') {
                    $('.error-email').html(errorMessage);
                } else {
                    localStorage.setItem('email', $('#email-sp').val());
                }
                if ($('#phone-sp').val() == '') {
                    $('.error-phone').html(errorMessage);
                } else {
                    localStorage.setItem('phone', $('#phone-sp').val());
                }

                if ($('#name-sp').val() != '' && $('#age-sp').val() != '' && $('#email-sp').val() != '' && $('#phone-sp').val() != '') {
                    $.ajax({
                        url: "mailto.php",
                        method: "post",
                        data: {
                            step1: localStorage.getItem('step1'),
                            step2: localStorage.getItem('step2'),
                            step3: localStorage.getItem('step3'),
                            step4: localStorage.getItem('step4'),
                            step5: localStorage.getItem('step5'),
                            station: localStorage.getItem('station'),
                            name: localStorage.getItem('name'),
                            email: localStorage.getItem('email'),
                            phone: localStorage.getItem('phone'),
                            age: localStorage.getItem('age'),
                        },
                        success: function() {
                            location.href = 'step7.php';
                        }
                    });
                }
            })

            $('.next__btn--prev').click(function() {
                location.href = 'step5.php';
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var step2 = localStorage.getItem('step2');
            var step3 = localStorage.getItem('step3');
            var step4 = localStorage.getItem('step4');
            var step5 = localStorage.getItem('step5');
            var step1 = localStorage.getItem('step1');

            $('#step-link2').click(function() {
                location.href = 'step2.php';
            })
            $('#step-link3').click(function() {
                location.href = 'step3.php';
            })
            $('#step-link4').click(function() {
                location.href = 'step4.php';
            })
            $('#step-link5').click(function() {
                location.href = 'step5.php';
            })
            $('#step-link1').click(function() {
                location.href = 'index.php';
            })
        })
    </script>
</body>

</html>