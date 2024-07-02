
<?php

$user = $data['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Css%20code/style.css">

</head>
<body>
<div class="container" style="margin-top: 100px">
    <span class="badge rounded-pill text-bg-info" style="font-size: 1.5rem">بروز رسانی</span>
    <hr>
    <form class="needs-validation" action="<?= URL ?>user/update/<?= $user['id'] ?>" method="post">

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">ایمیل</label>
            <input name="email" type="text" class="form-control" id="validationCustom01" value="<?= $user['email'] ?>" required>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">نام کاربری</label>
            <input name="username" type="text" class="form-control" id="validationCustom02" value="<?= $user['username'] ?>" required>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">دسترسی</label>
            <select name="type" class="form-control" id="validationCustom04" value="<?= $user['type'] ?>" required>

                <option <?php if ($user['type'] == "USER") echo 'selected' ?> value="USER">USER</option>
                <option <?php if ($user['type'] == "ADMIN") echo 'selected' ?> value="ADMIN">ADMIN</option>

            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">ذخیره</button>
        </div>
        <a href="<?= URL ?>user/index"> بازگشت </a>
    </form>

</div>
</body>
</html>