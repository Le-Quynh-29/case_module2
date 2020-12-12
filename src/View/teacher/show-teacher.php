


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sach giao vien</title>
    <style>
        h1{
            position: absolute;
            left: 35%;
        }
        table{
            background: white;
            position: absolute;
            top: 300px;
        }
    </style>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="?page=search-teacher" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<h1>Danh sach giao vien</h1>

<table class="table">
<thead  class="table-dark">
    <tr>
        <th>STT</th>
        <th>Ten giao vien</th>
        <th>Gioi tinh</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Mon day</th>
        <th>So dien thoai</th>
        <th>Email</th>
        <th>Bang diem</th>
    </tr>
</thead>

    <?php foreach ($teachers as $key => $teacher): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td>
        <?php echo $teacher['teacherName']?>
        </td>
        <td>
            <?php echo $teacher['gender']?>
        </td>
        <td>
            <?php echo $teacher['dateOfBirth']?>
        </td>
        <td>
            <?php echo $teacher['address']?>
        </td>
        <td>
            <?php echo $teacher['position']?>
        </td>
        <td>
            <?php echo $teacher['phone']?>
        </td>
        <td>
            <?php echo $teacher['email']?>
        </td>
        <td><a href="index.php?page=show-point&id=<?php echo $teacher['teacherNumber'] ?>" class="btn btn-info">Diem</a></td>

    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>