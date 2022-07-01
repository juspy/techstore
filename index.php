<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techstore</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/media.css">
    <link rel="shortcut icon" href="/images/IMG_0004.png" type="image/x-icon">
    <link rel="stylesheet" href="libs/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    <header class="header">
        <div class="container">
            <span class="header__button fas"></span>
            <div class="header__content d-flex align-items-center">
                <div class="header__content-logo">
                    <a href="" class="header__logo-link">
                        <img src="images/techstore-2.png" alt="" class="header__logo-logo">
                    </a>
                </div>
                <div class="header__content-navbar">
                    <ul class="header__content-list align-items-center">
                        <a href="#about" class="header__content-link">
                            <li class="header__link-link">
                                О нас
                            </li>
                        </a>
                        <a href="#distributions" class="header__content-link">
                            <li class="header__link-link">
                                Дистрибьюции
                            </li>
                        </a>
                        <a href="#partners" class="header__content-link">
                            <li class="header__link-link">
                                Стать партнером
                            </li>
                        </a>
                        <a href="#footer" class="header__content-link">
                            <li class="header__link-link">
                                Контакты
                            </li>
                        </a>
                        <li class="header__link-link">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    RU
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/uz">UZ</a></li>
                                    <li><a class="dropdown-item" href="/en">EN</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__content">
            <section class="main__content-home">
                <div class="main__home-content">
                    <div class="main__home-logo">
                        <img src="images/techstore 1.png" alt="" class="main__home-logo-png">
                    </div>
                    <div class="main__home-title">
                        <h1 class="main__home-title-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, quas ullam? Doloribus deleniti ullam aut.
                        </h1>
                    </div>
                </div>
            </section>
            <section class="main__content-goods">
                <div class="main__goods-content">
                    <div class="container">
                        <div class="main__goods-icons d-flex flex-wrap">
                            <div class="main__icons-card">
                                <div class="main__goods-title">
                                    Доступность
                                </div>
                                <span class="main__goods-icons-availability fas">
                                </span>
                                <div class="main__goods-descr">
                                    Для удобства партнеров у нас есть два крупных склада в Ташкенте, один из них на рынке «Малика»
                                </div>
                            </div>
                            <div class="main__icons-card">
                                <div class="main__goods-title">
                                    Ассортимент
                                </div>
                                <span class="main__goods-icons-assortment fas"></span>
                                <div class="main__goods-descr">
                                    Мы занимаемся дистрибьюцией более 20 именитых брендов периферии и комплектующих
                                </div>
                            </div>
                            <div class="main__icons-card">
                                <div class="main__goods-title">
                                    Надежность
                                </div>
                                <span class="main__goods-icons-reliability far"></span>
                                <div class="main__goods-descr">
                                    Оставляя крупный заказ, вы можете всегда быть уверены что мы выполним его в срок
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main__content-about" id="about">
                <div class="main__about-content">
                    <div class="container">
                        <h2 class="main__about-title">
                            О нас 
                        </h2>
                        <div class="main__about-description">
                            <p class="main__about-description-descr">
                                Компания Techstore Distribution, основанная в 2020 году, является крупнейшим дистрибьютором фирменной периферии в Узбекистане. Главный офис и склад компании расположены в Ташкенте, в столице Узбекистана. На данный момент компания осуществляет дистрибуцию в области компьютерной техники, а именно компьютерной периферии и мониторов. 
                                Основным профилем деятельности Techstore является работа с компаниями и организациями-партнерами. Партнерами компании являются розничные сети, отдельные небольшие или крупные магазины, интернет-магазины, компьютерные клубы и многие другие. Для Techstore ключевыми ценностями являются эффективное сотрудничество, тесные отношения с партнерами, ориентация на развитие, поддержка и обратная связь. 
                                Techstore стремится устанавливать и развивать долгосрочные партнерские отношения как с известными брендами, так и с новыми молодыми компаниями.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main__content-distributions" id="distributions">
                <div class="main__distributions-content">
                    <div class="container">
                        <div class="main__distributions-title">
                            <h2 class="main__distributions-text">
                                Techstore распространяет в Узбекистане следующие бренды:
                            </h2>
                        </div>
                        <div class="row">
                        <div class="container">
                            <section class="logo-carousel slider " data-arrows="true">
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/hyper.png" class="main__distributions-img">
                                    <img src="images/ss.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/corsair1.png" class="main__distributions-img">
                                    <img src="images/razer.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/ducky.png" class="main__distributions-img">
                                    <img src="images/zowie.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/glorious.png" class="main__distributions-img">
                                    <img src="images/elgato.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/asus.png" class="main__distributions-img">
                                    <img src="images/am.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/rivacase.png" class="main__distributions-img">
                                    <img src="images/aoc.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/lian.png" class="main__distributions-img">
                                    <img src="images/fractal.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/BenQ-Logo.svg.png" class="main__distributions-img">
                                    <img src="images/Dell.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/evga.png" class="main__distributions-img">
                                    <img src="images/alien.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/xpg.png" class="main__distributions-img">
                                    <img src="images/msi-logo-1.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide d-flex flex-column">
                                    <img src="images/NZXT_logo.png" class="main__distributions-img">
                                    <img src="images/palit_logo-600x315.png" alt="" class="main__distributions-img">
                                </div>
                                <div class="main__distributions-card slide">
                                    <img src="images/seat.png" class="main__distributions-img">
                                </div>
                            </section>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main__content-partners" id="partners">
                <div class="main__partners-content">
                    <div class="container">
                        <div class="main__partners-title">
                            <h2 class="main__partners-text">
                                Хотите стать партнером?
                            </h2>
                        </div>
                        <div class="form__content d-flex justify-content-center flex-column align-items-center">
                        <form method="post" action="index.php" id="form" accept-charset="utf-8" class="main__partners-form d-flex flex-column" target="_blank">
                            <input type="email" name="email1" required placeholder="Ваш E-mail">
                            <input type="text" required name="company_name" placeholder="Ваша компания">
                            <input type="text" required name="phone" placeholder="Ваш номер телефона">
                            <input type="submit" class="main__partners-button" id="btn" name="submit">
                        </form>
                        </div>
                        <div class="main__partners-descr">
                            <p class="main__partners-descr-descr">
                                Заполните форму и мы обязательно свяжемся с вами!
                            </p>
                        </div>
                        <div id="result_form"></div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="footer" id="footer">
        <div class="footer__content">
            <div class="container">
                <div class="footer__navbar d-flex">
                    <div class="footer__content-logo">
                        <a href="" class="footer__logo-link">
                            <img src="images/techstore 1.png" alt="" class="footer__logo-logo">
                        </a>
                    </div>
                    <ul class="footer__content-list d-flex">
                        <a href="" class="footer__content-link">
                            <li class="footer__link-link">
                                О нас
                            </li>
                        </a>
                        <a href="" class="footer__content-link">
                            <li class="footer__link-link">
                                Дистрибьютеры
                            </li>
                        </a>
                        <a href="" class="footer__content-link">
                            <li class="footer__link-link">
                                Стать партнером
                            </li>
                        </a>
                        <a href="" class="footer__content-link">
                            <li class="footer__link-link">
                                Контакты
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="footer__info d-flex  align-items-center">
                    <div class="footer__info-adress">
                        <h3 class="footer__adress-title">
                            Головной офис
                        </h3>
                        <p class="footer__adress-adress">
                            Uzbekistan, Tashkent, Kichik Xalqa Yo’li, 13
                        </p>
                    </div>
                    <div class="footer__info-contacts">
                        <div class="footer__num">
                            <h4 class="footer__contacts-numtitle">
                                Наш номер
                            </h4>
                            <p class="footer__contacts-num">
                                +998 90 990 70 75
                            </p>
                        </div>
                        <div class="footer__email">
                            <h4 class="footer__contacts-emailtitle">
                                Остались вопросы?
                            </h4>
                            <p class="footer__contacts-email">
                                info@techstore.uz
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer__icons d-flex justify-content-center">
                    <a class="footer__icons-icon fab" href=""></a>
                    <a class="footer__icons-icon fab" href=""></a>
                    <a class="footer__icons-icon fab" href=""></a>
                </div>
                <div class="footer__text">
                    <h6 class="footer__text-about">
                        2022 ООО “Techstore”<br>Все права защищены.
                    </h6>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="libs/bootstrap.bundle.min.js"></script>
    <script src="ajax.js"></script>
    <script>
        $('.header__button').on('click', function () {
        $('.header__content-navbar').toggleClass('block-active');
        });
        $('.header__button').on('click', function () {
        $('.header__content-list').toggleClass('d-flex');
        });
        $('.header__button').on('click', function () {
        $('.header__content').toggleClass('height-block');
        });
        $(document).ready(function() {
        $('.logo-carousel').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
            }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
            }]
        });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</body>
</html>