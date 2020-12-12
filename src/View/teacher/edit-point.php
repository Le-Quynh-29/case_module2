<h2>Cập nhật diem cua hoc sinh</h2>
<form enctype="multipart/form-data" method="POST">
    <div class="form-group">
        <label>Ma hs</label>
    <select name="studentName">
   <?php foreach ($listStudent as $val){
                            echo '<option value="'.$val['studentNumber'].'">'.$val['studentName'].'</option>';
                        }
    ?>
    </select>
    </div>

    <div class="form-group">
        <label>Ma mon</label>
    <select name="subjectNumber">
        <?php foreach ($listSubject as $item){
            echo '<option value="'.$item['subjectNumber'].'">'.$item['subjectName'].'</option>';
        }
        ?>
    </select>
    </div>
<div class="form-group">
    <label>Ma gv</label>
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
<!--    <div class="form-group">-->
<!--        <label>Ma giao vien</label>-->
<!--        <input type="text" name="teacherNumber" value="--><?php //echo $point->teacherNumber; ?><!--" class="form-control"/>-->
<!--    </div>-->
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Update">
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>