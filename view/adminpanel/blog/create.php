<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">

</head>
<body>

<div class="container" style="margin-top: 100px">
    <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">ایجاد</span>
    <hr>
    <form class="needs-validation" action="<?= URL ?>blog/store" method="post" enctype="multipart/form-data">

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">عنوان</label>
            <input type="text" name="title" class="form-control" id="validationCustom02"  >
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">متن</label>
            <textarea class="form-control" name="text" id="validationCustom03" ></textarea>

        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">تصویر</label>
            <input type="file" name="image" class="form-control" id="validationCustom04"  >
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">ذخیره</button>
        </div>
    </form>
</div>

</body>
</html>
