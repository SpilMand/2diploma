<!DOCTYPE html>
<html lang="ru">
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
$query_string = http_build_query($_GET);
include_once $ROOT . 'version.php';

?>

<head>
  <?php if ( $gtm ) { ?>
		<!-- Google Tag Manager --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $gtm ?>');</script><!-- End Google Tag Manager -->
	<?php } ?>

  <base href="<?= $BASE_HREF . ($query_string ? '?' . $query_string : '') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title><?= $title ?></title>

  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:description" content="<?= $desc ?>">
  <meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
  <meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
  <link rel="image_src" href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

  <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
  <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body class="<?= $version ? 'version-' . $version : '' ?> <?= $gtm ? '' : 'no-gtm' ?>">
  <?php if ( $gtm ) { ?>
      <!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
  <?php } ?>

  
  
  <div class="wrapper">
    <div class="container">
      <header class="header">
    <div class="header__container">
        <div class="header__logo">
            <img src="img/common/logo.svg" alt="">
            <div>Синергия<br>Школа бизнеса</div>
        </div>
        <nav class="header__nav-desktop">
            <a href="#program">О ПРОГРАММЕ</a>
            <a href="#what">ЧТО ТАКОЕ MBA?</a>
            <a href="#advantages">НАШИ ПРЕИМУЩЕСТВА</a>
            <a href="#conditions">УСЛОВИЯ</a>
            <a href="#about">О НАС</a>
        </nav>
        <div class="header__contacts header-desk">
            <div class="header__telegram">
                <img src="img/header/tg.svg" alt="">
                <span>+7 962 203 56 50</span>
            </div>
            <button onclick="$('.popup').css('display', 'block')">Оставить заявку</button>
        </div>
        <div class="header__burger" onclick="openMenu()">
            <div class="img"></div>
        </div>
    </div>
    <div class="header__menu-mobile">
        <nav class="header__nav-mobile">
            <a href="#program">О ПРОГРАММЕ</a>
            <a href="#what">ЧТО ТАКОЕ MBA?</a>
            <a href="#advantages">НАШИ ПРЕИМУЩЕСТВА</a>
            <a href="#conditions">УСЛОВИЯ</a>
            <a href="#about">О НАС</a>
        </nav>
        <div class="header__contacts header-mobile">
            <div class="header__telegram">
                <img src="img/header/tg.svg" alt="">
                <span>+7 962 203 56 50</span>
            </div>
            <button onclick="$('.popup').css('display', 'block')">Оставить заявку</button>
        </div>
    </div>
</header>
      <div class="main">
    <div class="main__column img"></div>
    <div class="main__column info">
        <h4>программа</h4>
        <h2>«Два диплома»<br>от Школы Бизнеса<br>«Синергия»</h2>
        <p>При поступлении в Университет «Синергия» на любую
            из программ высшего образования вы получаете в подарок бесплатное обучение на МВА и посещение всех форумов
            и конференций Школы Бизнеса «Синергия»</p>
        <a href="#courses" class="button">Выбрать программу</a>
    </div>
</div>
      <div class="program" id="program">
    <h4>О программе</h4>
    <div class="program__container">
        <div class="program__column-left text-main">
            Школа Бизнеса «Синергия» разработала
            новый формат подготовки специалистов. 
            При поступлении на один из 36 факультетов 
            по программам бакалавриата, магистратуры 
            или аспирантуры Университета «Синергия» 
            мы предоставляем возможность пройти дополнительное бесплатное обучение 
            по программе MBA Школы Бизнеса «Синергия».
        </div>
        <div class="program__column-right text-additional">
            Программа «Два диплома» предполагает обучение 
            по широкому спектру профессий и отраслей
            и призвана подготовить человека к успешному построению карьеры. Учащиеся, окончившие данную программу, получают навыки  и знания, необходимые для повышения своей конкурентоспособности
            на рынке труда. Получив такое образование, специалисты могут претендовать на более высокую заработную плату и быстрое продвижение по службе, а также могут запустить собственный бизнес.
        </div>
    </div>
</div>
      <div class="who" id="who">
    <h4>КОМУ ПОДОЙДЕТ ПРОГРАММА</h4>
    <div class="who__content">

    </div>
    <div class="who__more" onclick="WhoOpen(true); style='display: none'">
        <img src="img/who/plus.svg" alt="">
        <span>Показать ещё</span>
    </div>
