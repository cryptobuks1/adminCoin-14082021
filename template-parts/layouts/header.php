<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/easydropdown-4/demos/themes/beanstalk.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js" integrity="sha512-asxKqQghC1oBShyhiBwA+YgotaSYKxGP1rcSYTDrB0U6DxwlJjU59B67U8+5/++uFjcuVM8Hh5cokLjZlhm3Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
    <script src="assets/easydropdown-4/bundle/easydropdown.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<nav id="header" class="uk-navbar-container header" uk-navbar uk-sticky="">

    <div class="uk-navbar-left">
        <a id="btn" class="uk-navbar-toggle header__menu" uk-navbar-toggle-icon href="#"></a>
        <a href="" class="uk-navbar-item uk-logo uk-padding-remove-left"><img class="header__logo" src="images/SIB_Logo-16.png" alt=""></a>
    </div>

    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">
                    <div class="uk-cover-container uk-border-circle header__navbarRight__flag">
                        <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" alt="" uk-cover>
                        <canvas width="23" height="23"></canvas>
                    </div>
                </a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>

</nav>
<div uk-height-viewport="offset-top: true" class="uk-grid-collapse uk-grid-match" uk-grid>
    <div class="sidebar uk-width-auto open">
        <div class="uk-card uk-card-default sidebar__card" uk-sticky="offset: 60">
            <ul class="uk-nav uk-nav-default sidebar__nav">
                <?php
                $data = array(
                    array(
                        'name' => 'Home',
                        'icon' => 'images/menu-svg/Home.svg',
                    ),
                    array(
                        'name' => 'My account',
                        'icon' => 'images/menu-svg/Account.svg',
                        'href' => 'index.php',
                    ),
                    array(
                        'name' => 'Wallet',
                        'icon' => 'images/menu-svg/Wallet.svg',
                        'href' => 'wallet.php',
                    ),
                    array(
                        'name' => 'Investment',
                        'icon' => 'images/menu-svg/Investment.svg',
                        'href' => 'investment.php',
                    ),
                    array(
                        'name' => 'Commission',
                        'icon' => 'images/menu-svg/Investment.svg',
                    ),
                    array(
                        'name' => 'Security',
                        'icon' => 'images/menu-svg/Security.svg',
                    ),
                    array(
                        'name' => 'Parnership',
                        'icon' => 'images/menu-svg/Partnership.svg',
                    ),
                    array(
                        'name' => 'Setting',
                        'icon' => 'images/menu-svg/Setting.svg',
                    ),
                );
                foreach ($data as $k => $v): ?>
                <li class="<?= ($k == 1) ? 'uk-active':'' ?>">
                    <a href="<?= ($v['href']) ? $v['href'] : '' ?>" class="uk-link-toggle sidebar__nav__a">
                        <div class="uk-flex-middle uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <div class="sidebar__nav__img"><img class="uk-responsive-width" src="<?= $v['icon'] ?>" alt=""></div>
                            </div>
                            <div class="uk-width-expand"><span class="sidebar__nav__txt"><?= $v['name'] ?></span></div>
                        </div>
                    </a>
                    <span class="sidebar__nav__tooltip uk-tooltip"><?= $v['name'] ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="uk-width-expand">
        <div class="uk-overflow-auto">
