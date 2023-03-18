<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Interteach | Филиал в Астане</title>

    <!-- Favicon -->
    <link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-html5-1.5.6/b-print-1.5.6/datatables.min.css"/>
    <link href="/css/select2.min.css" rel="stylesheet" />
    <link href="/css/select2-bootstrap.css" rel="stylesheet" />
    <!-- datepicker -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/js/datepicker/jquery-ui.css">
    <!-- jQuery 2.2.4 -->
    <?php if ($_SESSION['auth']==false){?>
    <script src="http://<?php echo $_SERVER['HTTP_HOST'];?>/js/jquery.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST'];?>/js/datepicker/jquery-ui.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST'];?>/js/select2.min.js"></script>
    <?php }?>
    <script src="https://kit.fontawesome.com/7377351c09.js"></script>
<!--    <script src="http://--><?php //echo $_SERVER['HTTP_HOST'];?><!--/js/soundmanager2-jsmin.js"></script>-->
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->

<!-- Header Area Start -->
<header class="header-area">
    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <div class="top-header-content">
                        <a href="tel:+77172515301"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/phone-call1.png" alt="" width="20"
                                                        height="20"></i><span><strong style="color: #6DCFF6"></strong>
                                    +7 (727) 3 200 200</span></a>
                        <a href="mailto:interteach@interteach.kz" style="padding: 0 15px;"><span><strong
                                        style="color: #6DCFF6"></strong>
                                    interteach@interteach.kz</span></a>
                        <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/faq1.png" alt="" width="20" height="20"><span><strong
                                        style="color: #6DCFF6"></strong>
                                    FAQ</span></a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="top-header-content">
                        <!-- Address -->
                        <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/placeholder1.png" alt="" width="20" height="20">
                            <span data-translate="translate" data-caption="address">г. Алматы, Пр. Нурсултана Назарбаева 269</span>
                        </a>
                        <!-- Language -->
                        <div class="dropdown">
                            <a class="btn pr-0 dropdown-toggle" href="#" role="button" id="langdropdown"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/ru.png" alt=""/>
                                Русский
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="langdropdown">
                                <a class="dropdown-item" href="#lang=ru" id="ru">
                                    <img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/ru.png" alt="">
                                    Русский
                                </a>
                                <a class="dropdown-item" href="#lang=kz" id="kz"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/kz.png" alt="">Қазақша</a>
                                <a class="dropdown-item" href="#lang=lat" id="lat"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/kz.png" alt="">Qazaqsha</a>
                                <a class="dropdown-item" href="#lang=en" id="en"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/en.png" alt="">English</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="hamiNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active">
                                    <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/admin/login.php?exit=yes">Выйти</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>