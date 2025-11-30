<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Hero Section</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7ff;
            color: #222;
        }

        /* HERO SECTION */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 50px;
            background: #f5f7ff;
            flex-wrap: wrap;
        }

        .hero-text {
            max-width: 500px;
        }

        .hero-text h1 {
            font-size: 42px;
            margin-bottom: 20px;
            color: #0066ff;
        }

        .hero-text p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #444;
        }

        .cta-btn {
            background: #0066ff;
            padding: 12px 24px;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            font-size: 18px;
            transition: 0.3s;
        }

        .cta-btn:hover {
            background: #0052cc;
        }

        .hero img {
            width: 420px;
            border-radius: 12px;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero img {
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-text">
            <h1>The Last POS System You’ll Ever Need</h1>
            <p>Manage sales, inventory, analytics and staff — all from one simple dashboard.</p>
            <a href="#signup" class="cta-btn">Get Started</a>
        </div>
        <img src="https://via.placeholder.com/420x300?text=POS+Mockup" alt="POS Software Mockup">
    </section>

</body>

</html>