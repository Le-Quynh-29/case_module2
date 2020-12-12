<?php


namespace App\Model;


class Student
{
    public $studentNumber;
    public $studentName;
    public $gender;
    public $dateOfBirth;
    public $address;
    public $phone;
    public $position;
    public $img;

    public function __construct($studentName, $gender,$dateOfBirth,$address,$phone,$position,$img )
    {
        $this->studentName = $studentName;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->phone = $phone;
        $this->position = $position;
        $this->img = $img;
    }
}