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
    <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">بروز رسانی</span>
    <hr>
    <form class="needs-validation" action="<?= URL ?>banner/update/<?= $banner['id'] ?>" method="post" enctype="multipart/form-data">

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">عنوان</label>
            <input name="title" type="text" class="form-control" value="<?= $banner['title'] ?>" id="validationCustom01" required>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">وضعیت</label>
            <select name="active" class="form-control">
                <option <?php if ($banner['active'] == 1) echo 'selected';?> value="1">فعال</option>
                <option <?php if ($banner['active'] == 0) echo 'selected';?> value="0">غیر فعال</option>
            </select>
        </div>

        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">تصویر</label>
            <img width="100" height="150" src="<?= URL.BANNER_PATH.$banner['image']?>">
            <input name="image" type="file" class="form-control" id="validationCustom04" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">ذخیره</button>
        </div>
    </form>
    <a href="<?= URL ?>banner/index"> بازگشت </a>
</div>
</body>
</html>