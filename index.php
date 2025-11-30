<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Flexbox Header</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* HEADER NAVIGATION */
        nav {
            display: flex;
            justify-content: space-between;
            /* space between logo and menu */
            align-items: center;
            /* vertically center */
            padding: 15px 30px;
            background: #fff;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
            color: #0066ff;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
            margin: 0;
            padding: 0;
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
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: bold;
            text-decoration: none;
        }

        /* Hamburger menu for mobile */
        .hamburger {
            display: none;
            font-size: 28px;
            cursor: pointer;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                display: none;
                width: 100%;
                text-align: center;
                position: absolute;
                top: 60px;
                left: 0;
                background: #fff;
                border-top: 1px solid #eee;
            }

            nav ul.active {
                display: flex;
            }

            .hamburger {
                display: block;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER NAVIGATION -->
    <nav>
        <div class="logo">QuickPOS</div>
        <div class="hamburger" onclick="toggleMenu()">☰</div>
        <ul id="nav-menu">
            <li><a href="#features">Features</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#signup" class="signup-btn">Sign Up</a></li>
        </ul>
    </nav>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('nav-menu');
            menu.classList.toggle('active');
        }
    </script>

</body>

</html>