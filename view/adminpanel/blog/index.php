<?php
$blogs = $data['blogs'];
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
        <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">وبلاگ</span>
        <hr>

        <thead class="table-dark">
        <tr>
            <th scope="col">شماره</th>
            <th scope="col">نویسنده</th>
            <th scope="col">عنوان</th>
            <th scope="col">تصویر</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($blogs as $blog) {

        ?>
        <tr>
            <th scope="row"><?= $blog['id'] ?></th>
            <td><?= $blog['username'] ?></td>
            <td><?= $blog['title'] ?></td>
            <td class="col-3"><img width="100" height="100" src="<?= URL.BLOG_PATH.$blog['image'] ?>"></td>
            <td class="col-3">
                <a href="<?= URL ?>blog/delete/<?= $blog['id'] ?>" style="background-color: red" class="btn"> حذف </a>
                <a href="<?= URL ?>blog/edit/<?= $blog['id'] ?>" style="background-color: dodgerblue" class="btn"> تغییر </a>
                <a href="<?= URL ?>blog/show/<?= $blog['id'] ?>" style="background-color: orange" class="btn"> مشاهده </a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <hr>
    <div class="col-12">
        <a href="<?= URL ?>blog/create" class="btn btn-primary">ایجاد </a>
    </div>
</div>

</body>
</html>