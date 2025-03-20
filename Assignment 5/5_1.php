<?php
class House {
    public $room;
    public $fan;
    public $window;
    public $washroom;

    public function setValues($room, $fan, $window, $washroom) {
        $this->room = $room;
        $this->fan = $fan;
        $this->window = $window;
        $this->washroom = $washroom;
    }

    private function displayDetails() {
        echo "Room: " . $this->room . "\n";
        echo "Fan: " . $this->fan . "\n";
        echo "Window: " . $this->window . "\n";
        echo "Washroom: " . $this->washroom . "\n";
    }

    public function showHouseDetails() {
        $this->displayDetails();
    }
}

$house1 = new House();
$house1->setValues(3, 2, 5, 1);
echo "House 1 Details:<br>";
$house1->showHouseDetails();

echo "<br>";
echo "<br>";

$house2 = new House();
$house2->setValues(4, 3, 6, 2);
echo "House 2 Details:<br>";
$house2->showHouseDetails();
?>
