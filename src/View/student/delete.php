<h2>Bạn chắc chắn muốn xoa hoc sinh <?php echo $student->studentName; ?>?</h2>
<!--<h3>--><?php //echo $student->studentName; ?><!--</h3>-->
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $student->studentNumber; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>

