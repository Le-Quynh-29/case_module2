<?php
if(isset($message)){
    echo "<h3 class='alert-info'>$message</h3>";
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
    <title>Thêm Diem</title>
</head>
<body style="background-color:aliceblue">
<div class="edu_nav">
    <div class="container">
        <div class="col-12">
            <h1>Thêm Diem</h1>
        </div>
        <div class="col-12">
            <form enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label>Ten HS</label>
                    <select name="studentNumber">
                        <?php foreach ($listStudent as $val){
                            echo '<option value="'.$val['studentNumber'].'">'.$val['studentName'].'</option>';
                        }
                            ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mon hoc</label>
                    <select name="subjectNumber">
                        <?php foreach ($listSubject as $item){
                            echo '<option value="'.$item['subjectNumber'].'">'.$item['subjectName'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ten GV</label>
                    <select name="teacherNumber">
                        <?php
                        foreach ($listTeacher as $value){
                            echo '<option value="'.$value['teacherNumber'].'">'.$value['teacherName'].'</option>';
                        }

                        ?>
                    </select>

                </div>

                <div class="form-group">
                    <label>Diem mieng</label>
                    <input type="text" class="form-control" name="oralPoint" >
                </div>
                <div class="form-group">
                    <label>Diem 15 phut</label>
                    <input type="text" class="form-control" name="fifteenMinutes" >
                </div>
                <div class="form-group">
                    <label>Diem 1 tiet</label>
                    <input type="text" class="form-control" name="onePeriod" >
                </div>
                <div class="form-group">
                    <label>Diem hoc ki</label>
                    <input type="text" class="form-control" name="semester">
                </div>

                <input type="submit" class="btn btn-primary" value="Thêm mới">
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>