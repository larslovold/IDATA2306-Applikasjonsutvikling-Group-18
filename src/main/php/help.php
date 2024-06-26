<?php
session_start();
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Help & FAQ | Stay Finder</title>
    <link rel="stylesheet" href="../css/help.css"> <!-- Replace with your CSS file path -->
    <script src="https://kit.fontawesome.com/6ef9ef2ae0.js" crossorigin="anonymous"></script>
</head>
<body>

<main>
    <div class="faq-container">
        <h1>Help & Frequently Asked Questions</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        <div class="faq-section">
            <h2>General Help</h2>
            <div class="faq-item">
                <h3>How do I create an account?</h3>
                <p>To create an account, please visit our <a href="../php/createaccount.php">registration page</a> and fill out the required information.</p>
            </div>
            <div class="faq-item">
                <h3>How can I reset my password?</h3>
                <p>If you've forgotten your password, you can reset it by visiting the <a href="passwordreset.html">password reset page</a> and following the instructions.</p>
            </div>
        </div>
        <div class="faq-section">
            <h2>Booking Help</h2>
            <div class="faq-item">
                <h3>How do I book a stay?</h3>
                <p>To book a stay, log in to your account and search for available accommodations. Once you've found the one you like, follow the prompts to complete your booking.</p>
            </div>
            <div class="faq-item">
                <h3>Can I cancel my booking?</h3>
                <p>Yes, you can cancel your booking, but please be aware that cancellation policies vary depending on the property. Visit the <a href="cancellationpolicy.html">cancellation policy page</a> for more information.</p>
            </div>
        </div>
    </div>
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