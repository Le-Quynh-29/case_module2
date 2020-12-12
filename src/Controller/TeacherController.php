<?php
namespace App\Controller;

use App\Model\TeacherModel;
use App\Model\Point;
class TeacherController
{
    protected $teacherModel;

    public function __construct()
    {
        $this->teacherModel = new TeacherModel();
    }

    public function showTeacher()
    {
        $teachers = $this->teacherModel->showTeacher();
        include "src/View/teacher/show-teacher.php";
    }

    public function showPoint($id)
    {
        $teacher = $this->teacherModel->showPoint($id);
        include "src/View/teacher/showPoint.php";
    }

    public function editPoint()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $listStudent = $this->teacherModel->getListStudent();
            $listSubject = $this->teacherModel->getListSubject();
            $listTeacher = $this->teacherModel->getListTeacher();
            include 'src/View/teacher/edit-point.php';
        } else {
            $studentNumber = $_POST['studentNumber'];
            $subjectNumber = $_POST['subjectNumber'];
            $teacherNumber = $_POST['teacherNumber'];

            $oralPoint = (float)$_POST['oralPoint'];
            $fifteenMinutes =(float) $_POST['fifteenMinutes'];
            $onePeriod =(float) $_POST['onePeriod'];
            $semester = (float)$_POST['semester'];

            $point = new Point($studentNumber,$subjectNumber,$teacherNumber,$oralPoint,$fifteenMinutes,$onePeriod,$semester);
            $this->teacherModel->editScore($point);
            include 'src/View/teacher/edit-point.php';
        }
    }

    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $teachers = $this->teacherModel->getSearch($search);
        include "src/View/teacher/search.php";
    }

    public function getListTeacher()
    {
        return $this->teacherModel->getListTeacher();
    }

    public function getListStuddent()
    {
        return $this->teacherModel->getListStudent();
    }

    public function getListSubject()
    {
        return $this->teacherModel->getListSubject();
    }

    public function addScore()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $listTeacher = $this->getListTeacher();
            $listStudent = $this->getListStuddent();
            $listSubject = $this->getListSubject();

            include 'src/View/teacher/add-score.php';
        } else {
            $studentNumber = $_POST['studentNumber'];
            $subjectNumber = $_POST['subjectNumber'];
            $teacherNumber = $_POST['teacherNumber'];
            $oralPoint = (float)$_POST['oralPoint'];
            $fifteenMinutes = (float)$_POST['fifteenMinutes'];
            $onePeriod = (float)$_POST['onePeriod'];
            $semester = (float)$_POST['semester'];

            $score = new Point($studentNumber, $subjectNumber, $oralPoint, $fifteenMinutes, $onePeriod, $semester, $teacherNumber);
             $this->teacherModel->addScore($score);
            $message = 'Them thanh cong';
            include 'src/View/teacher/add-score.php';
        }
    }
}