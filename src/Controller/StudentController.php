<?php


namespace App\Controller;
use App\Model\Student;
use App\Model\StudentModel;
class StudentController
{
    public $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }


    public function showStudent()
    {
        $students = $this->studentModel->showStudent();
        include "src/View/student/show-student.php";
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $student = $this->studentModel->get($id);
            include 'src/View/student/edit.php';
        } else {
            $id = $_POST['id'];

            $name = $_POST['name'];
            $gender = $_POST['gender'];
            if($gender == 'Nam'){
                $gender = 'Nam';
            } elseif ($gender == 'Nu'){
                $gender = 'Nu';
            }
            $date = $_POST['date'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $position = $_POST['position'];
            $img = $_FILES['fileToUpload']['name'];
            $img_tmp = $_FILES['fileToUpload']['tmp_name'];
            move_uploaded_file($img_tmp,'img/'.$img);
            $student = new Student($name,$gender,$date,$address,$phone,$position,$img);
            $this->studentModel->update($id,$student);
            include 'src/View/student/edit.php';
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $student = $this->studentModel->get($id);
            include 'src/View/student/delete.php';
        } else {
            $id = $_POST['id'];
            $this->studentModel->delete($id);
            header('Location: index.php');
        }
    }

    public function viewPoint($id){
        $student = $this->studentModel->viewPoint($id);
        include "src/View/student/viewPoint.php";

    }

    public function addStudent()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/student/add.php';
        } else {
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $date = $_POST['date'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $position = $_POST['position'];
            $image = $_FILES['fileToUpload']['name'];
            $img_tmp = $_FILES['fileToUpload']['tmp_name'];
            move_uploaded_file($img_tmp,'img/'.$image);
            $customer = new Student($name, $gender, $date,$address,$phone,$position,$image);
            $this->studentModel->addStudent($customer);
            $message = 'Them thanh cong';
            include 'src/View/student/add.php';
        }
    }

    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $students = $this->studentModel->getSearch($search);
        include "src/View/student/search.php";
    }

}