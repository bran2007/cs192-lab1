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
    protected $whichpage = "Home";      // default page
    protected $sqldb9 = null;           // database connection

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

    function getDatabase734() {
        $hostname = "your_host_name";      // e.g., fdb34.awardspace.net
        $username = "your_db_username";    // e.g., 1234567_db1
        $password = "your_db_password";    // password you set
        $dbname   = "your_db_name";        // e.g., 1234567_db1

        $this->sqldb9 = mysqli_connect($hostname, $username, $password, $dbname);

        if (!$this->sqldb9) {
            echo "<b>Database ($dbname) connect and select failed: " . mysqli_connect_error() . "</b><br>";
        } else {
            echo "<b>Database ($dbname) connect and select complete</b><br>";
        }
    }

    function closeDatabase634() {
        if ($this->sqldb9) {
            mysqli_close($this->sqldb9);
            echo "<b>Database closed</b><br>";
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

    // ------------------- Navigation -------------------
    function create_navbar_array() {
        $fullurl = $this->main_url . "/page2.php";
        $this->navbar_array = array(
            "Home" => "$fullurl?whichpage=Home",
            "Sales" => "$fullurl?whichpage=Sales",
            "Support" => "$fullurl?whichpage=Support",
            "Contacts" => "$fullurl?whichpage=Contacts"
        );
    }

    function getNavBar759() {
        $data = "<table style='width:100%; text-align:center'><tr>";
        foreach ($this->navbar_array as $key => $url) {
            $data .= "<td><a href='$url'>$key</a></td>";
        }
        $data .= "</tr></table>";
        return $data;
    }

    // ------------------- Page Handling -------------------
    function setWhichPage() {
        if (isset($_GET['whichpage']) && $_GET['whichpage'] != "") {
            $this->whichpage = $_GET['whichpage'];
        } else {
            $this->whichpage = "Home";
        }
    }

    function getMain755() {
        $headline = "<h1 style='text-align:center'>The " . $this->whichpage . " Page</h1>";

        $content = "";
        if ($this->whichpage == "Home") {
            $content .= $this->displaySpecials997();  // show table on Home page
        }

        return $headline . $content;
    }

    // ------------------- Display Weekly Specials -------------------
    function displaySpecials997() {
        $filename = "car.txt";   // change this if using vacation.txt or realestate.txt
        if (!file_exists($filename)) {
            return "<p>File $filename not found</p>";
        }

        $html  = "<h3 style='text-align:center'>Weekly Specials</h3>";
        $html .= "<table border='1' style='width:100%; text-align:left'><tr><th>ID</th><th>Name</th><th>Price</th><th>Description</th></tr>";

        $file = fopen($filename, "r");
        while (!feof($file)) {
            $line = trim(fgets($file));
            if ($line != "") {
                $parts = explode(",", $line);
                $html .= "<tr>";
                foreach ($parts as $part) {
                    $html .= "<td>" . htmlspecialchars(trim($part)) . "</td>";
                }
                $html .= "</tr>";
            }
        }
        fclose($file);

        $html .= "</table>";
        return $html;
    }
}  // end class Child250 [Child]

// ----------------------------------   Build the Web Page ---------------------------

$object380 = new Child250();

// 1. Connect to database (Lab 11)
$object380->getDatabase734();  // prints connection status

// 2. Navigation
$object380->create_navbar_array();
$object380->setWhichPage();

// 3. Header, NavBar, Main, Footer
print $object380->getHeader935();
print $object380->getNavBar759();
print $object380->getMain755();
print $object380->main_info380();
print $object380->getFooter732();

// 4. Close database
$object380->closeDatabase634();

?>
</body>
</html>

<!-- Brandon Chang, CMP SCI cs192 Lab Web Page #2 Project -->
