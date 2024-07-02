
<?php

$blog = $data['blog']
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
<div class="container">

    <form class="needs-validation " style="margin-top: 100px" novalidate>
        <span class="badge rounded-pill text-bg-info " style="font-size: 1.5rem">نمایش</span>
        <hr>
        <div class="col-md-10">
            <label for="validationCustom01" class="form-label">نویسنده</label>
            <input type="text" class="form-control" id="validationCustom01" value="<?= $blog['username'] ?>" readonly>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">عنوان</label>
            <input type="text" class="form-control" id="validationCustom02" value="<?= $blog['title'] ?>" readonly>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">متن</label>
            <textarea class="form-control" id="validationCustom03" readonly> <?= $blog['text'] ?></textarea>
        </div>
        <div class="col-md-4">
            <label  class="form-label">تصویر</label>
            <img src="<?= URL.BLOG_PATH.$blog['image'] ?>" width="200" height="200">
        </div>

    </form>
    <a href="<?= URL ?>blog/index"> بازگشت </a>

</div>

</body>
</html>