<?php

$orders = $data['orders'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">

</head>
<body>
<nav class="navbar">
    <div class="navbar-center">
        <ul class="nav-links" id="nav-links">
            <li><a href="<?= URL ?>user/index" class="nav-link scroll-link">کاربران</a></li>
            <li><a href="<?= URL ?>banner/index" class="nav-link scroll-link">بنر ها</a></li>
            <li><a href="<?= URL ?>blog/index" class="nav-link scroll-link">وبلاگ</a></li>
            <li><a href="<?= URL ?>order/index" class="nav-link scroll-link">سفارشات</a></li>
            <li><a href="<?= URL ?>ticket/index" class="nav-link scroll-link">اعلان ها</a></li>
        </ul>
    </div>
</nav>
<div class="container" style="margin-top: 100px">

    <table class="table caption-top" >
        <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">سفارشات</span>
        <hr>

        <thead class="table-dark">
        <tr>
            <th scope="col">کدسفارش</th>
            <th scope="col">سفارش دهنده</th>
            <th scope="col">سفارش</th>
            <th scope="col">وضعیت</th>
            <th scope="col">عملیات</th>
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
                <td><a href="<?= URL .'order/toggle_status/' . $order['id'] ?>">تغییر وضعیت</a></td>

            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>

    <hr>
</div>

</body>
</html>