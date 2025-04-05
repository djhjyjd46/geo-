<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/header-bg.png');">
        <div class="header__top hidden-mobile">
            <div class="container">
                <a href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png" alt="<?php bloginfo('name'); ?>">
                </a>
                <div class="top-inner hidden-mobile">

                    <div class="nav-phone">
                        <div class="phone-inner">
                            <div class="phone-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.svg" alt="phone">
                                <a href="tel:+375173514040">+375 17 351-40-40</a>
                                <span>тел/факс</span>
                            </div>
                            <div class="phone-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.svg" alt="phone">
                                <a href="tel:+375173514040">+375 17 351-40-40</a>
                            </div>
                        </div>
                        <a class="phone-link" href="tel:+375173514040">Заказать звонок</a>
                    </div>
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="#">О&nbsp;компании</a></li>
                            <li><a href="#">Услуги</a></li>
                            <li><a href="#">Проекты</a></li>
                            <li><a href="#">Сертификаты</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="mobile visible-mobile">
            <div class="mobile__logo">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="mobile__mobile-buttons ">
                <button class="phone-icon" id="phoneToggle"><svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5397 5.59474C10.226 4.5484 10.0103 3.47515 9.89544 2.38887C9.78063 1.30586 8.8351 0.5 7.74624 0.5H2.69463C1.39517 0.5 0.394793 1.6225 0.50887 2.91611C1.66062 15.9539 12.0461 26.3386 25.0839 27.4911C26.3782 27.6052 27.5 26.6085 27.5 25.309V20.8044C27.5 19.1605 26.6941 18.2186 25.6111 18.1038C24.5249 17.9891 23.4516 17.7737 22.4053 17.4603C21.7849 17.2763 21.1263 17.2637 20.4993 17.4237C19.8723 17.5838 19.3003 17.9105 18.844 18.3693L16.6816 20.5316C12.782 18.419 9.58099 15.2179 7.46836 11.3184L9.63072 9.15602C10.0896 8.69976 10.4165 8.12781 10.5766 7.50082C10.7368 6.87384 10.7235 6.21519 10.5397 5.59474Z"
                            fill="#0B62A0" />
                    </svg>

                </button>
                <button class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="mobile-inner">
                <nav class="mobile-menu" id="mobileMenu">
                    <ul>
                        <li><a href="#">О&nbsp;КОМПАНИИ</a></li>
                        <li><a href="#">УСЛУГИ</a></li>
                        <li><a href="#">ПРОЕКТЫ</a></li>
                        <li><a href="#">СЕРТИФИКАТЫ</a></li>
                        <li><a href="#">КОНТАКТЫ</a></li>
                    </ul>
                </nav>
                <nav class="phone-menu" id="phoneMenu">
                    <ul>
                        <li> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.svg" alt="phone">
                            <a href="tel:+375173514040">+375 17 351-40-40</a>
                            <span>тел/факс</span>
                        </li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.svg" alt="phone">
                            <a href="tel:+375173514040">+375 17 351-40-40</a>
                        </li>
                    </ul>
                    <button type="button">Заказать звонок</button>
                </nav>
            </div>
        </div>

        <div class="header__hero container">
            <div class="text-inner">
                <h1>ИНЖЕНЕРНО-ГЕОДЕЗИЧЕСКИЕ РАБОТЫ</h1>
                <h2>В&nbsp;Беларуси и&nbsp;странах СНГ</h2>
                <p>Комплексное геодезическое обеспечение в&nbsp;период строительства и&nbsp;эксплуатации</p>
                <button>Получить консультацию</button>
            </div>
        </div>
    </header>
</body>
</html>