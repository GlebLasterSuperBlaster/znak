<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Как собирать отзывы?</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&amp;subset=cyrillic-ext" rel="stylesheet">     
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="/assets/js/plugins.js"></script>    
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
    <link rel="manifest" href="/assets/site.webmanifest">
    <link rel="mask-icon" href="/assets/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<!--[if lt IE 10]>
    <p class="browserupgrade">Вы используете <b>устаревший</b> браузер. Пожалуйста, <a href="http://browsehappy.com/?locale=ru_ru">обновите свой браузер</a> чтобы улучшить опыт работы с сайтом.</p>
<![endif]-->

<header class="container">    
    <a class="btn-back" href="/">&laquo;</a>    
</header>

<main>
    <article class="container art-serv text-indent">
<h1>Как отправить ссылку на получение отзыва</h1>
<p>Чтобы оставить отзыв, клиенту не обязательно устанавливать мобильное приложение и регистрироваться в сервисе. Вам достаточно отправить ему ссылку через любой мессенджер, электронную почту или СМС, перейдя по которой он сможет оставить отзыв. Чтобы переслать ссылку на отзыв проделайте следующее:
<ol>
<li>Перейдите в меню профиль - крайняя правая команда в главном меню снизу.</li>
<li>Найдите свою визитку для которой хотите получить отзыв и нажмите кнопку с тремя точками и выберите команду "Запросить отзыв"</>.</li>
<li>Выберите наиболее удобный вам способ отправки, например, СМС или email.</li>
<li>При необходимости отредактируйте пояснительный текст перед отправкой.</li>
</ol>
Когда клиент получит ссылку, он сможет перейти по ней и оставить отзыв к вашей визитке. Мы заботимся о достоверности отзывов, поэтому ему потребуется ввести имя и фамилию, подтвердить свой номер телефона, а также принять условия сервиса.
</article><!-- /.container --> </main7
</p>
</main>

<footer class="footer-site">
    <div class="container">
        <div class="row-footer">
            <div class="col-1">
                <small>&#169; <?php print date('Y'); ?> ООО СофтЛаб</small>
            </div><!-- /.col -->
            <nav class="col-2">
                <ul class="menu-footer">
				  <?php foreach ($routes as $path => $route) {?>
				    <?php if (isset($route['footer']) && TRUE == $route['footer']) {?>
                    <li class="menu-item"><a href="<?php print $path; ?>"><?php print $route['title']; ?></a></li>
					<?php }?>
				  <?php }?>
                </ul>
            </nav><!-- /.col -->
        </div><!-- /.row-footer -->
    </div><!-- /.container -->
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
