<?php
$page_title = "Kontakt";
$page_description = "IZO-MAT - Skontaktuj się z nami. Telefon: +48 606 900 346, Email: izomatrs@op.pl. Adres: ul. Elektryczna 2, 33-100 Tarnów. Zamów bezpłatną wycenę hydroizolacji.";
include 'includes/header.php';
?>

<div class="container">
    <main class="main-content">
        <section class="page-header">
            <h1>Kontakt</h1>
            <p>Skontaktuj się z nami, aby uzyskać bezpłatną wycenę i konsultację</p>
        </section>

        <section class="contact-section">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Informacje Kontaktowe</h2>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Telefon</h3>
                            <p><a href="tel:+48606900346">+48 606 900 346</a></p>
                            <small>Dostępny od poniedziałku do piątku 8:00-16:00</small>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p><a href="mailto:izomatrs@op.pl">izomatrs@op.pl</a></p>
                            <small>Odpowiadamy w ciągu 24 godzin</small>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Adres</h3>
                            <p>
                                ul. Elektryczna 2<br>
                                33-100 Tarnów<br>
                                Polska
                            </p>
                            <small>
                                <a href="https://www.google.pl/maps/place/Elektryczna+2,+33-100+Tarn%C3%B3w/@50.032047,20.9665002,17z/data=!3m1!4b1!4m5!3m4!1s0x473d83696e91a68b:0x8292c5da20670c92!8m2!3d50.032047!4d20.9686889" target="_blank">
                                    Zobacz na mapie
                                </a>
                            </small>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Godziny Pracy</h3>
                            <p>
                                Poniedziałek - Piątek: 8:00 - 16:00<br>
                                Sobota: 8:00 - 12:00<br>
                                Niedziela: Zamknięte
                            </p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h2>Wyślij Zapytanie</h2>
                    <form id="contactForm" method="POST" action="/contact">
                        <div class="form-group">
                            <label for="name">Imię i Nazwisko *</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="service">Rodzaj Usługi</label>
                            <select id="service" name="service">
                                <option value="">Wybierz usługę</option>
                                <option value="hydroizolacje">Hydroizolacje</option>
                                <option value="osuszanie">Osuszanie budynków</option>
                                <option value="zbiorniki">Izolacje zbiorników</option>
                                <option value="kurtynowe">Izolacje kurtynowe</option>
                                <option value="dachy">Izolacje dachów</option>
                                <option value="doradztwo">Doradztwo techniczne</option>
                                <option value="iniekcja">Iniekcja rys</option>
                                <option value="posadzki">Posadzki żywicze</option>
                                <option value="inne">Inne</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Wiadomość *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Opisz szczegółowo swoje potrzeby..."></textarea>
                        </div>

                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="privacy" required>
                                <span class="checkmark"></span>
                                Wyrażam zgodę na przetwarzanie danych osobowych zgodnie z polityką prywatności *
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Wyślij Zapytanie
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="contact-methods">
            <h2>Sposób Składania Zamówienia</h2>
            <div class="methods-grid">
                <div class="method-card">
                    <div class="method-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Telefonicznie</h3>
                    <p>Zadzwoń do nas pod numer</p>
                    <p class="method-contact">+48 606 900 346</p>
                    <a href="tel:+48606900346" class="btn btn-outline">Zadzwoń Teraz</a>
                </div>

                <div class="method-card">
                    <div class="method-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Elektronicznie</h3>
                    <p>Wyślij nam email na adres</p>
                    <p class="method-contact">izomatrs@op.pl</p>
                    <a href="mailto:izomatrs@op.pl" class="btn btn-outline">Napisz Email</a>
                </div>

                <div class="method-card">
                    <div class="method-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Osobiście</h3>
                    <p>Odwiedź nas w siedzibie</p>
                    <p class="method-contact">Elektryczna 2, Tarnów</p>
                    <a href="https://www.google.pl/maps/place/Elektryczna+2,+33-100+Tarn%C3%B3w/@50.032047,20.9665002,17z/data=!3m1!4b1!4m5!3m4!1s0x473d83696e91a68b:0x8292c5da20670c92!8m2!3d50.032047!4d20.9686889" target="_blank" class="btn btn-outline">Zobacz na Mapie</a>
                </div>
            </div>
        </section>

        <section class="additional-info">
            <h2>Dodatkowe Informacje</h2>
            <div class="info-grid">
                <div class="info-card">
                    <h3>Obszar Działania</h3>
                    <p>Realizujemy zlecenia w całej Polsce. Specjalizujemy się w regionie Małopolski i Podkarpacia, ale chętnie podejmujemy się projektów w innych częściach kraju.</p>
                </div>
                <div class="info-card">
                    <h3>Bezpłatna Wycena</h3>
                    <p>Oferujemy bezpłatną wycenę i konsultację techniczną. Nasz ekspert przyjedzie na miejsce, oceni stan budynku i przedstawi szczegółową ofertę.</p>
                </div>
                <div class="info-card">
                    <h3>Gwarancja Jakości</h3>
                    <p>Wszystkie nasze prace objęte są gwarancją. Używamy tylko najlepszych materiałów i sprawdzonych technologii.</p>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
