
<form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Ten hs</th>
        <th scope="col">Gioi tinh</th>
        <th scope="col">Dia chi</th>
        <th scope="col">So dien thoai</th>
        <th scope="col">Chuc vu</th>
        <th></th>
        <th></th>
        <th>Diem thi</th>
    </tr>
    </thead>

    <?php foreach ($students as $key => $student): ?>
    <tbody>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $student['studentName'] ?></td>
        <td><?php echo $student['gender'] ?></td>
        <td><?php echo $student['address'] ?></td>
        <td><?php echo $student['phone'] ?></td>
        <td><?php echo $student['position'] ?></td>
        <td> <a href="index.php?page=edit&id=<?php echo $student['studentNumber']; ?>"  class="btn btn-primary">Update</a></td>
        <td><a href="index.php?page=delete&id=<?php echo $student['studentNumber']; ?>" class="btn btn-danger" >Delete</a></td>
        <td><a href="index.php?page=view-point&id=<?php echo $student['studentNumber']; ?>" class="btn btn-warning">Diem</a></td>
        <td><?php ?></td>
    <?php endforeach; ?>
    </tbody>
</table>