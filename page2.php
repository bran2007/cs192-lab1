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

// ---------------------------------- Parent Class -------------------------------

class Company789 {
    public $name6 = "Vacay4Sale";
    private $addr6 = "789 10th St";
    private $city6 = "New York NY 10001";
    protected $whichpage = "Home"; // added for lab 9

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

// ---------------------------------- Child Class -------------------------------

class Child250 extends Company789 {
    public $main_url = "https://cs192-lab1-1.onrender.com";
    public $main_email = "bwchang@my.canyons.edu";
    private $navbar_array = array();

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

    // ------------------ Nav Bar Methods ------------------

    function create_navbar_array() {
        $fullurl = $this->main_url."/page2.php";
        $this->navbar_array = array(
            "Home"=>"$fullurl?whichpage=Home",
            "Sales"=>"$fullurl?whichpage=Sales",
            "Support"=>"$fullurl?whichpage=Support",
            "Contacts"=>"$fullurl?whichpage=Contacts"
        );
    }

    function getNavBar759() {
        $html = "<table style='width:100%; background-color:lightgray'><tr>";
        foreach ($this->navbar_array as $key => $value) {
            $html .= "<td style='text-align:center'><a href='$value'>$key</a></td>";
        }
        $html .= "</tr></table>";
        return $html;
    }

    // ------------------ Page Selection Methods ------------------

    function setWhichPage() {
        if (isset($_GET['whichpage']) && !empty($_GET['whichpage'])) {
            $this->whichpage = $_GET['whichpage'];
        } else {
            $this->whichpage = "Home";
        }
    }

    function getMain755() {
        $html  = "<h1 style='text-align:center'>The " . $this->whichpage . " Page</h1>";
        if ($this->whichpage == "Home") {
            $html .= $this->displaySpecials997();
        }
        return $html;
    }

    // ------------------ Display Specials Method ------------------

    function displaySpecials997() {
        $filename = "car.txt"; 
        if (!file_exists($filename)) {
            return "<p>File not found: $filename</p>";
        }

        $html  = "<h3 style='text-align:center'>Weekly Specials</h3>";
        $html .= "<table border='1' style='width:80%; margin:auto; text-align:center'>";
        $html .= "<tr><th>ID</th><th>Product</th><th>Price</th><th>Description</th></tr>";

        $file = fopen($filename, "r");
        while (($line = fgets($file)) !== false) {
            $line = trim($line);
            if (empty($line)) continue;
            $parts = explode(",", $line);
            $html .= "<tr>";
            foreach ($parts as $part) {
                $html .= "<td>" . htmlspecialchars(trim($part)) . "</td>";
            }
            $html .= "</tr>";
        }
        fclose($file);

        $html .= "</table>";
        return $html;
    }
}  // end class Child250 [Child]

// ---------------------------------- Build the Web Page ---------------------------

$object380 = new Child250();

print $object380->getHeader935();       // header
$object380->create_navbar_array();      // build nav array
print $object380->getNavBar759();       // display nav bar
$object380->setWhichPage();             // determine which page
print $object380->getMain755();         // main content, includes product table for Home
print $object380->main_info380();       // email and link to page 1
print $object380->getFooter732();       // footer

?>
</body>
</html>

<!-- Brandon Chang, CMP SCI cs192 Lab Web Page #2 Project -->
