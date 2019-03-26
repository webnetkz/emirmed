<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Emirmed</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(255, 255, 255)">
        <meta name="author" content="Emirmed">
        <meta name="description" content="Emirmed">
        <meta name="keywords" content="Emirmed">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/img/miniLogoEmirmed.png" type="image/png">
        <link rel="stylesheet" href="/public/styles/style.css">
        <link rel="stylesheet" href="/public/styles/mobileStyle.css">
        <link rel="manifest" href="/manifest.json">



    </head>

    <body>

        <div id="all">
            <header>
                
                <ul class="menuHeader">
                    <li>
                        <a href="#" class="menuLink">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="/pages/uslugi.php" class="menuLink">
                            Услуги
                        </a>
                    </li>
                    <li>
                        <a href="/pages/price.php" class="menuLink">
                            Цены
                        </a>
                    </li>
                    <li>
                        <a href="/pages/doctors.php" class="menuLink">
                            Врачи
                        </a>
                    </li>
                    <li>
                        <a href="/pages/clinik.php" class="menuLink">
                            Клиника
                        </a>
                    </li>
                    <li>
                        <a href="/pages/news.php" class="menuLink">
                            Новости
                        </a>
                    </li>
                    <li>
                        <a href="/pages/contact.php" class="menuLink">
                            Контакты
                        </a>
                    </li>
                </ul>

                <div class="blockLogo">
                    <a href="#">
                        <img src="/public/img/logoEmirmed.png" alt="logotype for Emirmed" class="logotype">
                    </a>
                </div>

            </header>

            <div id="content">
                <div id="slider">
                </div>
            </div>

            <footer>

                    <div id="footerStart">
                            <h3 class="contactHeader">Навигация по сайту:</h3>
                        <hr class="footer">
                    </div>

                <a href="#">
                    <img src="/public/img/logoEmirmed.png" alt="logotype emirmed" class="footerLogotype">
                </a>
                <p class="date">
                    © 2019 Все права защищены.
                    <a href="#" class="indexLink">Emirmed</a>
                </p>

                    <div id="footerEnd">
                            <h3 class="contactHeader">Контакты:</h3>
                        <hr class="footer">
                    </div>

            </footer>
        </div>


        <script>
             // Проверка на поддержку service worker
            if('serviceWorker' in navigator) {
                navigator.serviceWorker
                    .register('/sw.js')
                    .then(function() { console.log("Service Worker Registered"); });
            }
        </script>
        <script>
            // START SLIDER DESKTOP

            var bg = document.querySelector('#slider');

            function next() {
                setTimeout(function() {
                    bg.style.cssText =
                    `background: url(/slider/1.jpg) no-repeat;
                    background-size: 100%;
                    height: 100%;`;
                }, 0);

                setTimeout(function() {
                    bg.style.cssText =
                    `background: url(/slider/2.jpg) no-repeat;
                    background-size: 100%;
                    height: 100%;`;
                }, 5000);

                setTimeout(function() {
                    bg.style.cssText =
                    `background: url(/slider/3.jpg) no-repeat;
                        background-size: 100%;
                        height: 100%;`;
                }, 8000);
            }

            next();

            setInterval(next, 10000);

            // END SLIDER DESKTOP
        </script>
        <script src="/public/scripts/main.js"></script>
    </body>
</html>