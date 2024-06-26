<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay Finder</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/6ef9ef2ae0.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="headline">
            <h1>DISCOVER YOUR DREAM STAY WITH STAY FINDER TODAY!</h1>
        </div>
        <div class="search-area">
            <input type="text" id="destination" placeholder="Destination">
            <input placeholder="Check In" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="checkin" />
            <input placeholder="Check Out" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="checkout" />
            <a href="productpage.html" class="find-button">
                <button id="find-button">Find</button>
            </a>
        </div>   
        
        <section class="explore-section">
            <h2>Explore the World</h2>
            <h3>These are our most popular destinations</h3>
            <div class="destinations-container">
                <a href="productpage2.php" class="destination">
                    <img src="../resources/aalesund.jpg" alt="Ålesund">
                    <p>Ålesund</p>
                </a>
                <a href="bergen.html" class="destination">
                    <img src="../resources/oslo.jpeg" alt="Oslo">
                    <p>Oslo</p>
                </a>
                <a href="madrid.html" class="destination">
                    <img src="../resources/bergen.jpg" alt="Bergen">
                    <p>Bergen</p>
                </a>
                <a href="madrid.html" class="destination">
                    <img src="../resources/madrid.jpg" alt="Madrid">
                    <p>Madrid</p>
                </a>
                <a href="madrid.html" class="destination">
                    <img src="../resources/paris.jpg" alt="Paris">
                    <p>Paris</p>
                </a>
                <a href="madrid.html" class="destination">
                    <img src="../resources/shanghai.jpg" alt="Shanghai">
                    <p>Shanghai</p>
                </a>
                <a href="madrid.html" class="destination">
                    <img src="../resources/egypt.jpg" alt="Egypt">
                    <p>Egypt</p>
                </a>

            </div>
        </section>

        <div class="image-text-container left" style="background-color: #F4F1DE;"> <!-- Terra Cotta -->
            <img src="../resources/hotel1.jpg" alt="Room">
            <div class="text-content left">
                <h2>OUR SERVICES</h2>
                <p> Welcome to Stay Finder, where we strive to make your travel planning easier and more affordable. Our
                    mission is to provide you with the best hotel deals by comparing prices from various reputable hotel
                    booking sites. With our user-friendly platform, you can effortlessly find the perfect accommodation
                    that fits your budget and preferences. Our team is passionate about travel and technology, combining our expertise to offer a stayfinder.service that
                    saves you time and money. We believe that everyone deserves a great travel experience without the stress
                    of overpaying for accommodations.</p>

                    <p>Experience unparalleled comfort and convenience at our hotels, where every guest is treated
                    to a suite of premium amenities. From our state-of-the-art fitness center and serene spa services
                    to our fine dining options and high-speed Wi-Fi connectivity, we ensure a seamless stay whether
                    you're here for business or leisure. Our dedicated concierge stayfinder.service is on hand to tailor your experience
                    to your needs, making every moment of your stay exceptional. Thank you for choosing us as your travel partner.
                        We look forward to helping you make your next trip unforgettable.</p>
            </div>

        </div>

        <div class="image-text-container right" style="background-color: #81b29a;"> <!-- Antique White -->
            <img src="../resources/hotel2.jpg" alt="Room">
            <div class="text-content right">
            <h2>ABOUT US</h2><p>Nestled in the heart of the city, our hotels embodies a haven of sophistication with a touch
            of timeless charm. Each of our rooms is designed with a blend of classic elegance and modern
            luxury, ensuring a restful night's sleep. Our commitment to excellence is echoed through our attentive
            staff, who strive to create a memorable experience for each guest. Celebrating a rich heritage
            of hospitality, we welcome you to discover a stay that feels like home, yet is infused with the excitement
            of travel.
            </p>
            </div>
        </div>

        <div class="image-text-container left" style="background-color: #F4F1DE;"> <!-- Terra Cotta -->
            <img src="../resources/hotel3.jpg" alt="hotel">
            <div class="text-content left">
            <h2>START NOW!</h2><p>
            Step outside the doors of our hotel and immerse yourself in the vibrant culture
            that surrounds us. Our prime location offers easy access to the city's most renowned
            attractions, from bustling marketplaces and historic landmarks to scenic parks and lively
            entertainment districts. Whether you're looking to explore the local cuisine, indulge in retail therapy
            or discover the arts, our hotel serves as the perfect starting point for all your urban adventures.
            </p>
            </div>
        </div>

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

        <section class="newsletter-signup">
            <h2>Sign up if you want to receive great offers!</h2>
            <form class="signup-form">
                <input type="email" placeholder="Type your e-mail here..." required>
                <button type="submit">Sign up</button>
            </form>
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

</body>
</html>
