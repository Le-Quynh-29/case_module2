<?php


namespace App\Model;


class TeacherModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function showTeacher()
    {
        $sql = "SELECT * FROM teachers";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function getListTeacher()
    {
        $sql = "SELECT * FROM teachers";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function getListStudent()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function getListSubject()
    {
        $sql = "SELECT * FROM subjects";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function showPoint($id)
    {
        $sql = "SELECT subjectName,teacherName, studentName, oralPoint,fifteenMinutes,onePeriod,semester FROM transcripts tr
        join students st on st.studentNumber = tr.studentNumber
        join teachers t on t.teacherNumber = tr.teacherNumber
        join subjects sb on tr.subjectNumber = sb.subjectNumber
        where t.teacherNumber = ?";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function editScore($point)
    {
        $sql = "UPDATE `transcripts` SET `oralPoint` = ?,`fifteenMinutes`=?,`onePeriod`=?,`semester`=?, WHERE `transcripts`.`studentNumber` = ? AND `transcripts`.`subjectNumber` = ? AND `transcripts`.`teacherNumber` = ? ";
        $statement = $this->database->prepare($sql);
        $statement->bindValue(1, $point->oralPoint);
        $statement->bindValue(2, $point->fifteenMinutes);
        $statement->bindValue(3, $point->onePeriod);
        $statement->bindValue(4, $point->semester);
        $statement->bindValue(6, $point->studentNumber);
        $statement->bindValue(7, $point->subjectNumber);
        $statement->bindValue(8, $point->teacherNumber);
        return $statement->execute();
    }

    public function getSearch($search)
    {
        $sql = "SELECT * FROM teachers  WHERE `teacherName` LIKE '$search'";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addScore($point)
    {
        $sql ="INSERT INTO `transcripts` (`studentNumber`, `subjectNumber`, `oralPoint`, `fifteenMinutes`, `onePeriod`, `semester`, `teacherNumber`) VALUES (?,?,?,?,?,?,?)";
        $statement = $this->database->prepare($sql);
        $statement->bindValue(1, $point->studentNumber);
        $statement->bindValue(2, $point->subjectNumber);
        $statement->bindValue(3, $point->oralPoint);
        $statement->bindValue(4,$point->fifteenMinutes);
        $statement->bindValue(5,$point->onePeriod);
        $statement->bindValue(6,$point->semester);
        $statement->bindValue(7,$point->teacherNumber);
        $statement->execute();
    }

}