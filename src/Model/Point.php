<?php


namespace App\Model;


class Point
{
    public $studentNumber;
    public $subjectNumber;
    public $oralPoint;
    public $fifteenMinutes;
    public $onePeriod;
    public $semester;
    public $teacherNumber;

    public function __construct($studentNumber,$subjectNumber,$oralPoint,$fifteenMinutes,$onePeriod,$semester,$teacherNumber)
    {
        $this->studentNumber = $studentNumber;
        $this->subjectNumber = $subjectNumber;
        $this->oralPoint = $oralPoint;
        $this->fifteenMinutes = $fifteenMinutes;
        $this->onePeriod = $onePeriod;
        $this->semester = $semester;
        $this->teacherNumber = $teacherNumber;
    }
}