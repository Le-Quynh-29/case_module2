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
<body>
<div>
 <h1 style="color: black;position: absolute;left: 40%">Bang diem</h1>
    <br/>
    <br/>
<h2>Ho ten GV: <?php echo $teacher[0]['teacherName'] ?></h2>
<h4>Mon: <?php echo $teacher[0]['subjectName']?></h4>
</div>
<table class="table">
    <thead class="table-dark">
    <tr>
        <th>Hoc sinh</th>
        <th>Diem mieng</th>
        <th>Diem 15 phut</th>
        <th>Diem 1 tiet</th>
        <th>Diem hoc ki</th>
    </tr>
    </thead>
    <?php foreach ($teacher as $key => $value):?>
        <tr>
            <td><?php echo $value['studentName']?></td>
            <td><?php echo $value['oralPoint']?></td>
            <td><?php echo $value['fifteenMinutes']?></td>
            <td><?php echo $value['onePeriod']?></td>
            <td><?php echo $value['semester'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>