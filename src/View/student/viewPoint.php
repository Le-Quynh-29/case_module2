<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diem thi</title>
    <style>

    </style>
</head>
<body>

<h1 style="color: black;position: absolute;left: 40%">Bang diem</h1>
<br/>
<br/>
<h2>Hoc sinh: <?php echo $student[0]['studentName'] ?></h2>
<h4>Ma hoc sinh: <?php echo $student[0]['studentNumber']?></h4>

<table class="table">
    <thead class="table-dark">
    <tr>
       <th>Mon</th>
        <th>Diem mieng</th>
        <th>Diem 15 phut</th>
        <th>Diem 1 tiet</th>
        <th>Diem hoc ki</th>
    </tr>
    </thead>
    <?php foreach ($student as $key => $value):?>
        <tr>
            <td><?php echo $value['subjectName']?></td>
            <td><?php echo $value['oralPoint']?></td>
            <td><?php echo $value['fifteenMinutes']?></td>
            <td><?php echo $value['onePeriod']?></td>
            <td><?php echo $value['semester'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>