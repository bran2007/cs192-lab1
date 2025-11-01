<?php
header("Content-type: text/html; charset=utf-8");

/************* Global Variables ******************************/
$coname623 = "House_R_Us";
$coaddr812 = "123 Main St";
$co_city511 = "Miami FL 33101";
$debug251 = false; // initial debug state
$myarray664 = null; // Lab 5 array
/************* End Global Variables **************************/

// -------- DEBUG SETUP (Lab 3) ---------
if (!empty($_REQUEST['debug'])) {
    $debug251 = true;
    print "DEBUG turned ON<br>";
}

// ------------------ Lab 4 --------------------
print "<h2>Lab 4 Assignment</h2>";

// Function using a parameter
function display_name_982($parm) {
    print "<h1>Name: $parm</h1>";
}

// Function using global variables
function display_address_334() {
    global $coaddr812, $co_city511;
    print "<b><u>Address: $coaddr812, $co_city511</u></b>";
}

// Call the functions
display_name_982($coname623);
display_address_334();
print "<hr>";

// ------------------ Lab 3 --------------------
print "<h2>Lab 3 Assignment</h2>";
if ($debug251) {
    print "Now executing Lab 3<br>";
    print "Lab 2, \$coname623 contains $coname623<br>";
    print "Lab 2, \$coaddr812 contains $coaddr812<br>";
    print "Lab 2, \$co_city511 contains $co_city511<br>";
    print "Lab 1: My name is Brandon Chang<br>";
}
$yourURL = "http://your.webpage.com/index.php"; // replace with your URL
print "<a href='$yourURL'>Debug OFF</a> | <a href='$yourURL?debug=true'>Debug ON</a>";
print "<hr>";

// ------------------ Lab 2 --------------------
print "<h2>Lab 2 Assignment</h2>";
print "<h1>$coname623</h1>";
print "<p>$coaddr812</p>";
print "<b>$co_city511</b>";
print "<hr>";

// ------------------ Lab 1 --------------------
print "<h2>Lab 1 Assignment</h2>";
print "<p>My name is Brandon Chang</p>";
print "<hr>";

// ------------------ Lab 5 --------------------
print "<h2>Lab 5 Assignment</h2>";

// Function to create array for Real Estate
function create_array_908() {
    $house_array = array();
    $house_array[] = "ID: MLS123, Address: 123 Main St. Santa Clarita, $650000.00, 3+2 in the heart of town near mall";
    $house_array[] = "ID: MLS456, Address: 456 Palmdale Blvd, Palmdale, $199950.00, 4+1.75 in Pretty Palmdale";
    $house_array[] = "ID: MLS789, Address: 789 Snob Hill, Valencia, $799950.00, 4+3 View Home, live above the rest";
    $house_array[] = "ID: MLS654, Address: 654 Horse Feathers, Newhall, $599900.00, 2+1 on a huge horse zoned lot";
    return $house_array;
}

// Assign array to global variable
$myarray664 = create_array_908();

// Function to display products in a table
function display_product_872($array) {
    print "<h3>Today's Specials</h3>";
    print "<table border='1' cellpadding='5' cellspacing='0'>";
    print "<tr><th>ID</th><th>Address</th><th>Price</th><th>Details</th></tr>";
    foreach ($array as $item) {
        // Split string into parts by comma
        $parts = explode(",", $item, 4); // split into 4 parts max
        print "<tr>";
        foreach ($parts as $part) {
            print "<td>" . trim($part) . "</td>";
        }
        print "</tr>";
    }
    print "</table>";
}

// Call the display function
display_product_872($myarray664);
print "<hr>";
?>
