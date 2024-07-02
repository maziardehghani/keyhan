<?php
$banner = $data['banner'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">


</head>
<body>
<div class="container" style="margin-top: 100px">
    <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">نمایش</span>
    <hr>
    <form class="needs-validation">

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">عنوان</label>
            <input name="title" type="text" class="form-control" value="<?= $banner['title'] ?>" id="validationCustom01" readonly>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">وضعیت</label>

            <input class="form-control" type="text" value="<?php if ($banner['active'] == 1) echo 'Active'; else echo 'inActive'; ?>" readonly>
        </div>

        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">تصویر</label>
            <img width="100" height="150" src="<?= URL.BANNER_PATH.$banner['image']?>">
            <input name="image" type="file" class="form-control" id="validationCustom04" readonly>
        </div>
    </form>
    <a href="<?= URL ?>banner/index"> بازگشت </a>
</div>
</body>
</html>