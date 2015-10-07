

<?php
/*
You have been placed in charge of digitizing a school's student records. Remembering what you
learned at Austin Coding Academy, you decide to use classes to tackle this task.
Write class Student . A Student has a name, grade point average, and number of credit
hours.

A Student is considered full-time if (s)he is taking at least 12 hours. Write method
enrollment_status that returns full-time if the student is full-time, or part-time
otherwise.

Student s are graded on a 4.0 GPA scale. For the purposes of this problem, we'll use the
following scale:

>= 3.0: A
>= 2.0: B
>= 1.0: C
< 1.0: F

Write method letter_grade that returns a student's letter grade based on his/her GPA.

Given your implementation of class Student , the following test code should work:

create a Student named Bob with a GPA of 4.0 who is taking 15 credits
$bob = new Student("Bob", 2.8, 15);
echo $bob->enrollment_status(); // prints "full-time"
echo $bob->letter_grade(); // prints 'B'
$alice = new Student("Alice", 4.0, 10);
echo $alice->enrollment_status(); // prints "part-time"
echo $alice->letter_grade(); // prints 'A'
*/

class Student
{
    public $name;
    public $gpa;
    public $credit;

    function __construct($name, $gpa, $credit)
    {
        $this->name = $name;
        $this->gpa = $gpa;
        $this->credit = $credit;
    }

    function enrollment_status()
    {
        if ($this->credit >= 12) {
            return "Full-time<br>";
        } else return "Part-time<br>";
    }

    function letter_grade()
    {
        if ($this->gpa >= 3.0) {
            return "A<br>";
        } else if ($this->gpa >= 2.0) {
            return "B<br>";
        } else if ($this->gpa >= 1.0) {
            return "C<br>";
        } else if ($this->gpa < 1.0) { //or just say else {return "F";}
            return "F<br>";
        }
    }
}


// create a Student named Bob with a GPA of 4.0 who is taking 15 credits

$bob = new Student("Bob", 2.8, 15);

echo $bob->enrollment_status(); // prints "full-time"

echo $bob->letter_grade(); // prints 'B'

$alice = new Student("Alice", 4.0, 10);

echo $alice->enrollment_status(); // prints "part-time"

echo $alice->letter_grade(); // prints 'A'

?>
