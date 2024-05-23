<?php
session_start();
?>
<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stayfinder.model.Hotel Room Page</title>
    <link rel="stylesheet" href="../css/productpage2.css">
</head>
<body>

<main>
    <section class="hotel-overview">
        <h2>Adante stayfinder.model.Hotel</h2>
        <div class="image-gallery">
            <img src="../resources/hotel1.jpg" alt="stayfinder.model.Hotel Image 3">
        </div>
        <p class="hotel-description">Situated in Valera de Abajo, 45 km from Cuenca Train Station and 46 km from Hanging Houses of Cuenca, Casa rural La Marquesa - Cuenca offers a garden and air conditioning.<br> This property offers access to darts. The tour desk is available to assist guests in planning their days out.<br>

            The spacious holiday home with a terrace and garden views has 3 bedrooms, 2 living rooms, a flat-screen TV, an equipped kitchen with a dishwasher and a microwave, and 2 bathrooms with a bidet.<br> Towels and bed linen are offered in the holiday home. For added privacy, the accommodation has a private entrance and is protected by full-day security.<br>

            For those times when you'd rather not dine out, you can choose to cook on the barbecue.

            For guests with children, the holiday home features an indoor play area.<br>

            Mangana Tower is 47 km from Casa rural La Marquesa - Cuenca, while Nuestra Señora de Gracia's Cathedral is 47 km from the property. The nearest airport is Albacete Airport, 154 km from the accommodation.</p>
    </section>
    <section class="room-types">
        <h2>Rooms</h2>
        <div class="room" id="room-template" >
            <img class="room-image" src="" alt="" >
            <div class="room-details">
                <h3 class="room-name"></h3>
                <p class="room-description"></p>
                <p class="room-price"></p>
                <button class="book-room">Book Now</button>
            </div>
        </div>
    </section>
    <section class="amenities">
        <h2>Amenities</h2>
        <ul>
            <li>Free WiFi</li>
            <li>Swimming Pool</li>
            <li>Spa and Wellness Center</li>
            <li>Restaurant</li>
            <li>Bar</li>
            <!-- Add more amenities as needed -->
        </ul>
    </section>
    <section class="reviews-section" style="background-color: #D9D9D9;">
        <h2>Recent reviews</h2>
        <div class="reviews-container">
            <!-- Review 1 -->
            <div class="review">
                <span class="stars">★★★★★</span>
                <h3>Barack Obama</h3>
                <p class="review-title">Seamless Booking Experience</p>
                <p class="review-text">"An exceptional stay! The booking process was seamless, and the accommodations were top-notch. A commendable effort in hospitality."
            </div>

            <!-- Review 2 -->
            <div class="review">
                <span class="stars">★★★★★</span>
                <h3>Donald Trump</h3>
                <p class="review-title">Great Prices, Easy Navigation</p>
                <p class="review-text">""Absolutely fantastic! The luxury rooms are the best. It's clear that they know good business and stayfinder.service. I'll be back!"
            </div>

            <!-- Review 3 -->
            <div class="review">
                <span class="stars">★★★★★</span>
                <h3>John F. Kennedy</h3>
                <p class="review-title">Perfect for Family Trips</p>
                <p class="review-text">""Ask not what your hotel can do for you—ask what you can do at your hotel. This place offers plenty to do. Simply inspiring."
            </div>

            <!-- Review 4 -->
            <div class="review">
                <span class="stars">★★★★★</span>
                <h3>Joe Biden</h3>
                <p class="review-title">Affordable Options Galore</p>
                <p class="review-text">"An exceptional stay! The booking process was seamless, and the accommodations were top-notch. A commendable effort in hospitality."                    </div>
        </div>
    </section>

</main>
<footer class="footer">
    <a id="footer-content">
        <h3>Contact</h3>
        <p>For inquiries, please contact us through the following channels:</p>
        <ul class="contact-info">
            <li>Phone: +123 456 7890</li>
            <li>Email: contact@example.com</li>
        </ul>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d243647.3160916204!2d-74.0059725!3d40.7127753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1590244516546!5m2!1sen!2sus" width="200" height="170" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-icons">
            <!-- Replace # with actual links or JavaScript functions -->
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
            <a href="#"><i class="fa fa-map-marker"></i></a>
        </div>
        <p>© 2024 Stay Finder | All rights reserved</p>
        <p>This website is a result of a university group project, performed in the course DAT12301 Web technologies, at NTNU. All the information provided here is a result of imagination. Any resemblance with real companies or products is a coincidence.</p>
    </a>
</footer>
<script src="../javascript/productpage2.js"></script>
</body>
</html>
