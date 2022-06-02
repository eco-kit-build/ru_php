<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-height,initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./shrift/shrifts.css">
    <link rel="stylesheet" href="./css/gallery.css">
    <link rel="stylesheet" href="./css/questions.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/price.css">
    <link rel="stylesheet" href="./css/kontakt.css">
    <link rel="stylesheet" href="./css/language.css" type="text/css">
    <title>ECO KIT</title>
</head>
<body>
<div class="secret_box"></div>
<div class="select_language">
    <ul>
        <li><div class="text_ul">ВЫБРАТЬ ЯЗЫК</div>
            <ul>
                <li><a href="index.html">RUSSIAN<div class="flag_icon_1"></div></a></li>
                <li><a href="./html/index_english.html">ENGLISH<div class="flag_icon_2"></div></a></li>
            </ul>
        </li>
    </ul>
</div>
    <div class="first_page" id="first_page">
        <div class="header_secret"></div>
        <header class="header">
            <div class="logo_box">
                <a href="#first_page"><img src="./images/logo.png" alt="" class="logo"></a>
            </div>
            <div class="burger">
                <span></span>
            </div>
            <nav class="nav">
                <a href="#gallery_page" class="header_link"><div class="box_header_link">СТРОЙКА</div></a>
                <a href="#price" class="header_link"><div class="box_header_link">ЦЕНЫ</div></a>
<!--                <a href="#questions" class="header_link"><div class="box_header_link">ВОПРОСЫ</div></a>-->
                <a href="#five" class="header_link"><div class="box_header_link">КОНТАКТЫ</div></a>
            </nav>
        </header>
        <div class="text_block_hello">
            <div class="title">
                <p>ECO KIT</p>
            </div>
            <div class="text_information">
                <p>
                    КАЧЕСТВЕННАЯ СТРОЙКА ПО КАНАДСКОЙ ТЕХНОЛОГИИ
                </p>
            </div>
        </div>
        <div class="blocks_information">
            <div class="box_text">
                <div class="title_box_1">
                    <p>◯ Технологии ◯</p>
                </div>
                <div class="text_information_box_1">
                    <p>Наши уникальные технологии проектирования
                        и стилистические приёмы позволяют возводить
                        загородные дома в соответствиии с последними
                        тенденциями в области комфорта и энергобаланса</p>
                </div>
            </div>
            <div class="box_text">
                <div class="title_box_2">
                    <p>◯ Ваши желания ◯</p>
                </div>
                <div class="text_information_box_2">
                    <p>Мы учитываем ваши пожелания, в удобных планировках
                        подбираем материалы и качественные инженерные
                        системы. Вы сможете начать проектирование вашего
                        дома мечты, уже сейчас!</p>
                </div>
            </div>
<!--            <div class="box_text">-->
<!--                <div class="title_box_3">-->
<!--                    <p>◯ ....... ◯</p>-->
<!--                </div>-->
<!--                <div class="text_information_box_3">-->
<!--                    <p>........</p>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
    <div class="second_page" id="gallery_page">
        <section class="gallery">
            <h2 class="title">ПРОЦЕСС СТРОЙКИ</h2>
            <div class="gallery-list">
                <a href="./Gallery/1.jpg" class="gallery-item">
                    <div class="gallery-item-hover">Посмотреть</div>
                    <img src="./Gallery/1.jpg" alt="alt">
                </a>
                <a href="./Gallery/2.jpg" class="gallery-item">
                    <div class="gallery-item-hover">Посмотреть</div>
                    <img src="./Gallery/2.jpg" alt="alt" class="photo_problem">
                </a>
                <a href="./Gallery/3.jpg" class="gallery-item">
                    <div class="gallery-item-hover">Посмотреть</div>
                    <img src="./Gallery/3.jpg" alt="alt" class="photo_problem">
                </a>
                <a href="./Gallery/4.jpg" class="gallery-item">
                    <div class="gallery-item-hover">Посмотреть</div>
                    <img src="./Gallery/4.jpg" alt="alt">
                </a>
                <a href="./Gallery/5.jpg" class="gallery-item">
                    <div class="gallery-item-hover">Посмотреть</div>
                    <img src="./Gallery/5.jpg" alt="alt">
                </a>
                <a href="./Gallery/6.jpg" class="gallery-item">
                    <div class="gallery-item-hover">Посмотреть</div>
                    <img src="./Gallery/6.jpg" alt="alt">
                </a>
                <a href="./Gallery/7.jpg" class="gallery-item">
                    <div class="gallery-item-hover">Посмотреть</div>
                    <img src="./Gallery/7.jpg" alt="alt">
                </a>
                <a href="./Gallery/8.jpg" class="gallery-item">
                    <div class="gallery-item-hover">Посмотреть</div>
                    <img src="./Gallery/8.jpg" alt="alt">
                </a>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
        <script>
            $(".gallery-list").magnificPopup({
                delegate: "a",
                type: "image",
                gallery: {
                    enabled: true
                }
            });
        </script>
    </div>
