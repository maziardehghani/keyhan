<?php
$banner = $data['banner'];

$blogs = $data['blogs'];
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
                <button class="nav-toggle" id="nav-toggle" type="button"><i class="bi bi-three-dots-vertical"></i></button>
            </div>

            <ul class="nav-links" id="nav-links">
                <li><a href="<?= URL ?>" class="nav-link ">صفحه اصلی</a></li>
                <li><a href="<?= URL ?>#services" class="nav-link ">خدمات</a></li>
                <li><a href="<?= URL ?>#articles" class="nav-link ">مقالات</a></li>
                <li><a href="<?= URL .'order/order' ?>" class="nav-link ">سفارشات</a></li>
                <li><a href="<?= URL .'ticket/tickets' ?>" class="nav-link ">تیکت ها</a></li>
            </ul>

              <ul class="nav-icons">
                  <?php if ($user){?>
                      <li><a href="<?= URL ?>auth/register_view">ثبت نام/ورود</a></li>
                  <?php }else{ ?>
                      <li><a href="<?= URL ?>auth/logout">خروج</a></li>
                  <?php } ?>
              </ul>

          </div>
        </nav>
        <!-- hero -->
        <div class="hero" style=" background: linear-gradient(rgba(1, 41, 27, 0.4), rgba(0, 0, 0, 0.3)), url(<?= URL.BANNER_PATH.$banner['image'] ?>) center/cover no-repeat;">
            <div class="hero-banner">
                <h1>کیهان وب</h1>
                <p>این سایت برای اراعه خدمات <span class="text-universe"> کافی نت </span>برای شما میباشد تا به صورت آنلاین از خدمات ما استفاده ببرید</p>
                <a href="<?= URL .'order/order' ?>" class="btn btn-hero">ثبت سفارش</a>
            </div>

        </div>
    </header>
    <!-- End of Header -->

    <!-- About Section -->
    <section class="section about-section" id="about">

        <section class="about-title">
            <h2>درباره <span>کافی نت ما</span></h2>
        </section>

        <section class="section-center about-center">

            <article class="about-img">
                <img class="about-photo" src="<?= URL ?>public/img/img-1.jpg" alt="universe-photo">
            </article>

            <article class="about-info">
                <h3>کافی نت چیست ؟</h3>
                <p>کافی نت یا نِت‌سرا (به انگلیسی: Internet café ) مکانی عمومی برای استفاده از اینترنت می‌باشد که معمولاً به ازای ارائه خدمات اینترنتی از مشتریان، به ازاء هر ساعت استفاده، مبلغی دریافت می‌کند.
                </p>
                <a class="btn" href="#">بیشتر بدونیم</a>
            </article>

        </section>
    </section>
    <!-- End of About Section -->

    <!-- Service Section -->
    <section class="section Services" id="services">
        <section class="Service-title">
            <h2>خدمات <span>ما</span></h2>
        </section>

        <section class="Services-section">

            <section class="section-center services-center">
                <article class="service">
                    <span class="Service-icon">
                        <i class="bi bi-star-fill"></i>
                    </span>
                    <div class="Service-info">
                        <h3>ثبت سفارش</h3>
                        <p class="service-text"> از خدمات آنلاین ما استفاده کنید و در وقت و هزینه خود صرفه جویی کنید</p>
                    </div>
                    <a class="btn Service-btn" href="<?= URL ?>public/favorit">بیشتر بدونیم</a>
                </article>
            </section>

            <section class="section-center services-center">
                <article class="service">
                    <span class="Service-icon">
                        <i class="bi bi-suit-heart-fill"></i>
                    </span>
                    <div>
                        <h3>تعامل</h3>
                        <p class="service-text">تعامل با شما رو به ارمغان آورده ایم تا بتوانید سوالات خود را بپرسید</p>
                    </div>
                    <a class="btn Service-btn" href="<?= URL ?>public/ownership">بیشتر بدونیم</a>
                </article>
            </section>

            <section class="section-center services-center">
                <article class="service">
                    <span class="Service-icon">
                        <i class="bi bi-person-hearts"></i>
                    </span>
                    <div>
                        <h3>اطلاع رسانی</h3>
                        <p class="service-text">با مقالات ما همراه باشید و از آخرین اخبار آگاه شوید</p>
                    </div>
                    <a class="btn Service-btn" href="<?= URL ?>public/friend">بیشتر بدونیم</a>
                </article>
            </section>

        </section>
    </section>
    <!-- End of Service Section -->

    <!-- Aritcle Section -->
    <section class="section " id="articles">
        <section class="article-title">
            <h2>مقالات</h2>
        </section>
        <Section class="section-center article-center ">

            <?php
            foreach ($blogs as $blog)
            {
            ?>
            <article class="article-card">
                <div class="article-img-container">
                    <img class="article-img" src="<?= URL.BLOG_PATH.$blog['image'] ?>" alt="universe and stars">
                    <p class="category"><?= $blog['title'] ?></p>
                </div>
                <div class="article-info">
                    <div class="article-title">
                        <div class="article-icon-1">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <p>universe</p>
                    </div>
                    <p class="article-caption"> <?= $blog['text'] ?><div class="article-footer">
                        <p class="text-and-icon-footer">
                            <span class="article-icon-2"><i class="bi bi-pencil-square"></i></span>
                            <?= $blog['username'] ?>
                        </p>
                        <a class="btn" href="<?= URL .'blog/detail/'.$blog['id'] ?>">بیشتر</a>
                    </div>
                </div>
            </article>

            <?php
            }
            ?>

        </Section>
    </section>
    <!-- End Aritcle Section -->
    <!-- Footer Section -->

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