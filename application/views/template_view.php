<?php
    header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title><?=$title?></title>

    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <div class="header">
            <div class="header-layout">
                <div class="header-navigation">
                    <ul class="navigation-bar">
                        <li><a href="#">Обо мне</a></li>
                        <li><a href="#">Портфолио</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Блог</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- Container -->
    <div class="container">
        <!-- Подключаем контент -->
        <?php include 'application/views/'.$content_view; ?>
    </div>
    <!-- Container-end -->

    <!-- Footer -->
        <div class="footer">
            <div class="footer-layout">
                <span class="copyright">
                    Кот
                </span>
            </div>
        </div>

    <!-- Scripts -->
    <script src="../../js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>