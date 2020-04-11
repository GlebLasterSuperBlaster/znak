<?php

/*
/
/  Settings
/
*/

$redirects = [
  'iPhone' => 'https://apps.apple.com/ru/app/id1438625800',
  'Android' => 'https://play.google.com/store/apps/details?id=com.poznakomym'
];

$routes = [
  '/' => ['template' => 'index', 'footer' => FALSE, 'title' => ''],
  '/detail' => ['template' => 'detail', 'footer' => TRUE, 'title' => 'Описание сервиса ПоЗнакомым'],
  '/faq' => ['template' => 'faq', 'footer' => TRUE, 'title' => 'Часто задаваемые вопросы'],
  '/about' => ['template' => 'about', 'footer' => TRUE, 'title' => 'О нас'],
  '/terms-use' => ['template' => 'terms_use', 'footer' => TRUE, 'title' => 'Условия использования'],
  '/privacy-policy' => ['template' => 'privacy_policy', 'footer' => TRUE, 'title' => 'Политика конфиденциальности'],
  '/content-policy' => ['template' => 'content_policy', 'footer' => TRUE, 'title' => 'Правила размещения контента'],
  '/competition0819' => ['template' => 'competition0819', 'footer' => FALSE, 'title' => 'Условия конкурса'],
  '/reviews_power' => ['template' => 'reviews_power', 'footer' => FALSE, 'title' => 'Продвижение через отзывы'],
  '/true_reviews' => ['template' => 'true_reviews', 'footer' => FALSE, 'title' => 'Достоверность отзывов'],
  '/how_collect_reviews' => ['template' => 'how_collect_reviews', 'footer' => FALSE, 'title' => 'Как собирать отзывы'],
  '/new2.0' => ['template' => 'new2.0', 'footer' => FALSE, 'title' => 'Что нового в версии 2.0'],	
  '/redirect' => ['template' => '', 'footer' => FALSE, 'title' => ''],
  '/for_tel_operator' => ['template' => '', 'footer' => FALSE, 'title' => ''],
    '/write_review' => ['template' => 'write_review', 'footer' => True, 'title' => 'Отзыв'],
];

?>
