<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
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
                                <a href="tel:+375173514040"><?= the_field('phone-1', 'option'); ?></a>
                                <span>тел/факс</span>
                            </div>
                            <div class="phone-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.svg" alt="phone">
                                <a href="tel:+375173514040"><?= the_field('phone-2', 'option'); ?></a>
                            </div>
                        </div>
                        <a class="phone-link openModalPhone">Заказать звонок</a>
                    </div>
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="#partner">О&nbsp;компании</a></li>
                            <li><a href="#service">Услуги</a></li>
                            <li><a href="#projects">Проекты</a></li>
                            <li><a href="#garant">Сертификаты</a></li>
                            <li><a href="#contacts">Контакты</a></li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="mobile visible-mobile">
            <div class="mobile__logo">
                <img class="" src="<?= get_template_directory_uri(); ?>/images/header-logo.png" alt="<?php bloginfo('name'); ?>">
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
                        <li><a href="#partner">О&nbsp;компании</a></li>
                        <li><a href="#service">Услуги</a></li>
                        <li><a href="#projects">Проекты</a></li>
                        <li><a href="#garant">Сертификаты</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                    </ul>
                </nav>
                <nav class="phone-menu" id="phoneMenu">
                    <ul>
                        <li> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.svg" alt="phone">
                            <a href="tel:+375173514040"><?= the_field('phone-1', 'option'); ?></a>
                            <span>тел/факс</span>
                        </li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.svg" alt="phone">
                            <a href="tel:+375173514040"><?= the_field('phone-2', 'option'); ?></a>
                        </li>
                    </ul>
                    <button class="openModalPhone" type="button">Заказать звонок</button>
                </nav>
            </div>
        </div>

        <div class="header__hero container">
            <div class="text-inner">
            <svg width="377" height="146" viewBox="0 0 377 146" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 118.874V88.9563L53.5917 3.19125H97.259L45.6522 88.9563L25.8034 82.3743H123.604V118.874H0ZM65.501 142.809V118.874L66.7641 82.3743V61.0328H106.823V142.809H65.501Z" fill="#0B62A0"/>
<path d="M186.743 146C175.556 146 165.632 143.141 156.97 137.423C148.429 131.706 141.693 123.395 136.761 112.492C131.949 101.588 129.543 88.4244 129.543 73C129.543 57.5756 131.949 44.4117 136.761 33.5082C141.693 22.6047 148.429 14.2942 156.97 8.5765C165.632 2.85883 175.556 0 186.743 0C197.931 0 207.795 2.85883 216.336 8.5765C224.998 14.2942 231.734 22.6047 236.546 33.5082C241.478 44.4117 243.944 57.5756 243.944 73C243.944 88.4244 241.478 101.588 236.546 112.492C231.734 123.395 224.998 131.706 216.336 137.423C207.795 143.141 197.931 146 186.743 146ZM186.743 108.303C189.51 108.303 191.976 107.24 194.142 105.112C196.307 102.985 197.991 99.3279 199.194 94.1421C200.517 88.9563 201.179 81.9089 201.179 73C201.179 63.9581 200.517 56.9107 199.194 51.8579C197.991 46.6721 196.307 43.0155 194.142 40.888C191.976 38.7605 189.51 37.6967 186.743 37.6967C183.977 37.6967 181.511 38.7605 179.345 40.888C177.18 43.0155 175.436 46.6721 174.112 51.8579C172.91 56.9107 172.308 63.9581 172.308 73C172.308 81.9089 172.91 88.9563 174.112 94.1421C175.436 99.3279 177.18 102.985 179.345 105.112C181.511 107.24 183.977 108.303 186.743 108.303Z" fill="#0B62A0"/>
<path d="M253.396 118.874V88.9563L306.988 3.19125H350.655L299.048 88.9563L279.2 82.3743H377V118.874H253.396ZM318.897 142.809V118.874L320.16 82.3743V61.0328H360.219V142.809H318.897Z" fill="#0B62A0"/>
</svg>

                <h1 class="visually-hidden">ИНЖЕНЕРНО-ГЕОДЕЗИЧЕСКИЕ РАБОТЫ</h1>
                <h2>Ошибка загрузки!</h2>
                
                <button class="" type="submit">Перезагрузить</button>
            </div>
        </div>
    </header>
</body>
</html>