<div class="third_page" id="price">
    <div class="left_block_price">
        <h2 class="title_price">ЦЕНЫ И УСЛУГИ</h2>
        <p>
            Компания «Eco Kit» г. Иркутск предлагает к
            продаже баню из зимнего леса. <br><br> Диаметр бревен
            26-28 мм в вершине. Размер бани 6х6 метров.
            По осям 5100х5100 мм. Баня изготовлена методом
            ручной рубки по канадской технологии со
            скрайбингом. <br><br>Нижние два венца сруба из сибирской
            лиственницы, остальные ангарская сосна. Проектом
            предусмотрено два уровня перекрытий. <br><br>На первом
            стандартное размещение парной, помещение душевой
            и комнаты отдыха с вторым светом. <br><br>Второй уровень
            мансардного типа для размещения спальных мест.
            Фундамент ленточный ж\б мелкого заложения. <br><br>Полы
            первого уровня бетонные, утепленные, с возможностью
            устройства водяного теплого пола. Утепление
            кровли в уровне стропил с устройством вент зазора
        </p>
    </div>
    <div class="right_block_price">
        <h2 class="title_price2">
            Стоимость бани 1.850.000 руб. В цену входит:
        </h2>
        <ul class="ul_price">
            <li>Комплект сруба из бревен с устройством силового
                каркаса кровли из бревна и обсадными коробками проемов</li>
            <li> Устройство железобетонного ленточного фундамента</li>
            <li>Монтаж сруба на фундамент</li>
            <li>Устройство кровли из Битумной черепицы Docke</li>
            <li>Устройство приточно-вытяжной вентиляции</li>
            <li>Утепление кровли базальтовым утеплителем</li>
            <li>Устройство перегородок</li>
            <li>Устройство перекрытия из бруса</li>
            <li>Устройство бетонных полов с утеплением</li>
            <li>Утепление цоколя</li>
            <li>Устройство ж\б отмостки по периметру</li>
            <li>Шлифовка и антисептирование сруба</li>
        </ul>
    </div>
    <div class="button_price">
        <p>В цену не входит доставка сруба и материалов к месту строительства <br><br>
            Стоимость указана для г. Иркутска <br>
            Возможна доставка и строительство бани в любой город России <br><br>
            Также возможно выполнение всех работ по строительству и
            отделке бани «под ключ», корректировка проекта по вашим
            пожеланиям, выполнение дизайн проекта</p>
    </div>
