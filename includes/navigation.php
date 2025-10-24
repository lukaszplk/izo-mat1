<header class="header">
    <div class="header-content">
        <div class="logo-section">
            <a href="/" class="logo">
                <i class="fas fa-home"></i>
                <span>IZO-MAT</span>
            </a>
            <span class="tagline">Rozwiązania Termoizolacyjne</span>
        </div>
        
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="/" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Strona Główna</a></li>
                <li><a href="/about" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">O Nas</a></li>
                <li><a href="/products" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : ''; ?>">Produkty</a></li>
                <li><a href="/services" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Usługi</a></li>
                <li><a href="/contact" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Kontakt</a></li>
            </ul>
        </nav>
        
        <div class="header-actions">
            <a href="tel:+48123456789" class="btn btn-outline">
                <i class="fas fa-phone"></i>
                Zadzwoń
            </a>
        </div>
        
        <button class="mobile-menu-toggle" id="mobileMenuToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>
