<?php
function fetch_prices_from_hotelscombined($hotel_name) {
    $url = "https://api.hotelscombined.no/search?query=" . urlencode($hotel_name);
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return $data['price'] ?? 'N/A';
}

function fetch_prices_from_trivago($hotel_name) {
    $url = "https://api.trivago.com/search?query=" . urlencode($hotel_name);
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return $data['price'] ?? 'N/A';
}

function fetch_prices_from_kayak($hotel_name) {
    $url = "https://api.kayak.no/search?query=" . urlencode($hotel_name);
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return $data['price'] ?? 'N/A';
}

function fetch_prices($hotel_name) {
    return [
        "hotelscombined.no" => fetch_prices_from_hotelscombined($hotel_name),
        "trivago.com" => fetch_prices_from_trivago($hotel_name),
        "kayak.no" => fetch_prices_from_kayak($hotel_name)
    ];
}
?>
