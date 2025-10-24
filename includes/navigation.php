<header class="header">
    <div class="header-content">
        <div class="logo-section">
            <a href="index.php" class="logo">
                <i class="fas fa-home"></i>
                <span>IZO-MAT</span>
            </a>
            <span class="tagline">Thermal Insulation Solutions</span>
        </div>
        
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a></li>
                <li><a href="products.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : ''; ?>">Products</a></li>
                <li><a href="services.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Services</a></li>
                <li><a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </nav>
        
        <div class="header-actions">
            <a href="tel:+48123456789" class="btn btn-outline">
                <i class="fas fa-phone"></i>
                Call Now
            </a>
        </div>
        
        <button class="mobile-menu-toggle" id="mobileMenuToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>
