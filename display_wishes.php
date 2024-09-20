<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding_ridhwan_angel";

// $servername = "sql302.infinityfree.com";
// $username = "if0_36796556";
// $password = "Pcod9ZI9Rk";
// $dbname = "if0_36796556_wedding_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Nama, Pesan, Date FROM wedding_wishes ORDER BY Date DESC";
$result = $conn->query($sql);

function formatDate($date) {
    $today = new DateTime();
    $postedDate = new DateTime($date);
    $today->setTime(0, 0, 0);
    $postedDate->setTime(0, 0, 0);
    $interval = $today->diff($postedDate);

    if ($interval->days == 0) {
        return "today";
    } elseif ($interval->days == 1 && $interval->invert == 1) {
        return "yesterday";
    } else {
        return $interval->days . " day" . ($interval->days > 1 ? "s" : "") . " ago";
    }
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='wish'>";
        echo "<div class='sender-wish'>";
        echo "<p>" . ($row['Nama']) . "</p>";
        // echo "<p> | </p>";
        echo "<p class='date'>" . formatDate($row['Date']) . "</p>";
        echo "</div>";
        echo "<p class='pesan'>" . htmlspecialchars($row['Pesan']) . "</p>";
        echo "</div>";
    }
} else {
    echo "No wishes yet.";
}

$conn->close();

?>
