<?php
// Include header
include 'header.php';

// Fetch hotel ID from URL
$hotel_id = $_GET['id'];

// Dummy data for hotels
$hotels = [
    1 => ["name" => "Andante Hotel", "location" => "City Center", "features" => "Complimentary Wi-Fi, Rooftop Pool, 24-hour Gym Access", "images" => "andante.jpg"],
    2 => ["name" => "Thon Hotel Ålesund", "location" => "Coastal/Fjord View", "features" => "Free Breakfast, Fjord View Rooms, Conference Facilities", "images" => "thon.jpg"],
    // Add more hotels as needed
];

// Fetch hotel data based on ID
$hotel = $hotels[$hotel_id];

// Fetch price comparison data (mock data for now)
$price_data = [
    ["source" => "hotelscombined.no", "price" => "150 USD/night"],
    ["source" => "trivago.com", "price" => "200 USD/night"],
    ["source" => "kayak.no", "price" => "180 USD/night"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $hotel['name']; ?> | Stay Finder</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <div class="hotel-container">
            <h1><?php echo $hotel['name']; ?></h1>
            <p>Location: <?php echo $hotel['location']; ?></p>
            <p>Features: <?php echo $hotel['features']; ?></p>
            <img src="../images/<?php echo $hotel['images']; ?>" alt="<?php echo $hotel['name']; ?>">
            <h2>Price Comparison</h2>
            <table>
                <tr>
                    <th>Source</th>
                    <th>Price</th>
                </tr>
                <?php foreach ($price_data as $price): ?>
                <tr>
                    <td><?php echo $price['source']; ?></td>
                    <td><?php echo $price['price']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
</body>
</html>
