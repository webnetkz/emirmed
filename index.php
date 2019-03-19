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
                <ul class="menu">
                    <li>Услуги</li>
                    <li>Цены</li>
                    <li>Врачи</li>
                    <li>Клиника</li>
                    <li>Новости</li>
                    <li>Контакты</li>
                </ul>
            </header>

            <div id="content">
                all content
            </div>

            <footer>
                footer
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