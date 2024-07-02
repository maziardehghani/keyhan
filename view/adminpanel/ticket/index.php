<?php
$tickets = $data['tickets'];
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
        <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">اعلان ها</span>
        <hr>

        <thead class="table-dark">
        <tr>
            <th scope="col">شماره</th>
            <th scope="col">کاربر</th>
            <th scope="col">متن</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($tickets as $ticket) {

        ?>
        <tr>
            <th scope="row"><?= $ticket['id'] ?></th>
            <td><?= $ticket['username'] ?></td>
            <td><?= $ticket['text'] ?></td>
            <td class="col-3">
                <a href="<?= URL ?>ticket/delete/<?= $ticket['id'] ?>" style="background-color: red" class="btn"> حذف </a>
                <a href="<?= URL ?>user/edit/<?= $ticket['id'] ?>" style="background-color: dodgerblue" class="btn"> تغییر </a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <hr>
    <div class="col-12">
        <a href="<?= URL ?>ticket/create" class="btn btn-primary">ایجاد </a>
    </div>
</div>

</body>
</html>