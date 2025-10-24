<?php
$page_title = "Strona Główna";
$page_description = "IZO-MAT specjalizuje się w materiałach termoizolacyjnych i rozwiązaniach dla budynków mieszkalnych i komercyjnych. Profesjonalne usługi montażu i energooszczędne rozwiązania.";
include 'includes/header.php';
?>

<div class="container">
    <main class="main-content">
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Profesjonalne Rozwiązania Termoizolacyjne</h1>
                <p class="hero-description">
                    IZO-MAT dostarcza wysokiej jakości materiały termoizolacyjne i profesjonalne usługi montażu dla budynków mieszkalnych i komercyjnych. Oszczędzaj energię i redukuj koszty dzięki naszym eksperckim rozwiązaniom.
                </p>
                <div class="hero-actions">
                    <a href="contact.php" class="btn btn-primary">
                        <i class="fas fa-phone"></i>
                        Bezpłatna Wycena
                    </a>
                    <a href="products.php" class="btn btn-outline">
                        <i class="fas fa-box"></i>
                        Zobacz Produkty
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-placeholder">
                    <i class="fas fa-home"></i>
                    <p>Termoizolacja</p>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="section-header">
                <h2>Dlaczego Wybrać IZO-MAT?</h2>
                <p>Zapewniamy kompleksowe rozwiązania termoizolacyjne z profesjonalnym doświadczeniem</p>
            </div>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Energooszczędność</h3>
                    <p>Redukcja kosztów ogrzewania i chłodzenia nawet o 40% dzięki wysokiej jakości materiałom izolacyjnym</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Profesjonalny Montaż</h3>
                    <p>Zespół ekspertów montażu z wieloletnim doświadczeniem w projektach termoizolacyjnych</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Materiały Najwyższej Jakości</h3>
                    <p>Tylko certyfikowane, ekologiczne materiały izolacyjne od zaufanych producentów</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Szybka Realizacja</h3>
                    <p>Szybkie zakończenie projektu z minimalnym zakłóceniem codziennej rutyny</p>
                </div>
            </div>
        </section>

        <section class="services-preview">
            <div class="section-header">
                <h2>Nasze Usługi</h2>
                <p>Kompleksowe rozwiązania termoizolacyjne na każdą potrzebę</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Termoizolacja Mieszkaniowa</h3>
                    <p>Kompletne rozwiązania termoizolacyjne dla domów, mieszkań i budynków mieszkalnych</p>
                    <a href="services.php" class="service-link">Dowiedz się więcej <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Projekty Komercyjne</h3>
                    <p>Duże projekty izolacyjne dla biur, magazynów i obiektów komercyjnych</p>
                    <a href="services.php" class="service-link">Dowiedz się więcej <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3>Usługi Renowacyjne</h3>
                    <p>Modernizacje termoizolacyjne dla istniejących budynków i projektów renowacyjnych</p>
                    <a href="services.php" class="service-link">Dowiedz się więcej <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="cta-content">
                <h2>Gotowy na Poprawę Energooszczędności Twojego Budynku?</h2>
                <p>Skontaktuj się z nami już dziś, aby uzyskać bezpłatną konsultację i wycenę</p>
                <a href="contact.php" class="btn btn-primary btn-large">
                    <i class="fas fa-phone"></i>
                    Skontaktuj się Teraz
                </a>
            </div>
        </section>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
