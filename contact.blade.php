@extends('layouts.web')
@section('content')
<!-- Contact Section -->
    <section class="contact-page">
        <div class="contact-header">
            <h2>Contact Us</h2>
            <p>Let’s discuss how we can help your business grow with our digital marketing solutions. Reach out to us today!</p>
        </div>

        <div class="contact-content">
            <!-- Contact Form -->
            <form action="#" method="post" class="contact-form">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Your Name">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Your Email">

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required placeholder="Your Phone Number">

                <label for="message">Message:</label>
                <textarea id="message" name="message" required placeholder="Your Message"></textarea>

                <button type="submit">Send Message</button>
            </form>

            <!-- Contact Details and Social Media Links -->
            <div class="contact-details">
                <h3>Get in Touch</h3>
                <p><strong>Address:</strong> 123 Market Street, Suite 500, City, Country</p>
                <p><strong>Email:</strong> <a href="mailto:info@Marketmasters.com">info@Marketmasters.com</a></p>
                <p><strong>Phone:</strong> +123-456-7890</p>

                <h3>Connect with Us</h3>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </section>
    @endsection