</div>
      <div class="courses" id="courses">
    <div class="courses__element">
        <div class="courses__column">
            <img src="img/courses/courses-img1.jpg" alt="">
            <h2>MBA ONLINE</h2>
            <p class="text-main">Программы профессиональной переподготовки</p>
            <span>Онлайн<br>12 месяцев</span>
            <button onclick="$('.popup').css('display', 'block')">Записаться</button>
        </div>
        <ol class="text-main">
            <li>Digital-маркетинг</li>
            <li>E-commerce</li>
            <li>IT-менеджмент</li>
            <li>Маркетинг и продажи</li>
            <li>Стратегический менеджмент</li>
            <li>Управление человеческими ресурсами</li>
            <li>Финансовый менеджмент</li>
            <li>Hospitality Management</li>
            <li>Управление в медицине</li>
        </ol>
    </div>
    <div class="courses__element">
        <div class="courses__column">
            <img src="img/courses/courses-img2.jpg" alt="">
            <h2>MINI-MBA</h2>
            <p class="text-main">Программы профессиональной переподготовки</p>
            <span>Онлайн<br>6 месяцев</span>
            <button onclick="$('.popup').css('display', 'block')">Записаться</button>
        </div>
        <ol class="text-main">
            <li>Менеджмент организации</li>
            <li>Управление проектами</li>
            <li>Управление финансами</li>
            <li>Управление инвестициями</li>
            <li>Кадровый менеджмент</li>
            <li>Управление маркетингом</li>
            <li>Управление продажами</li>
            <li>Менеджмент в логистике</li>
            <li>Операционное управление</li>
        </ol>
    </div>
    <div class="courses__element">
        <div class="courses__column">
            <img src="img/courses/courses-img3.jpg" alt="">
            <h2>ДИРЕКТОРСКИЕ ПРОГРАММЫ</h2>
            <p class="text-main">Программы профессиональной переподготовки</p>
            <span>Онлайн<br>3 месяца</span>
            <button onclick="$('.popup').css('display', 'block')">Записаться</button>
        </div>
        <ol class="text-main">
            <li>Директор e-commerce</li>
            <li>Директор по маркетингу</li>
            <li>Директор по персоналу</li>
            <li>Директор по продажам</li>
            <li>Директор по финансам</li>
            <li>Операционный директор</li>
            <li>Проектный менеджер</li>
        </ol>
    </div>
</div>
      <div class="what" id="what">
    <h4>ЧТО ТАКОЕ MBA?</h4>
    <div class="what__container-info">
        <div class="what__column-left text-main">
            MBA (Master of Business Administration),
            или «мастер делового администрирования», — это бизнес-образование для менеджеров среднего и высшего звена, предпринимателей
            и коммерсантов.
        </div>
        <div class="what__column-right text-additional">
            Слушатели программ MBA изучают финансовую аналитику, маркетинговые коммуникации, менеджмент, управление проектами, персоналом, микро- и макроэкономику, аудит и другие дисциплины.
        </div>
    </div>
    <div class="what__container-blocks">
        <div class="what__block">
            <img src="img/what/diplom.svg" class="what__icon" alt="">
            <h5>Между&shyнародный диплом</h5>
            <p>Диплом установленного образца
                с присвоением степени «Мастер делового администрирования»
                с европейским приложением</p>
        </div>
        <div class="what__block">
            <div class="what__icon" alt="">9</div>
            <h5>программ MBA</h5>
            <p>Дистанционного и очного
                обучения с выездными модулями</p>
        </div>
        <div class="what__block">
            <img src="img/what/amba.svg" class="what__icon" alt="">
            <h5>Аккредитация AMBA</h5>
            <p>К диплому вы получите свидетельство 
                о международной
                аккредитации программы</p>
        </div>
        <div class="what__block">
            <div class="what__icon" alt="">6-12</div>
            <h5>месяцев</h5>
            <p>Продолжительность обучения
                по программам MBA</p>
        </div>
    </div>