</div>
<div class="fourth_page" id="questions">
    <div class="title_question">
        <h2 class="title_qest">ВОПРОСЫ</h2>
        <div class="text_qest">
            <p>
                Вам представлены часто задаваемые вопросы,
                касательно нашей работы. Если у вас есть вопрос,
                которого нету в списке, вы можете задать его
                нашему специалисту. Ответ придёт на электронную
                почту, которую вы укажите
            </p>
        </div>
        <div class="line_button">
            Будущая кнопка
        </div>
        <div class="button">
            Отправить
        </div>
    </div>
    <div class="questions_information">
        <div class="question">
            <div class="question_button button_1">
                <p>Вопрос 1</p>
            </div>
            <div class="question_text_inf question_text_1">
                <p>Пример вопроса, Пример вопроса, Пример вопроса,
                    Пример вопроса, Пример вопроса, Пример вопроса, </p>
            </div>
        </div>
        <div class="question">
            <div class="question_button button_2">
                <p>Вопрос 1</p>
            </div>
            <div class="question_text_inf question_text_2">
                <p>Пример вопроса, Пример вопроса, Пример вопроса,
                    Пример вопроса, Пример вопроса, Пример вопроса, </p>
            </div>
        </div>
        <div class="question">
            <div class="question_button button_3">
                <p>Вопрос 1</p>
            </div>
            <div class="question_text_inf question_text_3">
                <p>Пример вопроса, Пример вопроса, Пример вопроса,
                    Пример вопроса, Пример вопроса, Пример вопроса, </p>
            </div>
        </div>
        <div class="question">
            <div class="question_button button_4">
                <p>Вопрос 1</p>
            </div>
            <div class="question_text_inf question_text_4">
                <p>Пример вопроса, Пример вопроса, Пример вопроса,
                    Пример вопроса, Пример вопроса, Пример вопроса, </p>
            </div>
        </div>
        <div class="question">
            <div class="question_button button_5">
                <p>Вопрос 1</p>
            </div>
            <div class="question_text_inf question_text_5">
                <p>Пример вопроса, Пример вопроса, Пример вопроса,
                    Пример вопроса, Пример вопроса, Пример вопроса, </p>
            </div>
        </div>
    </div>
</div>
<div class="five_page" id="five">
    <h2 class="title_lontakt">КОНТАКТЫ</h2>
    <div class="block_contackt_forma">
        <div class="text_forma">
            <p>ВЫ МОЖЕТЕ ИСПОЛЬЗОВАТЬ ФОРМУ, ЧТОБЫ СВЯЗАТЬСЯ С НАШИМ
            СПЕЦИАЛИСТОМ <br><br>
            ЗАДАВ ИНТЕРЕСУЮЩИЙ ВАС ВОПРОС <br><br>
            ОТВЕТ ВАМ ПРИДЕТ НА ПОЧТУ КОТОРУЮ ВЫ УКАЖИТЕ</p>
            <div class="text_cont_inf">
                <p>
                    ТАК ЖЕ ВЫ МОЖЕТЕ ВОСПОЛЬЗОВАТЬСЯ НАШИМИ КОНТАКТАМИ:
                </p>
                <div class="contaci_a_inf">
                    <div class="block_inc_contact"><i class="bi bi-telephone"></i><a href="tel:+79501305137" class="contact_inf_eco">+79501305137</a></div>
                    <div class="block_inc_contact"><i class="bi bi-envelope"></i><a href="mailto:danivel@mail.ru" class="contact_inf_eco">danivel@mail.ru</a></div>
                </div>
            </div>
        </div>
        <div class="forma_kontakt">
            <form action="./html/sender.php" class="form_body" id="form" method="POST">
                <h1 class="form_title">ЗАДАТЬ ВОПРОС</h1>
                <div class="form_item">
                    <label for="forName" class="form_label">ВАШЕ ИМЯ:</label>
                    <input type="text" id="forName" name="name" class="form_input" required>
                </div>
                <div class="form_item">
                    <label for="forEmail" class="form_label">ВАША ЭЛЕКТРОННАЯ ПОЧТА:</label>
                    <input type="email" id="forEmail" name="email" class="form_input" required>
                </div>
                <div class="form_item">
                    <label for="forMessage" class="form_label">СООБЩЕНИЕ:</label>
                    <textarea name="message" id="forMessage" class="form_input" required></textarea>
                </div>
                <button class="form_button" type="submit">ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>
</div>
<?php
$urok="Урок 22";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name1']))			{$name1			= $_POST['name1'];		if ($name1 == '')	{unset($name1);}}
if (isset($_POST['email1']))		{$email1		= $_POST['email1'];		if ($email1 == '')	{unset($email1);}}
if (isset($_POST['text']))			{$text			= $_POST['text'];		if ($text == '')	{unset($text);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="000333555666@mail.ru";
// текст письма 
$note_text="Тема : $urok \r\nИмя : $name1 \r\n Email : $email1 \r\n Дополнительная информация : $text";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы

?>
</body>
<script src="./java/jquery-3.6.0.min.js"></script>
<script src="./java/box_information.js"></script>
<script src="./java/java.js"></script>
<script src="./java/questions.js"></script>
<script src="./java/gallery.js"></script>
<script src="./java/scrool_page.js"></script>
</html>
