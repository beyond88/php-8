<?php
class Student 
{
    private int|float $roomNo;
    public function setRoomNo(int|float $roomNo): void {
        $this->roomNo;
    }
    public function getRoomNo(): int|float {
        return $this->roomNo;
    }
}
$newStudent1 = new Student;
$newStudent1->setRoomNo(25.0);
$newStudent2 = new Student;
$newStudent2->setRoomNo(4);
 
echo "Student 1 number is " .$newStudent1->getRoomNo(). "<br>";
echo "Student 2 number is " .$newStudent2->getRoomNo();