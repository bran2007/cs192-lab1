<!doctype html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
/*
 * Who: Brandon Chang
 * What: CMP SCI cs192 Lab Web Page Project
 * When: 10/20/25
 * What: Lab Web Page #1-#4
*/

/*************   global variables  ******************************/
$coname623 = "House_R_Us";
$coaddr812 = "123 Main St";
$co_city511 = "Miami FL 33101";
$debug251 = false; // initial debug state
/*************   end global variables  **************************/

// -------- DEBUG SETUP (Lab 3) ---------
if (!empty($_REQUEST['debug'])) {
    $debug251 = true;
    print "DEBUG turned ON<br>";
}

// ------------------   lab 4   --------------------
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

// Call the functions to display output
display_name_982($coname623);
display_address_334();

print "<hr>";

// ------------------   lab 3   --------------------
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

// ------------------   lab 2   --------------------
print "<h2>Lab 2 Assignment</h2>";
print "<h1>$coname623</h1>";
print "<p>$coaddr812</p>";
print "<b>$co_city511</b>";
print "<hr>";

// ------------------   lab 1   --------------------
print "<h2>Lab 1 Assignment</h2>";
print "<p>My name is Brandon Chang</p>";

?>
</body>
</html>
<!-- Brandon Chang, CMP SCI cs192 Lab Web Page Project, Labs 1-4 -->
