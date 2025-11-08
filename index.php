<!doctype html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
/*
 * Who: Brandon Chang
 * What: CMP SCI cs192 Lab Web Page #1 Project
 * When: 10/31/25
 * What: PHP Program for Lab Web Page #1
*/

// ----------------------   Lab 7   -----------------------
print "<h2>Lab 7 Assignment</h2>";

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
        $data .= "<p style='text-align:center'>" . $this->name6 . "<br>" . $this->addr6 . "<br>" . $this->city6 . "</p>";
        $data .= "</td></tr></table>";
        return $data;
    }
}

// Build object
$object593 = new Company789();

// Call methods
print $object593->getHeader935();
print "<br><br>";
print $object593->getFooter732();

print "<hr>";

// ----------------------   Lab 6   -----------------------
print "<h2>Lab 6 Assignment</h2>";

function getHeader935($company_name, $color) {
    $data  = "<table style='background-color:$color;width:100%'><tr><td>";
    $data .= "<h1 style='text-align:center'>$company_name</h1>";
    $data .= "</td></tr></table>";
    return $data;
}

function getFooter732($color) {
    global $company_name, $company_address, $company_city;
    $data  = "<table style='background-color:$color;width:100%'><tr><td>";
    $data .= "<p style='text-align:center'>$company_name<br>$company_address<br>$company_city</p>";
    $data .= "</td></tr></table>";
    return $data;
}

$company_name = "Brandon Chang Vacations";
$company_address = "123 Main St";
$company_city = "Miami, FL 33101";

print getHeader935($company_name, "lightgreen");
print "<br><br>";
print getFooter732("lightyellow");

print "<hr>";

// ----------------------   Lab 5   -----------------------
print "<h2>Lab 5 Assignment</h2>";

function display_name_505() {
    global $company_name;
    print "<table style='background-color:pink; width:100%'><tr><td align='center'>";
    print "<h1>$company_name</h1>";
    print "</td></tr></table>";
}

function display_address_505() {
    global $company_address, $company_city;
    print "<table style='background-color:yellow; width:100%'><tr><td align='center'>";
    print "$company_address<br>$company_city";
    print "</td></tr></table>";
}

display_name_505();
print "<br><br>";
display_address_505();

print "<hr>";

// ----------------------   Lab 4   -----------------------
print "<h2>Lab 4 Assignment</h2>";

function display_name_404($name, $color) {
    print "<table style='background-color:$color; width:100%'><tr><td align='center'>";
    print "<h1>$name</h1>";
    print "</td></tr></table>";
}

function display_address_404($color, $address, $city) {
    print "<table style='background-color:$color; width:100%'><tr><td align='center'>";
    print "$address<br>$city";
    print "</td></tr></table>";
}

display_name_404($company_name, "lightblue");
display_address_404("lightgray", $company_address, $company_city);

print "<hr>";

// ----------------------   Lab 3   -----------------------
print "<h2>Lab 3 Assignment</h2>";

function display_name_303($name) {
    print "<h3>$name</h3>";
}

function display_address_303($address, $city) {
    print "$address<br>$city";
}

display_name_303($company_name);
display_address_303($company_address, $company_city);

print "<hr>";

// ----------------------   Lab 2   -----------------------
print "<h2>Lab 2 Assignment</h2>";

function display_address_202() {
    print "123 Main St<br>Miami, FL 33101";
}

display_address_202();

print "<hr>";

// ----------------------   Lab 1   -----------------------
print "<h2>Lab 1 Assignment</h2>";

function display_name_101() {
    print "<h3>Brandon Chang Vacations</h3>";
}

display_name_101();

print "<hr>";

?>
</body>
</html>
