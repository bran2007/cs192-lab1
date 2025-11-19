<?php
/*
 * makefaq.php - Create FAQTable and insert FAQ data
 * Run this file ONCE to set up your FAQ database
 */

// Database connection settings
$hostname = "dpg-d4egbr7gi27c73cmaiig-a.oregon-postgres.render.com";
$username = "db1";
$password = "K2Pp1PY6IpNtYh04NY8QprVtXYvF7l2E";
$dbname   = "db1";

/* 
 * INSTRUCTIONS FOR PHPMYADMIN (Recommended):
 * 
 * 1. Create table: FAQTable
 * 2. Add these columns:
 *    - question (TEXT)
 *    - answer (TEXT)
 * 
 * 3. Insert at least 3 rows with YOUR OWN questions and answers about your business
 *    Example for vacation business:
 *    - Q: What is included in the vacation packages?
 *      A: All packages include hotel accommodations, airport transfers, and daily breakfast. Optional excursions available.
 *    
 *    - Q: What is your cancellation policy?
 *      A: Free cancellation up to 30 days before departure. 50% refund for 15-30 days, no refund within 15 days.
 *    
 *    - Q: Do you offer travel insurance?
 *      A: Yes, we partner with leading insurance providers. Travel insurance is highly recommended for all bookings.
 */

// Real MySQL code would look like this (if mysqli extension was available):
/*
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

// Create FAQTable
$sql = "CREATE TABLE IF NOT EXISTS FAQTable (
    question TEXT,
    answer TEXT
)";

if (mysqli_query($conn, $sql)) {
    echo "Table FAQTable created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Insert FAQs - CREATE YOUR OWN QUESTIONS/ANSWERS
$faqs = array(
    array(
        "What is included in the vacation packages?",
        "All packages include hotel accommodations, airport transfers, and daily breakfast. Optional excursions available."
    ),
    array(
        "What is your cancellation policy?",
        "Free cancellation up to 30 days before departure. 50% refund for 15-30 days, no refund within 15 days."
    ),
    array(
        "Do you offer travel insurance?",
        "Yes, we partner with leading insurance providers. Travel insurance is highly recommended for all bookings."
    )
);

foreach ($faqs as $faq) {
    $question = mysqli_real_escape_string($conn, $faq[0]);
    $answer = mysqli_real_escape_string($conn, $faq[1]);
    
    $sql = "INSERT INTO FAQTable (question, answer) VALUES ('$question', '$answer')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Inserted FAQ: " . substr($faq[0], 0, 50) . "...<br>";
    } else {
        echo "Error: " . mysqli_error($conn) . "<br>";
    }
}

mysqli_close($conn);
echo "<br>FAQTable setup complete!";
*/

echo "<h2>FAQTable Setup Instructions</h2>";
echo "<p>Use phpMyAdmin or your hosting control panel to:</p>";
echo "<ol>";
echo "<li>Create table: <strong>FAQTable</strong></li>";
echo "<li>Add columns: question (TEXT), answer (TEXT)</li>";
echo "<li>Insert at least 3 FAQ entries with YOUR OWN questions and answers related to your business</li>";
echo "</ol>";
echo "<p><strong>DO NOT</strong> copy the example FAQs from the lab instructions - create your own!</p>";
?>
