<?php
$page_title = "Strona Nie Znaleziona";
$page_description = "Strona, której szukasz, nie została znaleziona.";
include 'includes/header.php';
?>

<div class="container">
    <main class="main-content">
        <section class="error-page">
            <div class="error-content">
                <h1>404</h1>
                <h2>Strona Nie Znaleziona</h2>
                <p>Przepraszamy, ale strona, której szukasz, nie istnieje lub została przeniesiona.</p>
                <div class="error-actions">
                    <a href="/" class="btn btn-primary">
                        <i class="fas fa-home"></i>
                        Powrót do Strony Głównej
                    </a>
                    <a href="/contact" class="btn btn-outline">
                        <i class="fas fa-phone"></i>
                        Skontaktuj się z Nami
                    </a>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
