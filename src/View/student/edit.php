<div class="edu_nav">
    <div class="container">
        <div class="col-12">
            <h1>Cap nhat danh sach hoc sinh</h1>
        </div>
        <div class="col-12">
<form enctype="multipart/form-data" method="POST"  class="was-validated" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $student->studentNumber; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $student->studentName; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Gioi tinh</label>
        <select name="gender" required>
            <option>Nu</option>
            <option>Nam</option>
        </select>
    </div>
    <div class="form-group">
        <label>Ngay sinh</label>
        <textarea name="date" class="form-control"><?php echo $student->dateOfBirth; ?></textarea>
    </div>
    <div class="form-group">
        <label>Dia chi</label>
        <textarea name="address" class="form-control"><?php echo $student->address; ?></textarea>
    </div>
    <div class="form-group">
        <label>So dien thoai</label>
        <textarea name="phone" class="form-control"><?php echo $student->phone; ?></textarea>
    </div>
    <div class="form-group">
        <label>Chuc vu</label>
        <textarea name="position" class="form-control"><?php echo $student->position; ?></textarea>
    </div>
    <div class="form-group">
        <label>Anh</label>
        <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $student->img; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Update">
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
    </div>
</div>
</div>

