<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - QuantumTech</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .contact-info i {
            font-size: 1.5rem;
            margin-right: 10px;
            color: whitesmoke;
        }
        .social-icons a {
            font-size: 1.5rem;
            margin-right: 15px;
            color: whitesmoke;
        }
        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

<!-- Contact Section -->
<section class="container py-5">
    <h2 class="text-center mb-4"><!--<i class="fas fa-phone-alt">--></i> Contact Us – QuantumTechnologies</h2>
    <p class="text-center mb-5">We're here to assist you with all your technology needs. Get in touch with us today!</p>
    
    <div class="row">
        <!-- Contact Information -->
        <div class="col-md-6">
            <h4><i class="fas fa-info-circle"></i> Contact Information</h4>
            <ul class="list-unstyled contact-info">
            <li><i class="fas fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mkupasiaugustine@gmail.com">mkupasiaugustine@gmail.com</a></li>
            <li><i class="fas fa-phone"></i> <strong>Phone:</strong> +255-753-973-687</li>
            <li><i class="fab fa-whatsapp"></i> <strong>WhatsApp:</strong> <a href="https://wa.me/255764705279">+255-764-705-279</a></li>
            </ul>
            <h5 class="mt-4"><i class="fas fa-clock"></i> Business Hours</h5>
            <p><strong>Monday – Friday:</strong> 9:00 AM – 6:00 PM</p>
            <p><strong>Saturday:</strong> 10:00 AM – 4:00 PM</p>
            <p><strong>Sunday:</strong> Closed</p>
        </div>

        <!-- Contact Form -->
        <div class="col-md-6">
            <h4><i class="fas fa-envelope"></i> Send Us a Message</h4>
            <form action="contacts_process.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" formaction="contacts_processing.php">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- Social Media Links -->
<section class="container text-center py-4">
    <h4><!-- <i class="fas fa-globe"></i>--> Follow Us on Social Media</h4>
    <div class="social-icons mt-3">
        <a href="https://www.instagram.com/flavythug10" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/flavyaugustine" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.tiktok.com/@BlackSavage" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://wa.me/255764705279" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'footer.php'; ?>

</html>
