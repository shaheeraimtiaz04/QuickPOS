<!-- HEADER NAVIGATION -->
<nav>
    <!-- Logo -->
    <div class="logo">QuickPOS</div>

    <!-- Hamburger menu for mobile -->
    <div class="hamburger" onclick="toggleMenu()">☰</div>

    <!-- Navigation Links -->
    <ul id="nav-menu">
        <li><a href="#features">Features</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#signup" class="signup-btn">Sign Up</a></li>
    </ul>
</nav>

<script>
    // Toggle mobile menu
    function toggleMenu() {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('active');
    }
</script>