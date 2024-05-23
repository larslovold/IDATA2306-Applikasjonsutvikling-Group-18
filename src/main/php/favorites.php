<?php
session_start();
?>
<?php
include 'header.php';
require_once 'config.php';

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$user_id = $_SESSION['id'];
$sql = "SELECT hotels.id, hotels.name, hotels.location, hotels.price FROM favorites
        JOIN hotels ON favorites.hotel_id = hotels.id WHERE favorites.user_id = ?";

if($stmt = $mysqli->prepare($sql)){
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hotel_id, $hotel_name, $hotel_location, $hotel_price);

    echo "<h2>Your Favorites</h2>";
    if($stmt->num_rows > 0){
        echo "<ul>";
        while($stmt->fetch()){
            echo "<li>{$hotel_name} - {$hotel_location} - {$hotel_price}</li>";
        }
        echo "</ul>";
    } else {
        echo "You have no favorite hotels.";
    }
    $stmt->close();
}
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorites | Stay Finder</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <div class="favorites-container">
            <!-- Favorite hotels will be displayed here -->
        </div>
    </main>
</body>
</html>
