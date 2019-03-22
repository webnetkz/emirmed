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
                <a href="#">
                    <img src="/public/img/logoEmirmed.png" alt="logotype for Emirmed" class="logotype">
                </a>
                <ul class="menuHeader">
                    <li>
                        <a href="uslugi.php" class="menuLink">
                            Услуги
                        </a>
                    </li>
                    <li>
                        <a href="price.php" class="menuLink">
                            Цены
                        </a>
                    </li>
                    <li>
                        <a href="doctors.php" class="menuLink">
                            Врачи
                        </a>
                    </li>
                    <li>
                        <a href="clinik.php" class="menuLink">
                            Клиника
                        </a>
                    </li>
                    <li>
                        <a href="news.php" class="menuLink">
                            Новости
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="menuLink">
                            Контакты
                        </a>
                    </li>
                </ul>
            </header>

            <div id="content">

                <pre>





















































































































                </pre>
            </div>

            <footer>
                <a href="#">
                    <img src="/public/img/logoEmirmed.png" alt="logotype emirmed" class="footerLogotype">
                </a>
                <ul class="menuFooter">
                    <li>
                        <a href="uslugi.php" class="menuLink footerMenuItem">
                            Услуги
                        </a>
                    </li>
                    <li>
                        <a href="price.php" class="menuLink footerMenuItem">
                            Цены
                        </a>
                    </li>
                    <li>
                        <a href="doctors.php" class="menuLink footerMenuItem">
                            Врачи
                        </a>
                    </li>
                    <li>
                        <a href="clinik.php" class="menuLink footerMenuItem">
                            Клиника
                        </a>
                    </li>
                    <li>
                        <a href="news.php" class="menuLink footerMenuItem">
                            Новости
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="menuLink footerMenuItem">
                            Контакты
                        </a>
                    </li>
                </ul>
                <p class="date">
                    © 2019 Все права защищены.
                    <a href="#" class="indexLink">Emirmed</a>
                </p>
                <div id="footerContact">
                    <p class="footerContact">123</p>
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
        <script src="/public/scripts/main.js"></script>
    </body>
</html>