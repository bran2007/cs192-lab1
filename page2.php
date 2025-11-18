<!doctype html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
/*
 * Brandon Chang
 * CMP SCI cs192 Lab Web Page #2
*/

// ----------------------------------   Parent Class   -------------------------------

class Company789 {
    public $name6 = "Vacay4Sale";
    private $addr6 = "789 10th St";
    private $city6 = "New York NY 10001";

    protected $whichpage = "Home";   // new property

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
} 

// ----------------------------------   Child Class   ---------------------------

class Child250 extends Company789 {
    public $main_url = "https://cs192-lab1-1.onrender.com";
    public $main_email = "bwchang@my.canyons.edu";

    // navbar array required in lab
    private $navbar_array = array();

    function __construct() {
        $this->name6 = "Brandon Chang Vacations";
    }

    // create navbar array
    function create_navbar_array() {
        $fullurl = $this->main_url . "/page2.php";
        $this->navbar_array = array(
            "Home"     => "$fullurl?whichpage=Home",
            "Sales"    => "$fullurl?whichpage=Sales",
            "Support"  => "$fullurl?whichpage=Support",
            "Contacts" => "$fullurl?whichpage=Contacts"
        );
    }

    // build horizontal navbar
    function getNavBar759() {
        $html = "<table style='width:100%;background-color:#eee'><tr>";

        foreach ($this->navbar_array as $key => $url) {
            $html .= "<td style='text-align:center;padding:10px;'>";
            $html .= "<a href='$url'>$key</a>";
            $html .= "</td>";
        }

        $html .= "</tr></table>";
        return $html;
    }

    // read CGI and update whichpage
    function setWhichPage() {
        if (!isset($_GET["whichpage"]) || $_GET["whichpage"] == "") {
            $this->whichpage = "Home";
        } else {
            $this->whichpage = $_GET["whichpage"];
        }
    }

    // main content block
    function getMain755() {
        $text = "";

        if ($this->whichpage == "Home") {
            $text = "The Home Page";
        } else if ($this->whichpage == "Sales") {
            $text = "The Sales Page";
        } else if ($this->whichpage == "Support") {
            $text = "The Support Page";
        } else if ($this->whichpage == "Contacts") {
            $text = "The Contacts Page";
        }

        $html  = "<h1 style='text-align:center;margin:40px;'>$text</h1>";
        return $html;
    }

    function main_info380() {
        $html  = "<div style='text-align:center; margin:25px;'>";
        $html .= "<strong>Email Address: " . $this->main_email . "</strong><br><br>";
        $html .= "<a href='" . $this->main_url . "'>Click HERE for Web Page #1</a>";
        $html .= "</div>";
        return $html;
    }
} 

// ----------------------------------   Build the Web Page   ---------------------------

$object380 = new Child250();

// header
print $object380->getHeader935();

// navbar
$object380->create_navbar_array();
print $object380->getNavBar759();

// detect which page was clicked
$object380->setWhichPage();

// main content based on page selected
print $object380->getMain755();

// bottom info
print $object380->main_info380();

// footer
print $object380->getFooter732();

?>
</body>
</html>
