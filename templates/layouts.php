<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']; ?></title>
    <link rel="stylesheet" href="vendors/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="page-header">
        <div class="container">
            <div class="wrapper">
                <a href="/" class="logo" title="На главную"><img src="img/logo.png" alt="Логотип" class="logo__img">На главную</a>
                <nav class="menu menu--header">
                    <button class="menu__button menu__button--open" title="Открыть меню">Открыть меню</button>
                    <div class="menu__wrapper">
                        <button class="menu__button menu__button--close" title="Закрыть меню">Закрыть меню</button>
                        <ul class="menu__list">
                            <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Услуги</a></li>
                            <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Портфолио</a></li>
                            <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Отзывы</a></li>
                            <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Вакансии</a></li>
                            <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Контакты</a></li>
                        </ul>
                        <div class="menu__contacts">
                            <span>Ростов-на-Дону, <br>Ленина, 21</span>
                            <a href="tel:+78632431510" class="menu__phone">8(863)243-15-10</a>
                        </div>
                    </div>
                </nav>
                <div class="page-header__contacts">
                    <a href="tel:+78632431510" class="page-header__phone">8(863)243-15-10</a>
                    <span class="page-header__address">Ростов-на-Дону</span>
                </div>
            </div>
        </div>
    </header>
    <main class="page-main">
        <section class="first-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <h1 class="first-section__title">Рекламно-информационное агентство</h1>
                        <p class="first-section__text">Будем рады, если Вы обратитесь в наше Агентство. Мы готовы
                            предложить Вам передовые решения для продвижения Вашего бизнеса.</p>
                        <form action="" class="callback">
                            <input type="tel" placeholder="Номер телефона" class="callback__input">
                            <button type="submit" class="callback__button">Обратный звонок</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="news-section">
            <div class="container">
        <?=$data['content']; ?>
        </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="wrapper">
                <a href="#" class="logo logo--footer" title="На главную"><img src="img/logo.png" alt="Логотип" class="logo__img">На главную</a>
                <nav class="menu menu--footer">
                    <ul class="menu__list">
                        <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Услуги</a></li>
                        <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Портфолио</a></li>
                        <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Отзывы</a></li>
                        <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Вакансии</a></li>
                        <li class="menu__item"><a href="javascript:void(0)" class="menu__link">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <script src="vendors/swiper/swiper.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>