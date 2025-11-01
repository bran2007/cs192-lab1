<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>College1.com - CS192 Labs 1–6</title>
</head>
<body>

<?php
// --------------------------------------------------
// Lab 1
// --------------------------------------------------
print "<h2>Lab 1 Assignment</h2>";

function display_name_123() {
  print "<h3 style='text-align:center'>College1.com</h3>";
}

function display_address_456() {
  print "<p style='text-align:center'>123 Learning Way<br>Valencia, CA 91355</p>";
}

display_name_123();
display_address_456();


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
// Lab 6
// --------------------------------------------------
print "<hr>";
print "<h2>Lab 6 Assignment</h2>";

// old functions must stay for grading
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

$companyName = "College1.com";
$companyAddress = "123 Learning Way";
$companyCity = "Valencia";
$companyState = "CA";
$companyZip = "91355";

print getHeader935($companyName, "lightblue");
print "<br><br>";
print getFooter732("lightgray");
?>

</body>
</html>