</div>
      <div class="advantages" id="advantages">
    <div class="advantages__grid">
        <h2>ПРЕИМУЩЕСТВА<br>ПРОГРАММЫ<br>«ДВА ДИПЛОМА»</h2>
        <?php
            $blocksInfo = [
                'Высокое качество обучения: квалифицированные преподаватели-практики и авторские методики',
                'Разработка индивидуальных программ обучения с учетом ваших пожеланий',
                'Возможность стать многопрофильным специалистом в своей области',
                'Быстрое удаленное оформление, сопровождение куратора на протяжении всего обучения',
                'Параллельное освоение сразу нескольких профессий',
                'Бесплатное посещение всех форумов и конференций Школы Бизнеса «Синергия»',
                'Государственная лицензия и аккредитация'
            ];
            foreach($blocksInfo as $key => $value) {
                $key++;
                $block = "<div class='advantages__element'>
                    <div class='advantages__num'>$key</div>
                    <p>$value</p>
                </div>";
                echo $block;
            }
        ?>
    </div>
    <div class="advantages__principle">
        <h3 class="text-main">ЦЕНТР РАЗВИТИЯ КАРЬЕРЫ</h3>
        <img src="img/advantages/advantages-icon.png" alt="">
        <p>Главный принцип обучения в Университете — постоянная практика.</p>
        <p>С 2004 года в Университете «Синергия» работает Центр развития карьеры. Сотрудники Центра предлагают студентам вакансии с гибким графиком, которые дают возможность совмещать работу и учебу. Центр карьеры сотрудничает с более чем 500 ведущими компаниями и помогает в трудоустройстве выпускников</p>
    </div>
</div>
      <div class="conditions" id="conditions">
    <div class="conditions__blocks">
        <div class="conditions__block conditions__block-white">
            <h2>СПЕЦИАЛЬНЫЕ УСЛОВИЯ<br>И ПРИВИЛЕГИИ</h2>
            <ul>
                <li>Студентам из многодетных семей и льготным категориям населения</li>
                <li>Студентам, оплатившим 2 и более семестра одновременно</li>
                <li>Победителям олимпиад, золотым медалистам, выпускникам колледжей с красным дипломом</li>
            </ul>
        </div>
        <div class="conditions__block conditions__block-white">
            <div>
                <h2>ОБРАЗОВАТЕЛЬНЫЙ КРЕДИТ<br>ОТ «СБЕРБАНКА»</h2>
                <button onclick="$('.popup').css('display', 'block')">Подробнее</button>
            </div>
            <ul>
                <li>Срок кредитования до 20 лет</li>
                <li>Минимальный платеж для студента от 1000 руб. в месяц</li>
                <li>Возможность оплаты обучения в рассрочку</li>
            </ul>
        </div>
        <div class="conditions__block conditions__block-white">
            <div>
                <h2>РАССРОЧКА<br>ОТ «ТИНЬКОФФ»</h2>
                <button onclick="$('.popup').css('display', 'block')">Подробнее</button>
            </div>
            <ul>
                <li>Быстрое одобрение</li>
                <li>Без переплат (все проценты мы берем на себя)</li>
                <li>Срок рассрочки от 3 месяцев до 5 лет</li>
            </ul>
        </div>
    </div>
    <h4>УСЛОВИЯ ПОСТУПЛЕНИЯ</h4>
    <div class="conditions__blocks">
        <div class="conditions__block conditions__block-black">
            <img src="img/conditions/present.svg" alt="">
            <p>При поступлении на очную форму обучения <b>Бесплатное обучение на MBA Online с возможностью выбора учебной программы</b></p>
        </div>
        <div class="conditions__block conditions__block-black">
            <img src="img/conditions/man.svg" alt="">
            <p>При поступлении на заочную и очно-заочную формы обучения <b>Бесплатное обучение на Mini-MBA или директорской программе с возможностью выбора учебной программы</b></p>
        </div>
        <div class="conditions__block conditions__block-black">
            <img src="img/conditions/people.svg" alt="">
            <div>
                <img src="img/conditions/plus.svg" alt="">
                <p><b>Бесплатное участие в форумах и конференциях</b> Школы Бизнеса «Синергия» в течение всего периода обучения!</b></p>
            </div>
        </div>
    </div>
    <button onclick="$('.popup').css('display', 'block')">Оставить заявку</button>
