<?php
use App\Controller\TeacherController;
use App\Controller\StudentController;
require __DIR__.'/vendor/autoload.php';

$page = isset($_REQUEST['page'])? $_REQUEST['page'] :'';
$teacherController = new TeacherController();
$studentController = new StudentController();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div id="td-header-menu" role="navigation">
    <div id="td-top-mobile-toggle"><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>
    <div class="td-main-menu-logo td-logo-in-header" style="background: black">
        <p style="color: white; position: absolute;left: 20%">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-alarm" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
            </svg>
            Học vấn do người siêng năng đạt được, tài sản do người tinh tế sở hữu, quyền lợi do người dũng cảm nắm giữ, thiên đường do người lương thiện xây dựng và chỉ có bạn mới làm nên thành công cho chính mình</p>
        <p style="color: white; position: absolute;left: 20%;top:50px">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
                <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
            </svg>
            Con đường ngắn nhất để đi đến thành công chính là "học tập"</p>
        <a class="td-mobile-logo td-sticky-disable">
            <img style="width: 200px;height: 100px" src="https://chiasetainguyen.com/upload-file/logo-lop-phong-cach-galaxy5b766c6caf390.jpg" alt="Lop 12A6">
            <h1 style="color: red;background: white;width: 400px ">Chung toi la 12A6</h1>
        </a>
    </div>
</div>
<hr style="border: 1px solid black">
    <div>
        <a href="index.php" class="btn btn-dark">Home</a>
            <a href="index.php?page=show-teacher" class="btn btn-dark">Danh sach giao vien</a>
            <a href="index.php?page=show-student" class="btn btn-dark">Danh sach hoc sinh</a>
        <a href="index.php?page=add-score" class="btn btn-dark">Them diem</a>
    </div>

    <div>

<?php
switch ($page)
{
    case 'show-teacher':
        $teacherController->showTeacher();
        break;
    case 'show-student':
        $studentController->showStudent();
        break;
    case 'edit':
        $studentController->edit();
        break;
    case 'delete':
        $studentController->delete();
        break;
    case 'view-point':
        $id = $_REQUEST['id'];
        $studentController->viewPoint($id);
        break;
    case 'show-point':
        $id = $_REQUEST['id'];
        $teacherController->showPoint($id);
        break;
    case 'add':
        $studentController->addStudent();
        break;
    case 'edit-point':
        $teacherController->editPoint();
        break;
    case 'add-score':
        $teacherController->addScore();
        break;
    case 'search':
        $studentController->search();
        break;
    case 'search-teacher':
        $teacherController->search();
        break;
        }
        ?>
    </div>
</body>
<!--<a href="index.php?page=show-teacher">Danh sach giao vien</a>-->
<!--<a href="index.php?page=show-student">Danh sach hoc sinh</a>-->

