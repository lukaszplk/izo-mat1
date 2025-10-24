<?php
$page_title = "Contact";
$page_description = "Contact IZO-MAT for thermal insulation services. Get a free quote, consultation, or ask questions about our products and services.";
include 'includes/header.php';

// Handle form submission
$message_sent = false;
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $service_type = htmlspecialchars(trim($_POST['service_type'] ?? ''));
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // In a real application, you would send an email here
        // For now, we'll just simulate success
        $message_sent = true;
        
        // You can add email sending functionality here:
        /*
        $to = 'info@izo-mat.pl';
        $email_subject = 'New Contact Form Submission: ' . $subject;
        $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nService Type: $service_type\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";
        
        if (mail($to, $email_subject, $email_body, $headers)) {
            $message_sent = true;
        } else {
            $error_message = 'Sorry, there was an error sending your message. Please try again.';
        }
        */
    }
}
?>

<div class="container">
    <main class="main-content">
        <section class="page-header">
            <h1>Contact Us</h1>
            <p>Get in touch for a free consultation and quote</p>
        </section>

        <?php if ($message_sent): ?>
        <div class="success-message">
            <i class="fas fa-check-circle"></i>
            <h3>Thank You!</h3>
            <p>Your message has been sent successfully. We'll get back to you within 24 hours.</p>
        </div>
        <?php endif; ?>

        <?php if ($error_message): ?>
        <div class="error-message">
            <i class="fas fa-exclamation-triangle"></i>
            <h3>Error</h3>
            <p><?php echo $error_message; ?></p>
        </div>
        <?php endif; ?>

        <div class="contact-content">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <p>Ready to improve your building's energy efficiency? Contact us today for a free consultation and detailed quote.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>+48 123 456 789</p>
                            <p>Mon-Fri: 8:00-18:00</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@izo-mat.pl</p>
                            <p>We respond within 24 hours</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Address</h3>
                            <p>ul. Przykładowa 123<br>00-001 Warsaw, Poland</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Business Hours</h3>
                            <p>Monday - Friday: 8:00 - 18:00</p>
                            <p>Saturday: 9:00 - 14:00</p>
                            <p>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-container">
                <form class="contact-form" method="POST" action="">
                    <h3>Send Us a Message</h3>
                    
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="service_type">Service Type</label>
                        <select id="service_type" name="service_type">
                            <option value="">Select a service</option>
                            <option value="residential" <?php echo ($_POST['service_type'] ?? '') == 'residential' ? 'selected' : ''; ?>>Residential Insulation</option>
                            <option value="commercial" <?php echo ($_POST['service_type'] ?? '') == 'commercial' ? 'selected' : ''; ?>>Commercial Projects</option>
                            <option value="renovation" <?php echo ($_POST['service_type'] ?? '') == 'renovation' ? 'selected' : ''; ?>>Renovation Services</option>
                            <option value="consultation" <?php echo ($_POST['service_type'] ?? '') == 'consultation' ? 'selected' : ''; ?>>Free Consultation</option>
                            <option value="other" <?php echo ($_POST['service_type'] ?? '') == 'other' ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Please describe your project or question..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-large">
                        <i class="fas fa-paper-plane"></i>
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <section class="faq-section">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Common questions about our services</p>
            </div>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>How long does an insulation project take?</h3>
                    <p>Project duration depends on size and complexity. Residential projects typically take 1-3 days, while commercial projects may take 1-2 weeks.</p>
                </div>
                <div class="faq-item">
                    <h3>Do you provide free quotes?</h3>
                    <p>Yes, we provide free, no-obligation quotes for all projects. Contact us to schedule a site visit and detailed estimate.</p>
                </div>
                <div class="faq-item">
                    <h3>What materials do you use?</h3>
                    <p>We use only certified, high-quality materials from trusted manufacturers. All materials meet European standards and carry necessary certifications.</p>
                </div>
                <div class="faq-item">
                    <h3>Are your installers certified?</h3>
                    <p>Yes, all our installers are certified professionals with extensive experience in thermal insulation projects.</p>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
