<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://kit.fontawesome.com/09b768fcd3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/write_review.css">
    <script src="/assets/js/count_letter.js"></script>
    <script src="/assets/js/star_select.js"></script>
    <title>Оставьте отзыв</title>
</head>
<body>

<div class="container">
    <div class=" header">
        <div class="container-logo-label">
            <div class="logo">

            </div>
            <div class="label">
                ПоЗнакомым – рекомендательный сервис
            </div>
        </div>
    </div>
    <div class="container-write-review">
        <div class="text-write-review">
            Напишите отзыв
        </div>
        <div class="border-write-review">
            <div class="text-review-mark">
                Отзыв и оценка
            </div>
            <div class="label-review">
                Вы собираетесь оставить озыв к визитке специалиста:
            </div>
            <div class="specialist-card">
                <div class="blue-box"></div>
                <div class="picture-specialist">
                    <img src="../assets/img/specialist_photo.png" alt="specialist photo" class="specialist-photo">
                </div>
                <div class="description-specialist">
                    <span class="specialist-name">Александр Миловидов</span>
                    <span class="specialist-location"><img src="../assets/img/ic.svg" alt="location"
                                                           class="location-sign">Россия, Санкт-Петербург</span>
                    <span class="specialist-description-services">Пешие и водные походы. Туристические маршруты любой сложности</span>
                </div>
            </div>
            <div class="container-text-on-rewiew">
                <div class="text-label-rewiew">Отзыв <span class="star-style">&nbsp*</span></div>
                <div class="text-label-rewiew-count">0/60</div>
            </div>

            <div class="container-select-and-button">
                <form class="custom-form">
                    <div class="textarea-direction"><textarea class="rewiew-textarea"
                                                              placeholder="Опишите насколько вы остались удовлетворены услугами. Опишите плюсы и минусы. Не следует писать малоинформативные отзывы, например «мне все понравилось» или «все хорошо»."></textarea>
                    </div>
                    <div class="container-text-under-rewiew">
                        <div class="text-label-rewiew">Оценка <span class="star-style">&nbsp*</span></div>
                    </div>
                    <div class="select-and-button-direction">
                        <select name="mark" class="mark-select">
                            <option value="s1" selected>1 - очень плохо</option>
                            <option value="s2">2 - плохо</option>
                            <option value="s3">3 - удовлетворительно</option>
                            <option value="s4">4 - хорошо</option>
                            <option value="s5">5 - отлично</option>

                        </select>
                        <div class="selected-element">
                            <div class="mark-number">1.0&nbsp</div>
                            <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i></div>
                        <input type="submit" class="form-button" value="Далее">
                    </div>
                </form>
            </div>


        </div>
        <div class="text-require-filds">
            Поля обязательные для заполнения <span class="star-style">&nbsp*</span>
        </div>

        <div class="prize-draw-conteiner">

            <div class="text-prize">
                <div class="bold-text-prize">Розыгрыш Air Pods
                    от сервиса ПоЗнакомым!
                </div>
                <div class="text-prize-normal">
                    Участвует каждый, кто оставил отзыв в сервисе
                    ПоЗнакомым. Спеши! Предложение ограничено.
                </div>
                <div class="link-text-prize"><a href="/" class="prize-link">Подробнее об условиях</a></div>

            </div>

            <div class="picture-prize">
            </div>
        </div>


    </div>
    <div class="footer">
        <div class="footer-copyright">
            &copy PoZnakomim LTD
        </div>
        <div class="footer-text">ПоЗнакомым - рекомендательный сервис</div>
        <div class="footer-link"><a href="http://pz-app.com" class="footer-link">http://pz-app.com</a></div>

    </div>
</div>


</body>
</html>

