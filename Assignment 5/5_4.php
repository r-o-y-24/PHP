<?php
class BCA {
    private $rollno;
    protected $age;
    public $name, $gender;

    public function __construct($name, $rollno, $age, $gender) {
        $this->name = $name;
        $this->rollno = $rollno;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function displayBCA() {
        echo "BCA Student: $this->name, Roll No: $this->rollno, Age: $this->age, Gender: $this->gender\n";
    }
}

class MCA extends BCA {
    private $mcaroll, $mobile;

    public function __construct($name, $rollno, $age, $gender, $mcaroll, $mobile) {
        parent::__construct($name, $rollno, $age, $gender);
        $this->mcaroll = $mcaroll;
        $this->mobile = $mobile;
    }

    public function displayMCA() {
        echo "MCA Student: " . $this->name . ",<br> MCA Roll No: $this->mcaroll,<br> Mobile: $this->mobile";
    }
}

$mcaStudent = new MCA("John Doe", 101, 22, "Male", 5001, "9876543210");
$mcaStudent->displayMCA();
?>