<!doctype html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
/*
 * Who: Brandon Chang
 * What: CMP SCI cs192 Lab Web Page #2 Project
 * When: 10/31/25  
 * What: PHP Program for Lab Web Page #2 with Database Connection
*/

// ----------------------------------   Parent Class   -------------------------------

class Company789 {
    public $name6 = "Vacay4Sale";
    private $addr6 = "789 10th St";
    private $city6 = "New York NY 10001";

    protected $whichpage = "Home";  // Lab 9
    protected $sqldb9 = null;       // Lab 11 database property

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

    // Lab 11 - Connect to Database
    function getDatabase734() {
        $hostname = "your_hostname";    // e.g., Render DB host
        $username = "your_username";    // e.g., DB user
        $password = "your_password";    // e.g., DB password
        $dbname   = "your_dbname";      // e.g., DB name

        $this->sqldb9 = mysqli_connect($hostname, $username, $password, $dbname);

        if (!$this->sqldb9) {
            print "<b>Database ($dbname) connect and select failed: " . mysqli_connect_error() . "</b><br>";
        } else {
            print "<b>Database ($dbname) connect and select complete</b><br>";
        }
    }

    // Lab 11 - Close Database
    function closeDatabase634() {
        if ($this->sqldb9) {
            mysqli_close($this->sqldb9);
            print "<b>Database closed</b><br>";
        }
    }
}  // end class Company789 [Parent]

// ----------------------------------   Child Class   ---------------------------

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

    // Lab 9 - Navigation bar
    function create_navbar_array() {
        $fullurl = $this->main_url."/page2.php";
        $this->navbar_array = array(
            "Home" => "$fullurl?whichpage=Home",
            "Sales" => "$fullurl?whichpage=Sales",
            "Support" => "$fullurl?whichpage=Support",
            "Contacts" => "$fullurl?whichpage=Contacts"
        );
    }

    function getNavBar759() {
        $html = "<table style='width:100%; text-align:center'><tr>";
        foreach($this->navbar_array as $key => $value) {
            $html .= "<td><a href='$value'>$key</a></td>";
        }
        $html .= "</tr></table>";
        return $html;
    }

    // Lab 9 - CGI whichpage
    function setWhichPage() {
        if (isset($_GET['whichpage']) && $_GET['whichpage'] != "") {
            $this->whichpage = $_GET['whichpage'];
        } else {
            $this->whichpage = "Home";
        }
    }

    // Lab 9 & 10 - Main section + display specials
    function getMain755() {
        $headline = "<h1 style='text-align:center'>The " . $this->whichpage . " Page</h1>";
        $specials = "";
        if ($this->whichpage == "Home") {
            $specials = $this->displaySpecials997();
        }
        return $headline . $specials;
    }

    // Lab 10 - Display weekly specials from file
    function displaySpecials997() {
        $filename = "car.txt"; // Change this file if your business is different
        $html = "<h3 style='text-align:center'>Weekly Specials</h3>";
        $html .= "<table border='1' style='width:80%; margin:auto'>";
        if (file_exists($filename)) {
            $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($lines as $line) {
                $fields = explode(",", $line);
                $html .= "<tr>";
                foreach($fields as $field) {
                    $html .= "<td>" . trim($field) . "</td>";
                }
                $html .= "</tr>";
            }
        } else {
            $html .= "<tr><td colspan='4'>No specials available</td></tr>";
        }
        $html .= "</table>";
        return $html;
    }
}  // end class Child250 [Child]

// ----------------------------------   Build the Web Page   ---------------------------

$object380 = new Child250();

// Lab 11 - Database connect
$object380->getDatabase734();

print $object380->getHeader935();
$object380->create_navbar_array();
print $object380->getNavBar759();
$object380->setWhichPage();
print $object380->getMain755();
print $object380->main_info380();
print $object380->getFooter732();

// Lab 11 - Close database
$object380->closeDatabase634();

?>
</body>
</html>

<!-- Brandon Chang, CMP SCI cs192 Lab Web Page #2 Project -->