</div>
      <div class="about" id="about">
    <h4>Школа Бизнеса «Синергия»</h4>
    <div class="about__grid">
        <div class="about__cell-text text-main">
            Ежегодно тысячи топ-менеджеров, владельцев компаний
            и узкопрофильных специалистов
            получают бизнес-образование международного уровня
            в Школе Бизнеса «Синергия».
        </div>
        <div class="about__cell-video">
        </div>
        <div class="about__cell-info">
            <h2>47 000</h2>
            <span class="text-main">выпускников</span>
        </div>
        <div class="about__cell-info">
            <h2>7</h2>
            <span class="text-main">аккредитаций MBA</span>
        </div>
        <div class="about__cell-info">
            <h2>70</h2>
            <span class="text-main">образовательных программ</span>
        </div>
        <div class="about__cell-info">
            <h2>395</h2>
            <span class="text-main">эксклюзивных спикеров</span>
        </div>
        <div class="about__cell-info">
            <h2>70</h2>
            <span class="text-main">бизнес событий в год</span>
        </div>
    </div>
    <h4>ФОРУМЫ И КОНФЕРЕНЦИИ ШКОЛЫ БИЗНЕСА «СИНЕРГИЯ»</h4>
    <div class="about__content">
        <div class="about__column-left text-main">
            Форумы и конференции Школы Бизнеса «Синергия» — это уникальная платформа
            для встречи и обмена опытом между представителями бизнес-сообщества. Наши мероприятия собирают ведущих экспертов
            и предпринимателей, создавая стимулирующую среду для развития и взаимного вдохновения.
        </div>
        <div class="about__column-right text-additional">
            Мы охватываем широкий спектр тем, связанных
            с бизнесом — от предпринимательства и инноваций
            до маркетинга и стратегии. Они включают выступления известных спикеров, панельные дискуссии, мастер-классы
            и другие форматы, помогающие участникам расширить свои знания и навыки в сфере бизнеса.
            <br><br>
            Кроме того, форумы и конференции предоставляют уникальные возможности для создания сетей контактов
            и установления деловых связей.
        </div>
    </div>
</div>

    </div>
    <footer class="footer " id="footer">
    <div class="container">
        <div class="footer__column left">
            <div class="footer__info">
                <h4>программа</h4>
                <h2>«Два диплома»<br>от Школы Бизнеса<br>«Синергия»</h2>
                <p>При поступлении в Университет «Синергия» на любую
                    из программ высшего образования вы получаете в подарок бесплатное обучение на МВА и посещение всех форумов
                    и конференций Школы Бизнеса «Синергия»</p>
                <a href="#courses" class="button">Выбрать программу</a>
            </div>
            <div class="footer__privacy">
                <div class="footer__logo">
                    <img src="img/common/logo.svg" alt="Logo" class="footer__logo">
                    <div>Синергия<br>Школа бизнеса</div>
                </div>
                <div class="footer__privacy-text">&copy;&nbsp;2023 Synergy. Все права защищены</div>
                <div class="footer__privacy-text"><a class="fancybox-privacy-link" data-fancybox="" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&lang=ru">Политика конфиденциальности</a></div>
            </div>
        </div>
        <div class="footer__column right">
            



<section class="form-section">
    <div class="form-section__title">Записаться и получить специальные условия можно только через Школу Бизнеса «Синергия»</div>
    <div class="form-section__content">
        
        <div class="form-section__form">
            
