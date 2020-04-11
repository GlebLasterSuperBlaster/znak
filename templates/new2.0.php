<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Основные отличия версии 2.0</title>
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
        <h1>Основные отличия версии 2.0</h1>
        
        <p><b>Доступность визитки.</b> В предыдущих версиях доступность визитки ограничивалась тремя рукопожатиями внутри сообщества её автора. В версии 2.0 визитки стали доступны всем пользователям сервиса. В предыдущей версии пользователь мог опубликовать визитку, чтобы просто заявить сообществу о своей профессиональной деятельности. В новой версии наличие визитки предполагает, что человек заинтересован в продвижении своих услуг и получении новых клиентов. Это основное концептуальное отличие. Поэтому мы могли изменить статус вашей визитки на «черновик». При желании вы можете опубликовать её повторно. Для этого откройте визитку на редактирование и снимите признак «Черновик».</p>
		<p><b>Запросы.</b> Видимость запросов не изменилась – они по-прежнему доступны только внутри сообщества знакомых.</p>
		<p><b>Единая лента.</b> Мы изменили подачу информации. В новой версии – визитки, публикации, запросы и отзывы сообщества отображаются в единой ленте. Помимо новых объектов, алгоритм выдачи в ленту старается показать визитки, максимально приближенные к вашему городу, содержащие хороший текст, публикации и отзывы. Все визитки и запросы теперь можно по посмотреть через поиск.</p>
		<p><b>Публикации.</b> В предыдущих версиях практически не было способа привлечь внимание к своей визитке. Добавление новых публикаций или фотографий проходило незаметно для других пользователей. В версии 2.0 новые публикации будут показаны в ленте у сообщества, а также у всех кто добавил визитку в избранное. Периодически создавая новые тематические публикации, вы сможете напоминать о своей визитке, рассказывать о новых работах, новостях и акциях.</p>
		<p><b>Поиск.</b> В новой версии поиск «переехал» в отдельное меню снизу. Для простоты мы объединили поиск визиток и запросов с возможностью фильтрации. Вы можете отбирать визитки, авторы которых находятся в вашем сообществе или имеют отзывы вашего сообщества.</p>
		<p>Присылайте ваши замечания и пожелания через форму обратной связи в приложении, либо по электронной почте на ящик <a href="mailto:support@pz-app.com">support@pz-app.com</a></p>
    </article><!-- /.container -->
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