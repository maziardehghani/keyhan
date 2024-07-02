<?php

$blog = $data['blog'];
$user = $data['user'];
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
    <title> keyhan web </title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= URL ?>public/img/Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL ?>public/img/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= URL ?>public/img/Favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= URL ?>public/img/Favicon/site.webmanifest">
</head>

<body>
<!-- Header -->
<header id="home">
    <nav class="navbar">
        <div class="navbar-center">

            <div class="nav-header">
                <h3 class="logo">کیهان وب</h3>
                <button class="nav-toggle" id="nav-toggle" type="button"><i class="bi bi-three-dots-vertical"></i>
                </button>
            </div>

            <ul class="nav-links" id="nav-links">
                <li><a href="<?= URL ?>" class="nav-link ">صفحه اصلی</a></li>
                <li><a href="<?= URL ?>#services" class="nav-link ">خدمات</a></li>
                <li><a href="<?= URL ?>#articles" class="nav-link ">مقالات</a></li>
                <li><a href="<?= URL . 'order/order' ?>" class="nav-link ">سفارشات</a></li>
                <li><a href="<?= URL . 'ticket/tickets' ?>" class="nav-link ">تیکت ها</a></li>
            </ul>

            <ul class="nav-icons">
                <?php if (!$user){?>
                    <li><a href="<?= URL ?>auth/register_view">ثبت نام/ورود</a></li>
                <?php }else{ ?>
                    <li><a href="<?= URL ?>auth/logout">خروج</a></li>
                <?php } ?>
            </ul>

        </div>
    </nav>
    <!-- hero -->
</header>
<!-- End of Header -->
<!-- About Section -->
<section class="section about-section" id="about">

    <section class="about-title">
        <h2><span> <?= $blog['title'] ?> </span></h2>
    </section>

    <section class="section-center about-center">

        <article class="about-img">
            <img class="about-photo" src="<?= URL . BLOG_PATH . $blog['image'] ?>" alt="universe-photo">
        </article>

        <article class="about-info">
            <h3><?= $blog['title'] ?></h3>
            <p><?= $blog['text'] ?></p>
        </article>

    </section>
</section>
<!-- End of About Section -->
<footer class="footer">
    <div class="section footer-contianer">
        <ul class="footer-links">
            <li><a href="#" class="footer-link">صفحه اصلی</a></li>
            <li><a href="#" class="footer-link">درباره ما</a></li>
            <li><a href="#" class="footer-link">مقالات</a></li>
            <li><a href="#" class="footer-link">خدمات</a></li>
            <li><a href="#" class="footer-link">ارتباط با ما</a></li>
        </ul>
        <ul class="footer-icons">
            <li><a href="" class="footer-icon"><i class="bi bi-instagram"></i></a></li>
            <li><a href="" class="footer-icon"><i class="bi bi-telegram"></i></a></li>
            <li><a href="" class="footer-icon"><i class="bi bi-whatsapp"></i></a></li>
            <li><a href="" class="footer-icon"><i class="bi bi-twitter"></i></a></li>
        </ul>
        <p class="footer-text">تمامی حقوق این سایت متعلق به <span class="footer-text-bold"> کیهان وب </span>میباشد و
            هر گونه کپی برداری پیگرد قانونی دارد .</p>
    </div>
</footer>

<!-- End of Footer Section -->
<script src="<?= URL ?>public/js/app.js"></script>
</body>

</html>