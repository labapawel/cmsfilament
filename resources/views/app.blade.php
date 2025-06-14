<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja Strona - Profesjonalne Usługi</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header z Navigation -->
        <header>
            <div class="header-content">
                <div class="logo">MojaFirma</div>
                <nav>
                    <ul>
                        @foreach(\App\Models\Page::where('is_active', 1)->where('is_menu', 1)->get() as $page)
                            <li><a href="{{$page->slug}}">{{ $page->title }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Hero Section / Nagłówek -->
        <section class="hero" id="home">
            <div class="hero-content">
                <div class="subtitle">Profesjonalne Rozwiązania Biznesowe</div>
                <h1>Przekształcamy Twoje Pomysły w Sukces</h1>
                <p>Jesteśmy zespołem ekspertów, którzy dostarczają innowacyjne rozwiązania technologiczne i strategiczne konsultacje biznesowe. Pomagamy firmom osiągnąć nadzwyczajne rezultaty.</p>
                <a href="#kontakt" class="cta-button"><span>Rozpocznij Współpracę</span></a>
            </div>
        </section>

        <!-- Main Content -->
        <main>
            <!-- Content Cards -->
            <section class="content-grid">
                <div class="content-card">
                    <h3>🚀 Innowacyjne Rozwiązania</h3>
                    <p>Oferujemy najnowocześniejsze technologie i innowacyjne podejście do rozwiązywania problemów biznesowych. Nasze rozwiązania są dostosowane do indywidualnych potrzeb każdego klienta.</p>
                </div>
                <div class="content-card">
                    <h3>💼 Profesjonalne Usługi</h3>
                    <p>Nasz zespół składa się z doświadczonych specjalistów, którzy zapewniają najwyższą jakość usług. Dbamy o każdy detal i zawsze dostarczamy rezultaty na czas.</p>
                </div>
                <div class="content-card">
                    <h3>🎯 Skuteczne Strategie</h3>
                    <p>Opracowujemy skuteczne strategie biznesowe, które pomagają naszym klientom osiągnąć zamierzone cele. Każda strategia jest dokładnie przemyślana i dostosowana do rynku.</p>
                </div>
                <div class="content-card">
                    <h3>📊 Analiza i Optymalizacja</h3>
                    <p>Przeprowadzamy szczegółowe analizy i optymalizujemy procesy biznesowe, aby maksymalizować efektywność i rentowność Twojej firmy.</p>
                </div>
                <div class="content-card">
                    <h3>🤝 Wsparcie Klienta</h3>
                    <p>Zapewniamy kompleksowe wsparcie na każdym etapie współpracy. Nasz zespół jest zawsze gotowy do pomocy i odpowiedzi na wszystkie pytania.</p>
                </div>
                <div class="content-card">
                    <h3>🌟 Gwarancja Jakości</h3>
                    <p>Wszystkie nasze usługi objęte są gwarancją jakości. Jesteśmy pewni naszych rozwiązań i gwarantujemy satysfakcję klientów.</p>
                </div>
            </section>

            <!-- About Section -->
            <section class="about" id="o-nas">
                <h2>O Naszej Firmie</h2>
                <p>Jesteśmy dynamiczną firmą z wieloletnim doświadczeniem w branży. Naszą misją jest dostarczanie najwyższej jakości usług, które pomagają naszym klientom osiągnąć sukces. Wierzymy w innowacje, profesjonalizm i budowanie długotrwałych relacji biznesowych opartych na zaufaniu i wzajemnym szacunku.</p>
            </section>
        </main>

        <!-- Footer / Stopka -->
        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Kontakt</h4>
                    <p>📧 kontakt@mojafirma.pl</p>
                    <p>📞 +48 123 456 789</p>
                    <p>📍 ul. Przykładowa 123, 43-300 Bielsko-Biała</p>
                </div>
                <div class="footer-section">
                    <h4>Usługi</h4>
                    <a href="#konsultacje">Konsultacje biznesowe</a>
                    <a href="#strategie">Strategie marketingowe</a>
                    <a href="#optymalizacja">Optymalizacja procesów</a>
                    <a href="#wsparcie">Wsparcie techniczne</a>
                </div>
                <div class="footer-section">
                    <h4>Śledź nas</h4>
                    <a href="#facebook">Facebook</a>
                    <a href="#linkedin">LinkedIn</a>
                    <a href="#twitter">Twitter</a>
                    <a href="#instagram">Instagram</a>
                </div>
                <div class="footer-section">
                    <h4>Informacje</h4>
                    <a href="#polityka">Polityka prywatności</a>
                    <a href="#regulamin">Regulamin</a>
                    <a href="#cookies">Polityka cookies</a>
                    <a href="#kariera">Kariera</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 MojaFirma. Wszystkie prawa zastrzeżone.</p>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets/script.js') }}"></script>
</body>
</html>