<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>О приложении</title>
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
        <h1>О приложении</h1>
        
        <p>
            Согласно теории шести рукопожатий каждый человек опосредованно знаком с любым другим жителем планеты через цепочку общих знакомых, в среднем состоящую из пяти человек. Например, если у каждого человека есть порядка 100 знакомых, то знакомые его знакомых это уже 10000 человек (100 x 100) и это только второе рукопожатие. На третьем это будет уже один миллион человек! <br>
            Мы сделали мобильное приложение, которое создаст индивидуальное сообщество по контактам телефонной книги, чтобы в нужный момент, каждый из нас смог найти проверенного специалиста, обратиться за советом к своим знакомым и их друзьям. Обратится к тем, чьим рекомендациям можно довериться.                
        </p>

        <h2>Наша команда</h2>
        <p>Сервис ПоЗнакомым это проект компании <a href="http://softlab.su/">СофтЛаб</a>. Мы искренне верим, в то что создаем действительно полезный, удобный и безопасный сервис. Именно этими принципами мы руководствуемся принимая любое решение. </p>

        <p>Присылайте ваши замечания и пожелания и мы обязательно изучим их. Мы особенно благодарны за правдивые истории о том, как наш сервис оказался вам полезен в реальной жизни. Ничто не ободряет нас лучше, чем подобные истории! Вы всегда можете написать нам из мобильного приложения ПоЗнакомым (меню <i>Профиль</i> -> <i>Помощь</i> -> <i>Обратная связь</i>) или на электронную почту <a href="mailto:support@pz-app.com">support@pz-app.com</a><br><br>
           Спасибо, что используете наш сервис!<br>
		   Команда проекта ПоЗнакомым</p>
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