<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Een homepagevoorstel voor Barbershop Varsseveld: knippen, baardverzorging en een frisse uitstraling.">
    <title>Barbershop Varsseveld | Homepageconcept</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,600,0,0&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a class="brand" href="#home" aria-label="Barbershop Varsseveld home">
            <span class="material-symbols-outlined mark" aria-hidden="true">content_cut</span>
            <span>BARBERSHOP<small>VARSSEVELD</small></span>
        </a>
        <nav aria-label="Hoofdnavigatie">
            <a href="#diensten">Diensten</a>
            <a href="#verhaal">Ons verhaal</a>
            <a href="#contact">Contact</a>
        </nav>
        <button class="button booking" type="button">PLAN JE BEZOEK <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
    </header>

    <main id="home">
        <section class="hero">
            <img class="hero-photo" src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&amp;fit=crop&amp;w=2000&amp;q=85" alt="Illustratief sfeerbeeld van een barbershop met klassieke kappersstoelen" fetchpriority="high">
            <div class="hero-shade"></div>
            <div class="hero-copy">
                <div class="eyebrow"><span></span> BARBERSHOP VARSSEVELD</div>
                <h1>JOUW STIJL.<br>STRAK <em>TOT IN</em><br>DE DETAILS.</h1>
                <p>Een frisse coupe. Een verzorgde baard.<br>Een look die helemaal bij je past.</p>
                <div class="hero-actions">
                    <button class="button booking" type="button">PLAN JE BEZOEK <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
                    <a class="text-link" href="#diensten">ONTDEK DE DIENSTEN <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></a>
                </div>
            </div>
            <div class="hero-bottom">
                <span>HEREN · KINDEREN · BAARDVERZORGING</span>
                <span>VARSSEVELD, ACHTERHOEK <span class="material-symbols-outlined copper" aria-hidden="true">arrow_forward</span></span>
            </div>
            <div class="vertical">THE ART OF A FRESH LOOK</div>
        </section>

        <div class="ticker" aria-hidden="true">
            <span>FRESH CUTS</span><i class="material-symbols-outlined">star</i>
            <span>CLEAN SHAVES</span><i class="material-symbols-outlined">star</i>
            <span>YOUR STYLE</span><i class="material-symbols-outlined">star</i>
            <span>VARSSEVELD</span>
        </div>

        <section class="services wrap" id="diensten">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">01 / IN DE STOEL</p>
                    <h2>GOED VERZORGD.<br><em>OP JOUW MANIER.</em></h2>
                </div>
                <p>Van een nieuwe coupe tot het bijwerken van je baard. Kies de behandeling die bij jouw look past.</p>
            </div>
            <div class="service-list">
                <article>
                    <span class="num">01</span>
                    <h3>HEREN KNIPPEN</h3>
                    <p>Kort en strak of wat meer lengte. Jouw kapsel is het uitgangspunt.</p>
                    <button class="service-action" type="button" data-service="Heren knippen" aria-label="Bekijk heren knippen"><span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
                </article>
                <article>
                    <span class="num">02</span>
                    <h3>BAARD &amp; SCHEREN</h3>
                    <p>Een verzorgde baard en strakke contouren maken je look compleet.</p>
                    <button class="service-action" type="button" data-service="Baard &amp; scheren" aria-label="Bekijk baard en scheren"><span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
                </article>
                <article>
                    <span class="num">03</span>
                    <h3>KINDEREN KNIPPEN</h3>
                    <p>Een frisse coupe voor de jongste bezoekers van de barbershop.</p>
                    <button class="service-action" type="button" data-service="Kinderen knippen" aria-label="Bekijk kinderen knippen"><span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
                </article>
            </div>
            <p class="note">Het aanbod is gebaseerd op openbare bedrijfsinformatie uit 2023. Actuele behandelingen en tarieven worden voor de definitieve website bevestigd.</p>
        </section>

        <section class="story" id="verhaal">
            <div class="story-image">
                <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&amp;fit=crop&amp;w=1100&amp;q=85" alt="Illustratief sfeerbeeld van een barbier aan het werk" loading="lazy">
                <span class="photo-label">SFEERBEELD / BARBER CULTURE</span>
            </div>
            <div class="story-copy">
                <p class="eyebrow">02 / ACHTER DE NAAM</p>
                <h2>EEN EIGEN ZAAK.<br><em>EEN EIGEN VERHAAL.</em></h2>
                <p>In september 2023 begon Naser Khalef met Barbershop Varsseveld aan de Schoolstraat. Een plek voor heren en kinderen, met aandacht voor knippen en baardverzorging.</p>
                <p>Dat lokale verhaal vormt de basis van dit homepagevoorstel: persoonlijk, toegankelijk en met de stijl van een klassieke barbershop.</p>
                <a class="text-link" href="https://www.geldersepost.nl/nieuws/maatschappij/467789/barbershop-varsseveld-gerund-door-irakees-naser" target="_blank" rel="noopener">LEES HET VERHAAL IN DE GELDERSE POST <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></a>
            </div>
        </section>

        <section class="visit wrap" id="contact">
            <div>
                <p class="eyebrow">03 / JOUW VOLGENDE LOOK</p>
                <h2>KLAAR VOOR<br><em>EEN FRISSE START?</em></h2>
                <p>Bespreek je wensen en plan een moment in de stoel.</p>
                <button class="button booking" type="button">PLAN JE BEZOEK <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
            </div>
            <aside>
                <span class="label">BARBERSHOP VARSSEVELD</span>
                <h3>TOT IN DE STOEL.</h3>
                <div class="info-row"><span>Locatie</span><strong>Varsseveld</strong></div>
                <div class="info-row"><span>Bezoekadres</span><strong>Schoolstraat 2A, 7051 DC Varsseveld</strong></div>
                <div class="info-row"><span>Ma - vr</span><strong>10:00 - 18:00</strong></div>
                <div class="info-row"><span>Zaterdag</span><strong>09:00 - 17:00</strong></div>
                <div class="info-row"><span>Zondag</span><strong>Gesloten</strong></div>
            </aside>
        </section>
    </main>

    <footer>
        <a class="brand" href="#home">
            <span class="material-symbols-outlined mark" aria-hidden="true">content_cut</span>
            <span>BARBERSHOP<small>VARSSEVELD</small></span>
        </a>
        <a class="text-link" href="#home">NAAR BOVEN <span class="material-symbols-outlined" aria-hidden="true">arrow_upward</span></a>
    </footer>

    <dialog id="booking-dialog" aria-labelledby="dialog-title">
        <button class="close" type="button" aria-label="Venster sluiten"><span class="material-symbols-outlined" aria-hidden="true">close</span></button>
        <p class="eyebrow">VOORBEELD BOEKINGSSTAP</p>
        <h2 id="dialog-title">JOUW BEZOEK.</h2>
        <p id="selection">Kies de behandeling die je wilt bespreken.</p>
        <form>
            <label for="treatment">Behandeling</label>
            <select id="treatment">
                <option>Heren knippen</option>
                <option>Baard &amp; scheren</option>
                <option>Kinderen knippen</option>
            </select>
            <p class="note">Dit is een demo. Er wordt geen afspraak gemaakt of informatie verstuurd. De definitieve knop kan worden gekoppeld aan het bevestigde telefoonnummer, WhatsApp of een boekingssysteem.</p>
            <button type="button" class="button close-dialog">TERUG NAAR DE HOMEPAGE <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
        </form>
    </dialog>

    <script src="script.js"></script>
</body>
</html>
