<?php
$orders = $data['orders'];
$user = $data['user'];
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>سفارشات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= URL ?>public/img/Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL ?>public/img/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= URL ?>public/img/Favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= URL ?>public/img/Favicon/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<div class="container" style="margin-top: 100px">
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
                    <?php if (!$user){?>
                        <li><a href="<?= URL ?>auth/register_view">ثبت نام/ورود</a></li>
                    <?php }else{ ?>
                        <li><a href="<?= URL ?>auth/logout">خروج</a></li>
                    <?php } ?>
                </ul>

            </div>
        </nav>

    </header>
    <!-- End of Header -->
    <table class="table caption-top" >
        <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">سفارشات</span>
        <hr>

        <thead class="table-dark">
        <tr>
            <th scope="col">کدسفارش</th>
            <th scope="col">سفارش دهنده</th>
            <th scope="col">سفارش</th>
            <th scope="col">وضعیت</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($orders as $order) {

        ?>
        <tr>
            <th scope="row"><?= $order['id'] ?></th>
            <td><?= $order['username'] ?></td>
            <td><?= $order['title'] ?></td>
            <?php
            if ($order['status'] == 1)
            {
            ?>
            <td class="bg-success">انجام شده</td>
            <?php
            }else
            {
            ?>
            <td class="bg-warning">در انتظار</td>
            <?php
            }
            ?>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <hr>
    <div class="container" style="margin-top: 100px">
        <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">ارسال سفارش</span>
        <hr>
        <form class="needs-validation" action="<?= URL ?>order/store" method="post" enctype="multipart/form-data">

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">عنوان سفارش</label>
                <select name="title">
                    <option value="جدا سازی یارانه">جدا سازی یارانه</option>
                    <option value="استعلام خلافی ماشین">استعلام خلافی ماشین</option>
                    <option value="توبت تعویض پلاک">توبت تعویض پلاک</option>
                    <option value="طراحی کارت ویزیت">طراحی کارت ویزیت</option>
                    <option value="نوبت دهی دکتر">نوبت دهی دکتر</option>
                    <option value="فیش حقوقی">فیش حقوقی</option>
                    <option value="درخواست کد پستی">درخواست کد پستی</option>
                    <option value="کارت سوخت">کارت سوخت</option>
                    <option value="جدا سازی یارانه">جدا سازی یارانه</option>
                </select>
            </div>
            <div class="col-md-4" style="display:none ">
                <label for="validationCustom02" class="form-label">کاربر</label>
                <input type="text" name="user_id" class="form-control" id="validationCustom02" value="<?= $user['id'] ?>" >
            </div>

            <div class="col-md-4" style="display:none ">
                <label for="validationCustom02" class="form-label">وضعیت</label>
                <input type="text" name="status" class="form-control" id="validationCustom02" value="0" >
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">ارسال</button>
            </div>
        </form>
    </div>

</div>
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