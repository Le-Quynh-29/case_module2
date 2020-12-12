<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Thêm Học Sinh</title>
</head>
<body style="background-color:aliceblue">
<div class="edu_nav">
    <div class="container">
        <div class="col-12">
            <h1>Thêm hoc sinh</h1>
        </div>
        <div class="col-12">
            <form enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label>Ho va ten</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Gioi tinh</label>
                    <select name="gender">
                        <option>Nam</option>
                        <option>Nu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ngay sinh</label>
                    <input type="date" class="form-control" name="date" required>
                </div>
                <div class="form-group">
                    <label>Dia chi</label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="form-group">
                    <label>So dien thoai</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
                <div class="form-group">
                    <label>Chuc vu</label>
                    <input type="text" class="form-control" name="position">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">

                </div>
                <input type="submit" class="btn btn-primary" value="Thêm mới">
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
