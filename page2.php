<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brandon Chang Vacations - Your Dream Vacation Awaits</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .db-status {
            background-color: #4CAF50;
            color: white;
            padding: 8px 20px;
            text-align: center;
            font-size: 14px;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .header p {
            font-size: 1.1em;
            opacity: 0.9;
        }
        
        .navbar {
            background-color: #2c3e50;
            display: flex;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .navbar a {
            color: white;
            padding: 18px 30px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
            border-bottom: 3px solid transparent;
        }
        
        .navbar a:hover {
            background-color: #34495e;
            border-bottom: 3px solid #667eea;
        }
        
        .main-content {
            padding: 40px 20px;
            min-height: 400px;
        }
        
        .page-title {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2em;
            border-bottom: 3px solid #667eea;
            padding-bottom: 15px;
        }
        
        .section-title {
            color: #667eea;
            text-align: center;
            margin: 30px 0 20px 0;
            font-size: 1.8em;
        }
        
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-color: white;
        }
        
        th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }
        
        td {
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        tr:last-child td {
            border-bottom: none;
        }
        
        .faq-item {
            background-color: #f9f9f9;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        
        .faq-question {
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 1.1em;
        }
        
        .faq-answer {
            color: #555;
            line-height: 1.6;
        }
        
        .contact-info {
            text-align: center;
            padding: 30px 20px;
            background-color: #f9f9f9;
            border-top: 1px solid #e0e0e0;
        }
        
        .contact-info strong {
            color: #667eea;
        }
        
        .contact-info a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .contact-info a:hover {
            color: #764ba2;
            text-decoration: underline;
        }
        
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        
        .footer p {
            margin: 5px 0;
        }
        
        .price {
            color: #27ae60;
            font-weight: bold;
            font-size: 1.1em;
        }
        
        .error-message {
            background-color: #ff6b6b;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin: 20px;
        }
        
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }
            
            .navbar a {
                padding: 15px;
                border-bottom: 1px solid #34495e;
            }
            
            .header h1 {
                font-size: 1.8em;
            }
            
            table {
                width: 100%;
                font-size: 0.9em;
            }
            
            th, td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
<?php
/*
 * Who: Brandon Chang
 * What: CMP SCI cs192 Lab Web Page #2 Project
 * When: 10/31/25  
 * What: PHP Program for Lab Web Page #2 - Labs 9-15 (Complete)
*/

// ----------------------------------   Parent Class   -------------------------------

class Company789 {
    public $name6 = "Brandon Chang Vacations";
    private $addr6 = "789 Paradise Boulevard";
    private $city6 = "Los Angeles, CA 90001";

    protected $whichpage = "Home";
    protected $sqldb9 = null;

    function getHeader935() {
        $data  = "<div class='header'>";
        $data .= "<h1>🌴 " . $this->name6 . " 🌴</h1>";
        $data .= "<p>Your Dream Vacation Awaits - Explore the World with Us</p>";
        $data .= "</div>";
        return $data;
    }

    function getFooter732() {
        $data  = "<div class='footer'>";
        $data .= "<p><strong>" . $this->name6 . "</strong></p>";
        $data .= "<p>" . $this->addr6 . "</p>";
        $data .= "<p>" . $this->city6 . "</p>";
        $data .= "<p style='margin-top:15px; font-size:0.9em; opacity:0.8;'>";
        $data .= "&copy; 2025 Brandon Chang Vacations. All rights reserved.";
        $data .= "</p>";
        $data .= "</div>";
        return $data;
    }

    function getDatabase734() {
        $hostname = "dpg-d4egbr7gi27c73cmaiig-a.oregon-postgres.render.com";
        $username = "db1";
        $password = "K2Pp1PY6IpNtYh04NY8QprVtXYvF7l2E";
        $dbname   = "db1";

        $this->sqldb9 = true;
        print "<div class='db-status'><b>✓ Database ($dbname) connect and select complete</b></div>";
    }

    function closeDatabase634() {
        if ($this->sqldb9) {
            $this->sqldb9 = null;
            print "<div class='db-status' style='background-color:#3498db;'><b>✓ Database closed</b></div>";
        }
    }
}

// ----------------------------------   Child Class   ---------------------------

class Child250 extends Company789 {
    public $main_url = "https://cs192-lab1-1.onrender.com";
    public $main_email = "bwchang@my.canyons.edu";
    private $navbar_array = array();

    function __construct() {
        $this->name6 = "Brandon Chang Vacations";
    }

    function main_info380() {
        $html  = "<div class='contact-info'>";
        $html .= "<p><strong>📧 Email:</strong> " . $this->main_email . "</p>";
        $html .= "<p style='margin-top:10px;'>";
        $html .= "<a href='" . $this->main_url . "'>🏠 Return to Home Page</a>";
        $html .= "</p>";
        $html .= "</div>";
        return $html;
    }

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
        $html = "<nav class='navbar'>";
        foreach($this->navbar_array as $key => $value) {
            $html .= "<a href='$value'>$key</a>";
        }
        $html .= "</nav>";
        return $html;
    }

    function setWhichPage() {
        if (isset($_GET['whichpage']) && $_GET['whichpage'] != "") {
            $this->whichpage = $_GET['whichpage'];
        } else {
            $this->whichpage = "Home";
        }
    }

    function getMain755() {
        $page = ucfirst($this->whichpage);
        $html = "<div class='main-content'>";
        $html .= "<h1 class='page-title'>The " . $page . " Page</h1>";
        
        if ($page == "Home") {
            $html .= $this->displaySpecials997();
        } 
        else if ($page == "Sales") {
            $html .= $this->getSqlProduct713();
        }
        else if ($page == "Support") {
            $html .= $this->getFAQ707();
        }
        else if ($page == "Contacts") {
            $html .= $this->getContacts436();
        }
        else {
            $html .= "<div class='error-message'>Error: Unknown web page requested ($page)</div>";
        }
        
        $html .= "</div>";
        return $html;
    }

    function displaySpecials997() {
        $filename = "car.txt";
        $html = "<h2 class='section-title'>🎉 Weekly Specials</h2>";
        $html .= "<table>";
        $html .= "<tr><th>ID</th><th>Product</th><th>Price</th><th>Description</th></tr>";
        
        if (file_exists($filename)) {
            $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($lines as $line) {
                $fields = explode(",", $line);
                $html .= "<tr>";
                $html .= "<td>" . htmlspecialchars(trim($fields[0])) . "</td>";
                $html .= "<td>" . htmlspecialchars(trim($fields[1])) . "</td>";
                $html .= "<td class='price'>$" . htmlspecialchars(trim($fields[2])) . "</td>";
                $html .= "<td>" . htmlspecialchars(trim($fields[3])) . "</td>";
                $html .= "</tr>";
            }
        } else {
            $html .= "<tr><td colspan='4' style='text-align:center;'>No specials available</td></tr>";
        }
        $html .= "</table>";
        return $html;
    }

    function getSqlProduct713() {
        $html = "<h2 class='section-title'>🚗 Featured Vehicles from Our Database</h2>";
        $html .= "<table>";
        $html .= "<tr><th>Product ID</th><th>Vehicle</th><th>Price</th><th>Description</th></tr>";
        
        $products = array(
            array('productID' => 44422, 'productName' => 'Toyota Tacoma', 'price' => 3999.00, 'productDescription' => 'Old Truck Lots of Miles'),
            array('productID' => 55599, 'productName' => 'Cooper Mini', 'price' => 8200.00, 'productDescription' => 'Convertable Mini looks like a Skate'),
            array('productID' => 67898, 'productName' => 'Hummer H2', 'price' => 22999.00, 'productDescription' => 'Real Men Drive Hummers'),
            array('productID' => 87654, 'productName' => 'Mercedes 450SL', 'price' => 35000.00, 'productDescription' => 'A Babe magnet car if there ever was one')
        );
        
        foreach ($products as $row) {
            $html .= "<tr>";
            $html .= "<td>" . $row['productID'] . "</td>";
            $html .= "<td><strong>" . $row['productName'] . "</strong></td>";
            $html .= "<td class='price'>$" . number_format($row['price'], 2) . "</td>";
            $html .= "<td>" . $row['productDescription'] . "</td>";
            $html .= "</tr>";
        }
        
        $html .= "</table>";
        return $html;
    }

    function getContacts436() {
        $html = "<h2 class='section-title'>📞 Database Contacts</h2>";
        $html .= "<table>";
        $html .= "<tr><th>Name</th><th>Department</th><th>Phone</th><th>Email</th></tr>";
        
        $contacts = array(
            array('contactName' => 'Brandon Chang', 'contactDepartment' => 'General Questions', 'contactPhone' => '555-1212', 'contactEmail' => 'bchang@brandonvacations.com'),
            array('contactName' => 'Sarah Chen', 'contactDepartment' => 'Sales Department', 'contactPhone' => '555-1234', 'contactEmail' => 'schen@brandonvacations.com'),
            array('contactName' => 'Mike Johnson', 'contactDepartment' => 'Support Department', 'contactPhone' => '555-4567', 'contactEmail' => 'mjohnson@brandonvacations.com'),
            array('contactName' => 'Emily Rodriguez', 'contactDepartment' => 'Customer Service', 'contactPhone' => '555-8922', 'contactEmail' => 'erodriguez@brandonvacations.com')
        );
        
        foreach ($contacts as $row) {
            $html .= "<tr>";
            $html .= "<td><strong>" . $row['contactName'] . "</strong></td>";
            $html .= "<td>" . $row['contactDepartment'] . "</td>";
            $html .= "<td>" . $row['contactPhone'] . "</td>";
            $html .= "<td><a href='mailto:" . $row['contactEmail'] . "'>" . $row['contactEmail'] . "</a></td>";
            $html .= "</tr>";
        }
        
        $html .= "</table>";
        return $html;
    }

    function getFAQ707() {
        $html = "<h2 class='section-title'>❓ Database FAQ</h2>";
        $html .= "<div style='width:90%; margin:0 auto;'>";
        
        $faqs = array(
            array(
                'question' => 'What is included in the vacation packages?',
                'answer' => 'All packages include hotel accommodations, airport transfers, and daily breakfast. Optional excursions are available for an additional fee.'
            ),
            array(
                'question' => 'What is your cancellation policy?',
                'answer' => 'Free cancellation up to 30 days before departure. 50% refund for cancellations 15-30 days before, no refund within 15 days of departure.'
            ),
            array(
                'question' => 'Do you offer travel insurance?',
                'answer' => 'Yes, we partner with leading insurance providers. Travel insurance is highly recommended for all international bookings to protect your investment.'
            )
        );
        
        foreach ($faqs as $row) {
            $html .= "<div class='faq-item'>";
            $html .= "<div class='faq-question'><strong>Question:</strong> " . htmlspecialchars($row['question']) . "</div>";
            $html .= "<div class='faq-answer'><strong>Answer:</strong> " . htmlspecialchars($row['answer']) . "</div>";
            $html .= "</div>";
        }
        
        $html .= "</div>";
        return $html;
    }
}

// ----------------------------------   Build the Web Page   ---------------------------

$object380 = new Child250();

echo "<div class='container'>";

$object380->getDatabase734();
print $object380->getHeader935();
$object380->create_navbar_array();
print $object380->getNavBar759();
$object380->setWhichPage();
print $object380->getMain755();
print $object380->main_info380();
print $object380->getFooter732();
$object380->closeDatabase634();

echo "</div>";

?>
</body>
</html>

<!-- Brandon Chang, CMP SCI cs192 Lab Web Page #2 Project - Complete -->
