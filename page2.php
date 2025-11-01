<!doctype html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
/*
 * Who: Brandon Chang
 * What: CMP SCI cs192 Lab Web Page #2 Project
 * When: 10/31/25  
 * What: PHP Program for Lab Web Page #2
*/

// ----------------------------------   Parent Class   -------------------------------

class Company789 {
    public $name6 = "Vacay4Sale";
    private $addr6 = "789 10th St";
    private $city6 = "New York NY 10001";

    function getHeader935() {
        $data  = "<table style='background-color:lightblue;width:100%'><tr><td>";
        $data .= "<h1 style='text-align:center'>" . $this->name6 . "</h1>";
        $data .= "</td></tr></table>";
        return $data;
    }

    function getFooter732() {
        $data  = "<table style='background-color:lightgray;width:100%'><tr><td>";
        $data .= "<p style='text-align:center'><b>" . $this->name6 . "<br>" . $this->addr6 . "<br>" . $this->city6 . "</b></p>";
        $data .= "</td></tr></table>";
        return $data;
    }
}  // end class Company789 [Parent]

// ----------------------------------   Lab 8 Child Class   ---------------------------

class Child250 extends Company789 {
    public $main_url = "https://cs192-lab1-1.onrender.com";
    public $main_email = "bwchang@my.canyons.edu";

    function __construct() {
        $this->name6 = "Brandon Chang Vacations";
    }

    function main_info380() {
        $html  = "<div style='text-align:center; margin:25px;'>";
        $html .= "<strong>Email Address: " . $this->main_email . "</strong><br><br>";
        $html .= "<a href='" . $this->main_url . "'>Click HERE for Web Page #1</a>";
        $html .= "</div>";
        return $html;
    }
}  // end class Child250 [Child]

// ----------------------------------   Build the Web Page   ---------------------------

$object380 = new Child250();

print $object380->getHeader935();
print $object380->main_info380();
print $object380->getFooter732();

?>
</body>
</html>

<!-- Brandon Chang, CMP SCI cs192 Lab Web Page #2 Project -->
