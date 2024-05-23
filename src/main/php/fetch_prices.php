<?php
function fetch_prices($hotel_name) {
    // Mock data for price comparison
    $prices = [
        "hotelscombined.no" => rand(100, 200) . " USD/night",
        "trivago.com" => rand(150, 250) . " USD/night",
        "kayak.no" => rand(120, 220) . " USD/night"
    ];
    return $prices;
}
?>
