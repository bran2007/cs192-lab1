<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Brandon Chang - CS192 Labs 1–7</title>
</head>
<body>

<?php
// --------------------------------------------------
// Lab 7
// --------------------------------------------------
print "<h2>Lab 7 Assignment</h2>";

// CLASS DEFINITION
class Company789 {

  // properties
  public $name6 = "Vacay4Sale";
  private $addr6 = "789 10th St";
  private $city6 = "New York NY 10001";

  // methods copied and adjusted from Lab 6

  // Header method (2 parameters)
  function getHeader935($companyName, $color) {
    $data = "<table style='background-color:$color;width:100%'><tr><td>";
    $data .= "<h1 style='text-align:center'>$companyName</h1>";
    $data .= "</td></tr></table>";
    return $data;
  }

  // Footer method (1 parameter)
  function getFooter732($color) {
    $data = "<table style='background-color:$color;width:100%'><tr><td>";
    $data .= "<p style='text-align:center;font-size:14px'>";
    $data .= $this->name6 . "<br>" . $this->addr6 . "<br>" . $this->city6;
    $data .= "</p></td></tr></table>";
    return $data;
  }
} // end class Company789

// create object and call methods
$object593 = new Company789();

print $object593->getHeader935($object593->name6, "lightgreen");
print "<br><br>";
print $object593->getFooter732("lightyellow");

print "<hr>";

// --------------------------------------------------
// Lab 6
// --------------------------------------------------
print "<h2>Lab 6 Assignment</h2>";

// functions that return HTML instead of printing
function getHeader935($companyName, $color) {
  $data = "<table style='background-color:$color;width:100%'><tr><td>";
  $data .= "<h1 style='text-align:center'>$companyName</h1>";
  $data .= "</td></tr></table>";
  return $data;
}

function getFooter732($color) {
  global $companyName, $companyAddress, $companyCity, $companyState, $companyZip;
  $data = "<table style='background-color:$color;width:100%'><tr><td>";
  $data .= "<p style='text-align:center;font-size:14px'>";
  $data .= "$companyName<br>$companyAddress<br>$companyCity, $companyState $companyZip";
  $data .= "</p></td></tr></table>";
  return $data;
}

$companyName = "Brandon Chang Enterprises";
$companyAddress = "42 Galaxy Blvd";
$companyCity = "Miami";
$companyState = "FL";
$companyZip = "33101";

print getHeader935($companyName, "lightblue");
print "<br><br>";
print getFooter732("lightgray");


// --------------------------------------------------
// Lab 5
// --------------------------------------------------
print "<hr>";
print "<h2>Lab 5 Assignment</h2>";

function create_array_908() {
  $products = [
    ["Space Helmet", 89.99, 5],
    ["Rocket Fuel Pack", 129.50, 2],
    ["Lunar Gloves", 45.75, 7],
    ["Solar Panel Kit", 299.00, 3],
    ["Alien Detector", 15.25, 9]
  ];
  return $products;
}

function display_product_872($array) {
  print "<table border='1' style='width:60%;text-align:center;border-collapse:collapse'>";
  print "<tr><th>Product</th><th>Price</th><th>Quantity</th></tr>";

  foreach ($array as $item) {
    $product = $item[0];
    $price = number_format($item[1], 2);
    $qty = $item[2];
    print "<tr><td>$product</td><td>$$price</td><td>$qty</td></tr>";
  }

  print "</table>";
}

$myarray664 = create_array_908();
display_product_872($myarray664);


// --------------------------------------------------
// Lab 4
// --------------------------------------------------
print "<hr>";
print "<h2>Lab 4 Assignment</h2>";

function show_loop_321($num) {
  print "<ul>";
  for ($i = 1; $i <= $num; $i++) {
    print "<li>Number $i</li>";
  }
  print "</ul>";
}

show_loop_321(5);


// --------------------------------------------------
// Lab 3
// --------------------------------------------------
print "<hr>";
print "<h2>Lab 3 Assignment</h2>";

function calc_area_555($length, $width) {
  $area = $length * $width;
  print "<p>Length: $length, Width: $width, Area: $area</p>";
}

calc_area_555(5, 8);


// --------------------------------------------------
// Lab 2
// --------------------------------------------------
print "<hr>";
print "<h2>Lab 2 Assignment</h2>";

function display_course_789($course, $instructor) {
  print "<p>Course: $course<br>Instructor: $instructor</p>";
}

display_course_789("CS192", "Professor Ferguson");


// --------------------------------------------------
// Lab 1
// --------------------------------------------------
print "<hr>";
print "<h2>Lab 1 Assignment</h2>";

function display_name_123() {
  print "<h3 style='text-align:center'>Brandon Chang Enterprises</h3>";
}

function display_address_456() {
  print "<p style='text-align:center'>42 Galaxy Blvd<br>Miami, FL 33101</p>";
}

display_name_123();
display_address_456();

?>

</body>
</html>
