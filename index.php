<!doctype html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
/*
 * Who: Brandon Chang
 * What: CMP SCI cs192 Lab Web Page Project
 * When: 10/20/25
 * What: Lab Web Page #1, #2, and #3
*/

// -------- GLOBAL VARIABLES ---------
$coname623 = "House_R_Us";
$coaddr812 = "123 Main St";
$co_city511 = "Miami FL 33101";

// -------- DEBUG SETUP ---------
if (!empty($_REQUEST['debug'])) {
    $debug251 = true;
    print "DEBUG turned ON<br>";
} else {
    $debug251 = false;
}

// -------- LAB 3 ---------
print "<h2>Lab 3 Assignment</h2>";

// Add debugging print statements for each previous lab
if ($debug251) {
    print "Now executing Lab 3<br>";
    print "Lab 2, \$coname623 contains $coname623<br>";
    print "Lab 2, \$coaddr812 contains $coaddr812<br>";
    print "Lab 2, \$co_city511 contains $co_city511<br>";
    print "Lab 1: My name is Brandon Chang<br>";
}

// Links to toggle debug on/off
$yourURL = "http://your.webpage.com/index.php"; // replace with your own URL
print "<a href='$yourURL'>Debug OFF</a> | <a href='$yourURL?debug=true'>Debug ON</a>";

print "<hr>";

// -------- LAB 2 ---------
print "<h2>Lab 2 Assignment</h2>";
print "<h1>$coname623</h1>";
print "<p>$coaddr812</p>";
print "<b>$co_city511</b>";
print "<hr>";

// -------- LAB 1 ---------
print "<h2>Lab 1 Assignment</h2>";
print "<p>My name is Brandon Chang</p>";

?>
</body>
</html>
<!-- Brandon Chang, CMP SCI cs192 Lab Web Page Project, Labs 1-3 -->
