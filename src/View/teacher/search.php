<form method="post" enctype="multipart/form-data" action="?page=search-teacher" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Ten GV</th>
        <th scope="col">Gioi tinh</th>
        <th scope="col">Dia chi</th>
        <th scope="col">So dien thoai</th>
        <th scope="col">Email</th>
        <th scope="col">Mon day</th>
        <th>Diem thi</th>
    </tr>
    </thead>

    <?php foreach ($teachers as $key => $teacher): ?>
    <tbody>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $teacher['teacherName'] ?></td>
        <td><?php echo $teacher['gender'] ?></td>
        <td><?php echo $teacher['address'] ?></td>
        <td><?php echo $teacher['phone'] ?></td>
        <td><?php echo $teacher['email'] ?></td>
        <td><?php echo $teacher['position'] ?></td>
        <td><a href="index.php?page=show-point&id=<?php echo $teacher['teacherNumber']; ?>" class="btn btn-warning">Diem</a></td>
        <td><?php ?></td>
        <?php endforeach; ?>
    </tbody>
</table>