<form action="<?=$action?>&form=callback" class="form " id="form">
    <div class="form__wrapper">
        <div class="form__choose">
            <h3 class="form__title ">Выберите желаемый факультет</h3>

            
            <select name="faculty" id="faculty" class="form__faculties" required>
                
                    <option value="Все факультеты" class="form__faculties-faculty">Все факультеты</option>
                
                    <option value="факультет БИЗНЕСА" class="form__faculties-faculty">факультет БИЗНЕСА</option>
                
                    <option value="факультет управления" class="form__faculties-faculty">факультет управления</option>
                
                    <option value="факультет экономики" class="form__faculties-faculty">факультет экономики</option>
                
                    <option value="Юридический факультет" class="form__faculties-faculty">Юридический факультет</option>
                
                    <option value="Факультет технологического предпринимательства" class="form__faculties-faculty">Факультет технологического предпринимательства</option>
                
                    <option value="факультет банковского ДЕЛА" class="form__faculties-faculty">факультет банковского ДЕЛА</option>
                
                    <option value="факультет E-COMMERCE" class="form__faculties-faculty">факультет E-COMMERCE</option>
                
                    <option value="факультет ИНТЕРНЕТ-ПРОФЕССИЙ" class="form__faculties-faculty">факультет ИНТЕРНЕТ-ПРОФЕССИЙ</option>
                
                    <option value="факультет продюсирования" class="form__faculties-faculty">факультет продюсирования</option>
                
                    <option value="факультет программирования" class="form__faculties-faculty">факультет программирования</option>
                
                    <option value="факультет информационных систем" class="form__faculties-faculty">факультет информационных систем</option>
                
                    <option value="факультет искусственного интеллекта" class="form__faculties-faculty">факультет искусственного интеллекта</option>
                
                    <option value="факультет игровой индустрии и спорта" class="form__faculties-faculty">факультет игровой индустрии и спорта</option>
                
                    <option value="факультет робототехники" class="form__faculties-faculty">факультет робототехники</option>
                
                    <option value="факультет дизайна и рекламы" class="form__faculties-faculty">факультет дизайна и рекламы</option>
                
                    <option value="факультет анимации" class="form__faculties-faculty">факультет анимации</option>
                
                    <option value="факультет гейм-дизайна и разработки игр" class="form__faculties-faculty">факультет гейм-дизайна и разработки игр</option>
                
                    <option value="Арт-факультет" class="form__faculties-faculty">Арт-факультет</option>
                
                    <option value="факультет кино и медиа" class="form__faculties-faculty">факультет кино и медиа</option>
                
                    <option value="факультет государственного и муниципального управления" class="form__faculties-faculty">факультет государственного и муниципального управления</option>
                
                    <option value="Медицинский факультет" class="form__faculties-faculty">Медицинский факультет</option>
                
                    <option value="факультет умных городов" class="form__faculties-faculty">факультет умных городов</option>
                
                    <option value="факультет психологии" class="form__faculties-faculty">факультет психологии</option>
                
                    <option value="факультет педагогики" class="form__faculties-faculty">факультет педагогики</option>
                
                    <option value="факультет лингвистики" class="form__faculties-faculty">факультет лингвистики</option>
                
                    <option value="факультет музыкальной индустрии" class="form__faculties-faculty">факультет музыкальной индустрии</option>
                
                    <option value="Новая театральная школа" class="form__faculties-faculty">Новая театральная школа</option>
                
                    <option value="факультет гостеприимства" class="form__faculties-faculty">факультет гостеприимства</option>
                
                    <option value="факультет туризма" class="form__faculties-faculty">факультет туризма</option>
                
                    <option value="факультет индустрии спорта" class="form__faculties-faculty">факультет индустрии спорта</option>
                
            </select>


            <h3 class="form__title ">Выберите программу MBA</h3>
            <select name="programm" id="programm" class="form__faculties" required>
                
                    <option value="Все программы" class="form__faculties-faculty">Все программы</option>
                
                    <option value="MBA-онлайн — Digital Marketing (12 мес)" class="form__faculties-faculty">MBA-онлайн — Digital Marketing (12 мес)</option>
                
                    <option value="MBA-онлайн — E-commerce (12 мес)" class="form__faculties-faculty">MBA-онлайн — E-commerce (12 мес)</option>
                
                    <option value="MBA-онлайн — it-менеджент (12 мес)" class="form__faculties-faculty">MBA-онлайн — it-менеджент (12 мес)</option>
                
                    <option value="MBA-онлайн — маркетинг и продажи (12 мес)" class="form__faculties-faculty">MBA-онлайн — маркетинг и продажи (12 мес)</option>
                
                    <option value="MBA-онлайн — Управление человеческими ресурсами (12 мес)" class="form__faculties-faculty">MBA-онлайн — Управление человеческими ресурсами (12 мес)</option>
                
                    <option value="MBA-онлайн — финансовый менеджмент (12 мес)" class="form__faculties-faculty">MBA-онлайн — финансовый менеджмент (12 мес)</option>
                
                    <option value="MBA-онлайн — Hospitality management (Гостинично-ресторанный бизнес) (12 мес)" class="form__faculties-faculty">MBA-онлайн — Hospitality management (Гостинично-ресторанный бизнес) (12 мес)</option>
                
                    <option value="MBA-онлайн — управление в медицине (12 мес)" class="form__faculties-faculty">MBA-онлайн — управление в медицине (12 мес)</option>
                
                    <option value="Mini MBA — менеджмент организации (6 мес)" class="form__faculties-faculty">Mini MBA — менеджмент организации (6 мес)</option>
                
                    <option value="Mini MBA — управление проектами (6 мес)" class="form__faculties-faculty">Mini MBA — управление проектами (6 мес)</option>
                
                    <option value="Mini MBA — Управление финансами (6 мес)" class="form__faculties-faculty">Mini MBA — Управление финансами (6 мес)</option>
                
                    <option value="Mini MBA — Управление инвестициями (6 мес)" class="form__faculties-faculty">Mini MBA — Управление инвестициями (6 мес)</option>
                
                    <option value="Mini MBA — Кадровый менеджмент (6 мес)" class="form__faculties-faculty">Mini MBA — Кадровый менеджмент (6 мес)</option>
                
                    <option value="Mini MBA — Управление маркетингом (6 мес)" class="form__faculties-faculty">Mini MBA — Управление маркетингом (6 мес)</option>
                
                    <option value="Mini MBA — Управление продажами (6 мес)" class="form__faculties-faculty">Mini MBA — Управление продажами (6 мес)</option>
                
                    <option value="Mini MBA — менеджмент в логистике (6 мес)" class="form__faculties-faculty">Mini MBA — менеджмент в логистике (6 мес)</option>
                
                    <option value="Mini MBA — операционное управление (6 мес)" class="form__faculties-faculty">Mini MBA — операционное управление (6 мес)</option>
                
                    <option value="Директор e-commerce (3 мес)" class="form__faculties-faculty">Директор e-commerce (3 мес)</option>
                
                    <option value="Директор по маркетингу (3 мес)" class="form__faculties-faculty">Директор по маркетингу (3 мес)</option>
                
                    <option value="Директор по персоналу (3 мес)" class="form__faculties-faculty">Директор по персоналу (3 мес)</option>
                
                    <option value="Директор по продажам (3 мес)" class="form__faculties-faculty">Директор по продажам (3 мес)</option>
                
                    <option value="Директор по финансам (3 мес)" class="form__faculties-faculty">Директор по финансам (3 мес)</option>
                
                    <option value="Операционный директор (3 мес)" class="form__faculties-faculty">Операционный директор (3 мес)</option>
                
                    <option value="Проектный менеджер (3 мес)" class="form__faculties-faculty">Проектный менеджер (3 мес)</option>
                
            </select>
        </div>






        <div class="form__form"> 
            
            <h3 class="form__title ">Оставьте заявку</h3>
            

            

            <div class="form__items">
                
                
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="ФИО" class="form__input"   required value="">
    
