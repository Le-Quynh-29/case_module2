<?php


namespace App\Model;


class StudentModel
{
    protected $student;

    public function __construct()
    {
        $db = new DBConnect();
        $this->student = $db->connect();
    }

    public function showStudent()
    {
        $sql = "SELECT * FROM students";
        $stmt =  $this->student->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $students = [];
        foreach ($result as $row)
        {
            $student = new Student($row['studentName'], $row['gender'], $row['dateOfBirth'], $row['address'], $row['phone'],$row['position'],$row['img']);
            $student->studentNumber = $row['studentNumber'];
            $students[] = $student;
        }
        return $students;
    }

    public function get($id){
        $sql = "SELECT * FROM students WHERE studentNumber = ?";
        $statement = $this->student->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $student = new Student($row['studentName'], $row['gender'], $row['dateOfBirth'], $row['address'], $row['phone'],$row['position'],$row['img']);
        $student->studentNumber = $row['studentNumber'];
        return $student;
    }

     public function update($id, $student){
    $sql = "UPDATE students SET studentName = ?, gender = ?, dateOfBirth = ?, address = ?,phone = ?, position = ?, img = ? WHERE studentNumber = ?";
    $statement = $this->student->prepare($sql);
    $statement->bindParam(1, $student->studentName);
    $statement->bindParam(2, $student->gender);
    $statement->bindParam(3, $student->dateOfBirth);
    $statement->bindParam(4,$student->address);
    $statement->bindParam(5,$student->phone);
    $statement->bindParam(6,$student->position);
    $statement->bindParam(7,$student->img);
    $statement->bindParam(8, $id);
    return $statement->execute();
}

    public function delete($id){
        $sql_transcripts = "DELETE FROM transcripts WHERE studentNumber = ?";
        $stmt = $this->student->prepare($sql_transcripts);
        $stmt->bindParam(1,$id);
        $stmt->execute();

        $sql = "DELETE FROM students WHERE studentNumber = ?";
        $statement = $this->student->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
    }

    public function viewPoint($id){
        $sql = "SELECT st.studentNumber, studentName,subjectName,oralPoint,fifteenMinutes,onePeriod,semester 
FROM transcripts tr 
    join subjects sb on tr.subjectNumber = sb.subjectNumber
    join students st on tr.studentNumber = st.studentNumber
     WHERE tr.studentNumber = ?";
        $statement = $this->student->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function addStudent($student){
        $sql = "INSERT INTO students(studentName, gender, dateOfBirth,address,phone,position,img) VALUES (?, ?, ?,?,?,?,?);";
        $statement = $this->student->prepare($sql);
        $statement->bindParam(1, $student->studentName);
        $statement->bindParam(2, $student->gender);
        $statement->bindParam(3, $student->dateOfBirth);
        $statement->bindParam(4,$student->address);
        $statement->bindParam(5,$student->phone);
        $statement->bindParam(6,$student->position);
        $statement->bindParam(7,$student->img);
        $statement->execute();

    }

    public function getSearch($search)
    {
        $sql = "SELECT * FROM students  WHERE `studentName` LIKE '$search'";
        $stmt = $this->student->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}