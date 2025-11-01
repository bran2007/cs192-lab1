<!DOCTYPE html>
<html>
<head>
<title>College1.com - cs192 - Lab 7</title>
</head>
<body>

<h1>College1.com - cs192 - Lab 7</h1>
<hr>

<!-- ----------------------   Lab 7   ---------------------- -->

<?php
print "<h2>Lab 7 Assignment</h2>";

// Define the Company789 class
class Company789 {

    // Properties
    public $name6 = "Vacay4Sale";
    private $addr6 = "789 10th St";
    private $city6 = "New York NY 10001";

    // Methods
    function getHeader935($company, $color) {
        $output = "<div style='color:$color'>";
        $output .= "<h3>$company</h3>";
        $output .= "<p>Welcome to our company web page!</p>";
        $output .= "</div>";
        return $output;
    }

    function getFooter732() {
        $output = "<p>Address: " . $this->addr6 . "<br>";
        $output .= $this->city6 . "</p>";
        $output .= "<p>Thank you for visiting " . $this->name6 . "!</p>";
        return $output;
    }
}

// Create an object from the class
$object593 = new Company789();

// Call methods using the object
print $object593->getHeader935($object593->name6, "blue");
print "<br><br>";
print $object593->getFooter732();

print "<hr>";
?>

<!-- ----------------------   Lab 6   ---------------------- -->

<?php
print "<h2>Lab 6 Assignment</h2>";

$companyName = "Brandon Chang Spaceworks";
$companyAddress = "1234 Galaxy Ave";
$companyCity = "Miami, FL 33101";

function getHeader935($name, $color) {
    return "<div style='color:$color'><h3>$name</h3><p>Welcome to our company web page!</p></div>";
}

function getFooter732($addr, $city) {
    return "<p>Address: $addr<br>$city</p>";
}

print getHeader935($companyName, "red");
print "<br><br>";
print getFooter732($companyAddress, $companyCity);
print "<hr>";
?>

<!-- ----------------------   Lab 5   ---------------------- -->

<?php
print "<h2>Lab 5 Assignment</h2>";

function display_name_5() {
    print "Brandon Chang<br>";
}
function display_address_5() {
    print "1234 Galaxy Ave<br>Miami, FL 33101<br>";
}
display_name_5();
display_address_5();

print "<hr>";
?>

<!-- ----------------------   Lab 4   ---------------------- -->

<?php
print "<h2>Lab 4 Assignment</h2>";

function display_name_4() {
    print "Brandon Chang<br>";
}
function display_address_4() {
    print "1234 Galaxy Ave<br>Miami, FL 33101<br>";
}
display_name_4();
display_address_4();

print "<hr>";
?>

<!-- ----------------------   Lab 3   ---------------------- -->

<?php
print "<h2>Lab 3 Assignment</h2>";

function display_name_3() {
    print "Brandon Chang<br>";
}
function display_address_3() {
    print "1234 Galaxy Ave<br>Miami, FL 33101<br>";
}
display_name_3();
display_address_3();

print "<hr>";
?>

<!-- ----------------------   Lab 2   ---------------------- -->

<?php
print "<h2>Lab 2 Assignment</h2>";

function display_name_2() {
    print "Brandon Chang<br>";
}
function display_address_2() {
    print "1234 Galaxy Ave<br>Miami, FL 33101<br>";
}
display_name_2();
display_address_2();

print "<hr>";
?>

<!-- ----------------------   Lab 1   ---------------------- -->

<?php
print "<h2>Lab 1 Assignment</h2>";

function display_name_1() {
    print "Brandon Chang<br>";
}
function display_address_1() {
    print "1234 Galaxy Ave<br>Miami, FL 33101<br>";
}
display_name_1();
display_address_1();
?>

</body>
</html>
