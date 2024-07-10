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

  
  
<div class="wrapper wrapper-thanks">
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
        <section class="thanks">
	<div class="thanks__container">
		<a href="/"><img src="img/thanks/cross.svg" class="thanks__cross"></a>
		<h1>Спасибо!</h1>
		<p>Ваша заявка отправлена.<br>В скором времени мы свяжемся с вами.</p>
		<a href="/" class="button">вернуться на главную</a>
	</div>
</section>
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