</div><!-- form__item -->

                

                
                
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="EMAIL" class="form__input"   required value="">
    
</div><!-- form__item -->

                

                
                
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="ТЕЛЕФОН" class="form__input"   required value="">
    
</div><!-- form__item -->

                

                

                


                <div class="form__more">
                    <label class="form__footer ">
                        <div class="form__footer-checkbox">
                            <input type="checkbox" name="personalDataAgree" checked>
                            <div class="form__footer-checkbox-icon"></div>
                        </div>
                        <div class="form__footer-text">ПРИНИМАЮ УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</div>
                        <!-- <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> -->
                    </label>
                </div>


                <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>
            </div><!-- form__items -->

            
        </div>
    </div>
</form>

        </div>
    </div>   




</section>
        </div>
    </div>
</footer>
    <div class="popup">
    <div class="popup__back">
        <div class="popup__container">
            <img src="img/thanks/cross.svg" class="thanks__cross" onclick="$('.popup').css('display', 'none')">
            



<section class="form-section">
    <div class="form-section__title">Записаться и получить специальные условия можно только через Школу Бизнеса «Синергия»</div>
    <div class="form-section__content">
        
        <div class="form-section__form">
            
<form action="<?=$action?>&form=callback" class="form " id="form">
    <div class="form__wrapper">
        <div class="form__choose">
            <h3 class="form__title ">Выберите желаемый факультет</h3>

            
            <select name="faculty" id="faculty" class="form__faculties" required>
                
                    <option value="Все факультеты" class="form__faculties-faculty">Все факультеты</option>
                
                    <option value="факультет БИЗНЕСА" class="form__faculties-faculty">факультет БИЗНЕСА</option>
                
                    <option value="факультет управления" class="form__faculties-faculty">факультет управления</option>
                
                    <option value="факультет экономики" class="form__faculties-faculty">факультет экономики</option>
                
                    <option value="Юридический факультет" class="form__faculties-faculty">Юридический факультет</option>
                
                    <option value="Факультет технологического предпринимательства" class="form__faculties-faculty">Факультет технологического предпринимательства</option>
                
                    <option value="факультет банковского ДЕЛА" class="form__faculties-faculty">факультет банковского ДЕЛА</option>
                
                    <option value="факультет E-COMMERCE" class="form__faculties-faculty">факультет E-COMMERCE</option>
                
                    <option value="факультет ИНТЕРНЕТ-ПРОФЕССИЙ" class="form__faculties-faculty">факультет ИНТЕРНЕТ-ПРОФЕССИЙ</option>
                
                    <option value="факультет продюсирования" class="form__faculties-faculty">факультет продюсирования</option>
                
                    <option value="факультет программирования" class="form__faculties-faculty">факультет программирования</option>
                
                    <option value="факультет информационных систем" class="form__faculties-faculty">факультет информационных систем</option>
                
                    <option value="факультет искусственного интеллекта" class="form__faculties-faculty">факультет искусственного интеллекта</option>
                
                    <option value="факультет игровой индустрии и спорта" class="form__faculties-faculty">факультет игровой индустрии и спорта</option>
                
                    <option value="факультет робототехники" class="form__faculties-faculty">факультет робототехники</option>
                
                    <option value="факультет дизайна и рекламы" class="form__faculties-faculty">факультет дизайна и рекламы</option>
                
                    <option value="факультет анимации" class="form__faculties-faculty">факультет анимации</option>
                
                    <option value="факультет гейм-дизайна и разработки игр" class="form__faculties-faculty">факультет гейм-дизайна и разработки игр</option>
                
                    <option value="Арт-факультет" class="form__faculties-faculty">Арт-факультет</option>
                
                    <option value="факультет кино и медиа" class="form__faculties-faculty">факультет кино и медиа</option>
                
                    <option value="факультет государственного и муниципального управления" class="form__faculties-faculty">факультет государственного и муниципального управления</option>
                
                    <option value="Медицинский факультет" class="form__faculties-faculty">Медицинский факультет</option>
                
                    <option value="факультет умных городов" class="form__faculties-faculty">факультет умных городов</option>
                
                    <option value="факультет психологии" class="form__faculties-faculty">факультет психологии</option>
                
                    <option value="факультет педагогики" class="form__faculties-faculty">факультет педагогики</option>
                
                    <option value="факультет лингвистики" class="form__faculties-faculty">факультет лингвистики</option>
                
                    <option value="факультет музыкальной индустрии" class="form__faculties-faculty">факультет музыкальной индустрии</option>
                
                    <option value="Новая театральная школа" class="form__faculties-faculty">Новая театральная школа</option>
                
                    <option value="факультет гостеприимства" class="form__faculties-faculty">факультет гостеприимства</option>
                
                    <option value="факультет туризма" class="form__faculties-faculty">факультет туризма</option>
                
                    <option value="факультет индустрии спорта" class="form__faculties-faculty">факультет индустрии спорта</option>
                
            </select>


            <h3 class="form__title ">Выберите программу MBA</h3>
            <select name="programm" id="programm" class="form__faculties" required>
                
                    <option value="Все программы" class="form__faculties-faculty">Все программы</option>
                
                    <option value="MBA-онлайн — Digital Marketing (12 мес)" class="form__faculties-faculty">MBA-онлайн — Digital Marketing (12 мес)</option>
                
                    <option value="MBA-онлайн — E-commerce (12 мес)" class="form__faculties-faculty">MBA-онлайн — E-commerce (12 мес)</option>
                
                    <option value="MBA-онлайн — it-менеджент (12 мес)" class="form__faculties-faculty">MBA-онлайн — it-менеджент (12 мес)</option>
                
                    <option value="MBA-онлайн — маркетинг и продажи (12 мес)" class="form__faculties-faculty">MBA-онлайн — маркетинг и продажи (12 мес)</option>
                
                    <option value="MBA-онлайн — Управление человеческими ресурсами (12 мес)" class="form__faculties-faculty">MBA-онлайн — Управление человеческими ресурсами (12 мес)</option>
                
                    <option value="MBA-онлайн — финансовый менеджмент (12 мес)" class="form__faculties-faculty">MBA-онлайн — финансовый менеджмент (12 мес)</option>
                
                    <option value="MBA-онлайн — Hospitality management (Гостинично-ресторанный бизнес) (12 мес)" class="form__faculties-faculty">MBA-онлайн — Hospitality management (Гостинично-ресторанный бизнес) (12 мес)</option>
                
                    <option value="MBA-онлайн — управление в медицине (12 мес)" class="form__faculties-faculty">MBA-онлайн — управление в медицине (12 мес)</option>
                
                    <option value="Mini MBA — менеджмент организации (6 мес)" class="form__faculties-faculty">Mini MBA — менеджмент организации (6 мес)</option>
                
                    <option value="Mini MBA — управление проектами (6 мес)" class="form__faculties-faculty">Mini MBA — управление проектами (6 мес)</option>
                
                    <option value="Mini MBA — Управление финансами (6 мес)" class="form__faculties-faculty">Mini MBA — Управление финансами (6 мес)</option>
                
                    <option value="Mini MBA — Управление инвестициями (6 мес)" class="form__faculties-faculty">Mini MBA — Управление инвестициями (6 мес)</option>
                
                    <option value="Mini MBA — Кадровый менеджмент (6 мес)" class="form__faculties-faculty">Mini MBA — Кадровый менеджмент (6 мес)</option>
                
                    <option value="Mini MBA — Управление маркетингом (6 мес)" class="form__faculties-faculty">Mini MBA — Управление маркетингом (6 мес)</option>
                
                    <option value="Mini MBA — Управление продажами (6 мес)" class="form__faculties-faculty">Mini MBA — Управление продажами (6 мес)</option>
                
                    <option value="Mini MBA — менеджмент в логистике (6 мес)" class="form__faculties-faculty">Mini MBA — менеджмент в логистике (6 мес)</option>
                
                    <option value="Mini MBA — операционное управление (6 мес)" class="form__faculties-faculty">Mini MBA — операционное управление (6 мес)</option>
                
                    <option value="Директор e-commerce (3 мес)" class="form__faculties-faculty">Директор e-commerce (3 мес)</option>
                
                    <option value="Директор по маркетингу (3 мес)" class="form__faculties-faculty">Директор по маркетингу (3 мес)</option>
                
                    <option value="Директор по персоналу (3 мес)" class="form__faculties-faculty">Директор по персоналу (3 мес)</option>
                
                    <option value="Директор по продажам (3 мес)" class="form__faculties-faculty">Директор по продажам (3 мес)</option>
                
                    <option value="Директор по финансам (3 мес)" class="form__faculties-faculty">Директор по финансам (3 мес)</option>
                
                    <option value="Операционный директор (3 мес)" class="form__faculties-faculty">Операционный директор (3 мес)</option>
                
                    <option value="Проектный менеджер (3 мес)" class="form__faculties-faculty">Проектный менеджер (3 мес)</option>
                
            </select>
        </div>






        <div class="form__form"> 
            
            <h3 class="form__title ">Оставьте заявку</h3>
            

            

            <div class="form__items">
                
                
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="ФИО" class="form__input"   required value="">
    
</div><!-- form__item -->

                

                
                
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="EMAIL" class="form__input"   required value="">
    
</div><!-- form__item -->

                

                
                
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="ТЕЛЕФОН" class="form__input"   required value="">
    
</div><!-- form__item -->

                

                

                


                <div class="form__more">
                    <label class="form__footer ">
                        <div class="form__footer-checkbox">
                            <input type="checkbox" name="personalDataAgree" checked>
                            <div class="form__footer-checkbox-icon"></div>
                        </div>
                        <div class="form__footer-text">ПРИНИМАЮ УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</div>
                        <!-- <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> -->
                    </label>
                </div>


                <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>
            </div><!-- form__items -->

            
        </div>
    </div>
</form>

        </div>
    </div>   




</section>
        </div>
    </div>
</div>
    
  </div>
    
    

  <div hidden>
    <a href="http://sydi.ru" style="display: none">Synergy Digital</a>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>


  <script src="js/script.js" defer></script>
  <script src="https://syn.su/js/lander.js" async></script>
  
</body>

</html>