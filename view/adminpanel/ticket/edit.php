<?php
$blog = $data['blog']
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
    <form class="needs-validation" action="<?= URL ?>blog/update/<?= $blog['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">عنوان</label>
            <input name="title" type="text" class="form-control" id="validationCustom02" value="<?= $blog['title'] ?>"  required>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">متن</label>
            <textarea name="text" class="form-control" id="validationCustom03"><?= $blog['text'] ?></textarea>

        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">تصویر</label>
            <img width="150" height="150" src="<?= URL.BLOG_PATH.$blog['image'] ?>">
            <input name="image" type="file" class="form-control" id="validationCustom04"  required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">ذخیره</button>
        </div>
    </form>
    <a href="<?= URL ?>blog/index"> بازگشت </a>

</div>
</body>
</html>