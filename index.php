<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - The Last POS System You’ll Ever Need</title>

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #ffffff;
            color: #222;
        }

        /* NAVIGATION */
        nav {
            display: flex;
            justify-content: space-between;
            padding: 20px 50px;
            align-items: center;
            background: #fff;
            position: sticky;
            top: 0;
            border-bottom: 1px solid #eee;
            z-index: 100;
        }

        nav .logo {
            font-size: 22px;
            font-weight: bold;
            color: #0066ff;
        }

        nav ul {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #0066ff;
        }

        .signup-btn {
            background: #0066ff;
            color: #fff;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        /* HERO */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 50px;
            background: #f5f7ff;
            flex-wrap: wrap;
        }

        .hero-text {
            max-width: 500px;
        }

        .hero-text h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .hero-text p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #444;
        }

        .cta-btn {
            background: #0066ff;
            padding: 12px 22px;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .hero img {
            width: 420px;
            border-radius: 12px;
        }

        /* FEATURES */
        .features {
            padding: 60px 50px;
            text-align: center;
        }

        .features h2 {
            margin-bottom: 40px;
            font-size: 32px;
        }

        .feature-grid {
            display: flex;
            gap: 25px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .feature {
            width: 260px;
            padding: 25px;
            border-radius: 10px;
            background: #f8f9ff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            text-align: center;
        }

        .material-icons {
            font-size: 40px;
            color: #0066ff;
            margin-bottom: 10px;
        }

        /* SCRUM-34 ADDED STYLES */
        .feature h3 {
            margin-bottom: 10px;
        }

        .feature p {
            color: #555;
        }

        /* PRICING */
        .pricing {
            padding: 70px 50px;
            background: #eef2ff;
            text-align: center;
        }

        .pricing h2 {
            margin-bottom: 40px;
            font-size: 32px;
        }

        .price-grid {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .price-card {
            width: 260px;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }

        .price-card p {
            font-size: 26px;
            font-weight: bold;
            color: #0066ff;
        }

        .price-card a {
            display: block;
            margin-top: 15px;
            background: #0066ff;
            color: #fff;
            padding: 10px;
            border-radius: 6px;
            text-decoration: none;
        }

        /* CONTACT */
        .contact {
            padding: 70px 50px;
            text-align: center;
        }

        .contact-form {
            max-width: 450px;
            margin: auto;
            text-align: left;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .contact-form button {
            background: #0066ff;
            padding: 12px;
            color: #fff;
            width: 100%;
            border-radius: 6px;
            font-size: 18px;
            border: none;
        }

        /* FOOTER */
        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 25px 0;
            margin-top: 50px;
        }

        footer a {
            color: #4da3ff;
            margin: 0 10px;
            text-decoration: none;
        }

        footer a:hover {
            color: #76b8ff;
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <nav>
        <div class="logo">QuickPOS</div>
        <ul>
            <li><a href="#features">Features</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#signup" class="signup-btn">Sign Up</a>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <h1>The Last POS System You’ll Ever Need</h1>
            <p>Manage sales, inventory, analytics and staff — all from one simple dashboard.</p>
            <a href="#signup" class="cta-btn">Get Started for Free</a>
        </div>
        <img src="assets/img/mockup.png" alt="POS Software Mockup">
    </section>

    <!-- FEATURES -->
    <section class="features" id="features">
        <h2>Powerful Features</h2>
        <div class="feature-grid">
            <div class="feature">
                <span class="material-icons">inventory_2</span>
                <h3>Inventory Management</h3>
                <p>Track stock levels and receive instant low-stock alerts.</p>
            </div>

            <div class="feature">
                <span class="material-icons">leaderboard</span>
                <h3>Sales Analytics</h3>
                <p>Understand your business with meaningful data insights.</p>
            </div>

            <div class="feature">
                <span class="material-icons">settings</span>
                <h3>Easy Integration</h3>
                <p>Connect with tools and hardware you already use.</p>
            </div>

            <div class="feature">
                <span class="material-icons">payments</span>
                <h3>Fast Billing</h3>
                <p>Process transactions quickly with a smooth POS interface.</p>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="pricing" id="pricing">
        <h2>Simple, Transparent Pricing</h2>
        <div class="price-grid">
            <div class="price-card">
                <h3>Basic</h3>
                <p>$9/mo</p>
                <ul>
                    <li>1 User</li>
                    <li>Basic Reports</li>
                    <li>Email Support</li>
                </ul>
                <a href="#">Choose Plan</a>
            </div>

            <div class="price-card">
                <h3>Pro</h3>
                <p>$29/mo</p>
                <ul>
                    <li>3 Users</li>
                    <li>Advanced Analytics</li>
                    <li>Priority Support</li>
                </ul>
                <a href="#">Choose Plan</a>
            </div>

            <div class="price-card">
                <h3>Enterprise</h3>
                <p>$99/mo</p>
                <ul>
                    <li>Unlimited Users</li>
                    <li>Custom Integrations</li>
                    <li>Dedicated Support</li>
                </ul>
                <a href="#">Choose Plan</a>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <p>Have questions? We're here to help.</p>

        <form action="src/contact.php" method="POST" class="contact-form">
            <input type="text" name="name" placeholder="Your Name">
            <input type="email" name="email" placeholder="Your Email">
            <textarea name="message" rows="5" placeholder="Your Message"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2025 QuickPOS — All Rights Reserved</p>
        <p>
            <a href="https://facebook.com" target="_blank">Facebook</a> |
            <a href="https://instagram.com" target="_blank">Instagram</a> |
            <a href="https://twitter.com" target="_blank">Twitter</a>
        </p>
    </footer>

</body>

</html>
