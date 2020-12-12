<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sach hoc sinh</title>
    <style>
        table{
            background:white;
        }
    </style>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<h1 style="position: absolute;left: 35%">Danh sach hoc sinh</h1>
<br/>
<a href="./index.php?page=add" style="color: red" class="btn btn-success">Thêm mới</a>
<table class="table">
    <thead class="table-dark">
    <tr>
        <th>STT</th>
        <th>Ten hoc sinh</th>
        <th>Gioi tinh</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>So dien thoai</th>
        <th>Chuc vu</th>
        <th>Anh</th>
        <th></th>
        <th></th>
        <th>Diem thi</th>
    </tr>
    </thead>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td>
                <?php echo $student->studentName?>
            </td>
            <td>
                <?php echo $student->gender?>
            </td>
            <td>
                <?php echo $student->dateOfBirth?>
            </td>
            <td>
                <?php echo $student->address?>
            </td>
            <td>
                <?php echo $student->phone?>
            </td>
            <td>
                <?php echo $student->position?>
            </td>
            <td>
                <img style="width: 75px" src="img/<?php echo $student->img ?>">
            </td>
            <td> <a href="index.php?page=edit&id=<?php echo $student->studentNumber; ?>"  class="btn btn-primary">Update</a></td>
            <td><a href="index.php?page=delete&id=<?php echo $student->studentNumber ?>" class="btn btn-danger" >Delete</a></td>
            <td><a href="index.php?page=view-point&id=<?php echo $student->studentNumber ?>" class="btn btn-warning">Diem</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>