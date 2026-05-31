<!DOCTYPE html>
<html lang="en" translate="no">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google" content="notranslate">
<title>Nepal Trekking – Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/nepal.css') }}">
</head>
<body>

{{-- ===== NAVBAR ===== --}}
@include('partials.navbar')

{{-- ===== HERO ===== --}}
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <h1 class="page-hero-title">Nepal Trekking</h1>
    <p class="page-hero-subtitle">Le Népal est un escalier monumental dont le sommet se perd dans les nuages</p>
  </div>
  <div class="hero-scroll-hint"><i class="fa fa-chevron-down"></i></div>
</section>

{{-- ===== INTRO SECTION ===== --}}
<section class="intro-section">
  <div class="intro-inner">
    <div class="intro-text">
      <h2>Our Nepal trek routes</h2>
      <p>
        Olivier KERVIEL, sa femme népalaise, leur équipe, vous invitent à découvrir ce magnifique royaume hindou
        perché sur les contreforts de l'Himalaya. <strong>Au Népal, chacun trouvera son bonheur</strong>, le
        « trekkeur » randonneur de montagnes, le rafteur de rivières, l'enthousiaste de vie sauvage, le poète,
        l'artiste, l'érudit ou tout simplement le curieux. « Le Népal est un escalier monumental dont le sommet
        se perd dans les nuages. »
      </p>
      <p>
        Le « toit du monde », refuge du Yeti et des dieux, prend paradoxalement naissance dans une jungle
        luxuriante habitée par des animaux sauvages. Une telle diversité ne peut laisser indifférent. Quant en
        plus, vous savez que les Népalais, leurs langues et leurs coutumes sont aussi variés que le sol lui-même,
        plus rien ne vous arrête pour visiter ce magnifique pays qu'est le Népal. Venez le faire avec nous !
      </p>
      <a href="{{ route('contact') }}" class="btn-devis">Request a quote</a>
    </div>

    {{-- Image Slider --}}
    <div class="intro-slider" id="introSlider">
      <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?auto=format&fit=crop&w=800&q=80" alt="Trekkers au Népal" class="active">
      <img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80" alt="Vue Himalaya">
      <img src="https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&fit=crop&w=800&q=80" alt="Montagne enneigée">
      <button class="slider-arrow prev" id="sliderPrev"><i class="fa fa-chevron-left"></i></button>
      <button class="slider-arrow next" id="sliderNext"><i class="fa fa-chevron-right"></i></button>
    </div>
  </div>
</section>

{{-- ===== INFO STRIP ===== --}}
<section class="info-strip">
  <div class="info-strip-inner">
    <p>
      <strong>Le Népal est un paradis pour le trekkeur.</strong> Des longues randonnées sur le relief chaotique des plus hauts sommets du monde
      (Everest, Makalu, Annapurna) ou sorties plus courtes et plus proches, CELTIC TREKKING organise pour vous des trekking en bivouac – porteurs,
      guides, matériel de camping, matériel de cuisine, cuisinier, permis, repas, transport. Ou des treks en chalets/Lodges – guides, porteurs,
      hébergement et repas en Lodge tout au long de l'itinéraire, permis, transport – Tous les niveaux de difficultés sont présents, de la marche
      en basse montagne à l'expédition en haute altitude.
    </p>
    <p>
      Grâce à notre petite structure et notre flexibilité, nous pouvons arranger vos treks individuels « classiques » à partir de 2 participants et
      les bivouacs à partir de 4 personnes. Pas de craintes de vous retrouver dans « un troupeau » de 20 touristes.
      <strong>Nos groupes et départs fixes sont limités à 10 participants afin que cela reste convivial</strong> et que chacun puisse profiter du
      guide et de ses qualités. Trouvez ci-dessous des exemples de trek. Cette liste n'est pas exhaustive, consultez nous pour d'autres randonnées.
    </p>
  </div>
</section>

{{-- ===== DIFFICULTY CARDS ===== --}}
<section class="circuits-section">
  <div class="circuits-inner">
    <h2 class="section-heading">Discover the circuits offered by Celtic Trekking agency</h2>

    <div class="diff-cards">

      {{-- Card 1 --}}
      <div class="diff-card">
        <h3>Treks de niveau Facile / Moyen</h3>
        <p class="desc">
          Ces treks sont plutôt de courte durée (environ une semaine), ne connaissent pas une altitude supérieure à
          4000 m et ne requiers pas forcément une grande condition physique, même si cela demande quand même quelques
          efforts et des journées de 4/5 heures de marche.
        </p>
        <ul>
          <li><strong>Trekking Vallée :</strong> 4 jours – 2600 m*</li>
          <li><strong>Helambu :</strong> 8 jours – 3500 m*</li>
          <li><strong>Gorepani :</strong> 7 jours – 3200 m*</li>
          <li><strong>Langtang :</strong> 8 jours – 5030 m*</li>
        </ul>
        <p class="note">* maximum</p>
        <hr class="diff-card-divider">
        <a href="{{ route('contact') }}" class="btn-savoir">Je souhaite en savoir plus</a>
      </div>

      {{-- Card 2 --}}
      <div class="diff-card">
        <h3>Treks de niveau Moyen+ / Difficile</h3>
        <p class="desc">
          Ces treks sont généralement compris entre 10 et 20 jours, vous mènent au-dessus de 4000m d'altitude et
          demandent une bonne condition physique.
        </p>
        <ul>
          <li><strong>Langtang / Gosainkund :</strong> 12 jours – 4600 m*</li>
          <li><strong>Camp base Annapurna :</strong> 12 jours – 4100 m*</li>
          <li><strong>Langtang / Helambu :</strong> 14 jours – 4600 m*</li>
          <li><strong>Tour des Annapurnas :</strong> 14-19 jours – 5400 m*</li>
          <li><strong>Everest / Gokyo :</strong> 13-18 jours – 5550 m*</li>
          <li><strong>Mustang :</strong> 14 jours – 3900 m*</li>
          <li><strong>Bas Dolpo :</strong> 12-25 jours – 5100 m*</li>
        </ul>
        <p class="note">* maximum</p>
        <hr class="diff-card-divider">
        <a href="{{ route('contact') }}" class="btn-savoir">Je souhaite en savoir plus</a>
      </div>

      {{-- Card 3 --}}
      <div class="diff-card">
        <h3>Treks de niveau Difficile / Sportif</h3>
        <p class="desc">
          Ce sont des treks de longues durées (15 à 30 jours), qui fréquentent de hautes altitudes et nécessitent
          une bonne acclimatation (+ de 5000m). Ils sont destinés à des gens en très bonne condition physique et qui
          ont l'expérience de la haute montagne, les conditions étant parfois difficiles : froid, vent, neige.
        </p>
        <ul>
          <li><strong>Camp de Base du Makalu :</strong> 18 jours – 5700 m*</li>
          <li><strong>Langtang / Ganja La :</strong> 14-16 jours – 5100 m*</li>
          <li><strong>Tour du Manaslu :</strong> 15-18 jours – 5300 m*</li>
        </ul>
        <p class="note">* maximum</p>
        <hr class="diff-card-divider">
        <a href="{{ route('contact') }}" class="btn-savoir">Je souhaite en savoir plus</a>
      </div>

    </div>
  </div>
</section>

{{-- ===== TREK DETAIL SECTION ===== --}}
<section class="detail-section">
  <div class="detail-inner">
    <h2 class="section-heading">Quelques treks dans le détail</h2>
    <p class="section-sub">
      Après cette rapide présentation des trekkings selon leurs difficultés, voici le détail de quelques uns,<br>
      en tout cas pour les plus classiques d'entre eux.
    </p>

    {{-- Trek Tab Buttons --}}
    <div class="trek-tabs" id="trekTabs">
      <button class="trek-tab-btn active" data-trek="annapurnas">Tour Des Annapurnas</button>
      <button class="trek-tab-btn" data-trek="langtang">Langtang / Gosainkund / Helambu</button>
      <button class="trek-tab-btn" data-trek="everest">Everest Base Camp / Gokyo</button>
      <button class="trek-tab-btn" data-trek="mustang">Mustang Trek</button>
      <button class="trek-tab-btn" data-trek="tamang">Tamang Heritage Trail</button>
      <button class="trek-tab-btn" data-trek="panch">Panch Pokhari</button>
      <button class="trek-tab-btn" data-trek="safari">Safari et Rafting</button>
      <button class="trek-tab-btn" data-trek="balcon">Balcon des Annapurnas</button>
      <button class="trek-tab-btn" data-trek="helambu">Helambu</button>
      <button class="trek-tab-btn" data-trek="langtang2">Langtang</button>
      <button class="trek-tab-btn" data-trek="kathmandu">Balade dans la vallée de Kathmandu</button>
    </div>

    {{-- Tour des Annapurnas --}}
    <div class="trek-tab-panel active" id="trek-annapurnas">
      <div class="trek-detail-grid">
        <div class="trek-detail-left">
          <img src="https://images.unsplash.com/photo-1589553416260-f586c8f1514f?auto=format&fit=crop&w=800&q=80" alt="Tour des Annapurnas">
          <div class="trek-detail-meta">
            <p><strong>Type :</strong> En lodge</p>
            <p><strong>Durée :</strong> 2 jour d'accès<br>17 jours de marche (version longue) / 12 jours (version courte)</p>
            <p><strong>Difficulté :</strong> Moyen +B.</p>
            <p><strong>Précisions :</strong></p>
            <p class="desc-text">
              Surement l'un des plus beaux treks du Népal. On dit même que c'est le plus beau trek du monde.
              Des paysages extrêmement variés rythment les journées de marche. L'aspect culturel est
              également très riche avec de nombreuses ethnies croisées au fil des jours. Vues de sommets
              magnifiques avec en point d'orgue le passage du col de Thorong.
            </p>
          </div>
          <div class="detail-btns">
            <a href="{{ route('contact') }}" class="btn-info">I would like more information</a>
            <a href="{{ route('testimony') }}" class="btn-temoignage">Our clients testify</a>
            <a href="{{ route('fixed-departures') }}" class="btn-departs">Nos départs fixes</a>
          </div>
        </div>
        <div class="trek-detail-right">
          <div class="day-item"><strong>JOUR 01 :</strong> Kathmandu – Bulbule (transport en bus le long de villages et rizières)</div>
          <div class="day-item"><strong>JOUR 02 :</strong> Bulbule – Bahundanda (750-1300m) 5h en longeant la rivière Marsyangdi.</div>
          <div class="day-item"><strong>JOUR 03 :</strong> Bahundanda – Chiamje (1300-1450m) 4h30. Entre falaises et rivière, les premières maisons tibétaines.</div>
          <div class="day-item"><strong>JOUR 04 :</strong> Chiamje – Bagarchap (1450-2150m) 5h.</div>
          <div class="day-item"><strong>JOUR 05 :</strong> Bagarchap – Chame (2150-2650m) 5h30. La forêt remplace les champs en terrasses.</div>
          <div class="day-item"><strong>JOUR 06 :</strong> Chame – Pisang (2650-3200m) 5h. Très beaux paysages alpins. La vallée s'élargit.</div>
          <div class="day-item"><strong>JOUR 07 :</strong> Pisang – Manang (3200-3540m) 4h30.</div>
          <div class="day-item"><strong>JOUR 08 :</strong> Journée d'acclimatation à Manang. Possibilité de monter jusqu'au village de Kanghsar ou de vous reposer et balader dans les ruelles de Manang.</div>
          <div class="day-item"><strong>JOUR 09 :</strong> Manang – Letdar (3500-4200m) 5h. Longue montée très régulière. Vues panoramiques sur la chaîne des Annapurnas.</div>
          <div class="day-item"><strong>JOUR 10 :</strong> Letdar – Thorong Phedi ou High Camp (4200-4700m) 4h.</div>
          <div class="day-item"><strong>JOUR 11 :</strong> Thorong Phedi – Thorung La – Muktinath (4700-5416-3700m) 7h. Départ matinal en direction du col (environ 3h d'ascension). Redescente vers Muktinath, près du royaume du Mustang.</div>
          <div class="day-item"><strong>JOUR 12 :</strong> Muktinath – Marpha (3700-2590m) 6h. Paysage minéral et falaises sculptées OU stop à Jomsom pour version courte avec vol pour Pokhara le lendemain.</div>
          <div class="day-item"><strong>JOUR 13 :</strong> Marpha – Kalapani (2590-2500m) 5h30. Visite de Marpha, superbe village parmi les champs de pommiers. Traversée de forêts.</div>
          <div class="day-item"><strong>JOUR 14 :</strong> Kalapani – Tatopani (2500-1200m) 5h. On retrouve les terres cultivées. Sources d'eau chaude.</div>
          <div class="day-item"><strong>JOUR 15 :</strong> Tatopani – Ghorepani (1200-2800m) 6h30. Longue journée à travers villages et champs en terrasses. Dernière portion raide à travers une forêt de rhododendrons.</div>
          <div class="day-item"><strong>JOUR 16 :</strong> Ghorepani – Tadapani (2500m) via Poon Hill à 3200m. 5h30.</div>
          <div class="day-item"><strong>JOUR 17 :</strong> Tadapani – Ghandrung (1950m), 4H30. Superbe village Gurung.</div>
          <div class="day-item"><strong>JOUR 18 :</strong> Ghandrung – Naya Pul (1100m) 5h. Puis route jusque Pokhara 1h. Hôtel en pension complète sur Lake Side.</div>
          <div class="day-item"><strong>JOUR 19 :</strong> Journée de retour vers Kathmandu par la route en bus touristique. Possibilité de prendre l'avion.</div>
        </div>
      </div>
    </div>

    {{-- Langtang Placeholder --}}
    <div class="trek-tab-panel" id="trek-langtang">
      <div class="trek-detail-grid">
        <div class="trek-detail-left">
          <img src="https://images.unsplash.com/photo-1605640840605-14ac1855827b?auto=format&fit=crop&w=800&q=80" alt="Langtang">
          <div class="trek-detail-meta">
            <p><strong>Type :</strong> En lodge</p>
            <p><strong>Durée :</strong> 12-14 jours</p>
            <p><strong>Difficulté :</strong> Moyen+</p>
            <p class="desc-text">Trek dans la belle vallée du Langtang, à seulement quelques heures de Kathmandu. Rencontres avec les peuples Tamang et Tibétains. Vues sublimes sur les sommets enneigés.</p>
          </div>
          <div class="detail-btns">
            <a href="{{ route('contact') }}" class="btn-info">I would like more information</a>
            <a href="{{ route('testimony') }}" class="btn-temoignage">Our clients testify</a>
            <a href="{{ route('fixed-departures') }}" class="btn-departs">Nos départs fixes</a>
          </div>
        </div>
        <div class="trek-detail-right">
          <div class="day-item"><strong>JOUR 01 :</strong> Kathmandu – Syabrubesi (1470m) en bus.</div>
          <div class="day-item"><strong>JOUR 02 :</strong> Syabrubesi – Lama Hotel (2380m) 5h.</div>
          <div class="day-item"><strong>JOUR 03 :</strong> Lama Hotel – Langtang Village (3430m) 5-6h.</div>
          <div class="day-item"><strong>JOUR 04 :</strong> Langtang Village – Kyanjin Gompa (3870m) 3h.</div>
          <div class="day-item"><strong>JOUR 05 :</strong> Acclimatation à Kyanjin. Montée au Tsergo Ri (4984m).</div>
          <div class="day-item"><strong>JOUR 06 :</strong> Kyanjin – Lama Hotel (2380m) 6h.</div>
          <div class="day-item"><strong>JOUR 07 :</strong> Lama Hotel – Thulo Syabru (2230m).</div>
          <div class="day-item"><strong>JOUR 08 :</strong> Thulo Syabru – Sing Gompa (3330m) 4h.</div>
          <div class="day-item"><strong>JOUR 09 :</strong> Sing Gompa – Gosaikunda (4380m) 4h30. Lac sacré hindou.</div>
          <div class="day-item"><strong>JOUR 10 :</strong> Gosaikunda – Ghopte (3430m) via Lauribinayak (4610m).</div>
          <div class="day-item"><strong>JOUR 11 :</strong> Ghopte – Kutumsang (2470m) 5h30.</div>
          <div class="day-item"><strong>JOUR 12 :</strong> Kutumsang – Chisopani (2175m) 6h.</div>
          <div class="day-item"><strong>JOUR 13 :</strong> Chisopani – Kathmandu en bus.</div>
        </div>
      </div>
    </div>

    {{-- Other trek panels (simplified) --}}
    @foreach(['everest' => ['title'=>'Everest Base Camp / Gokyo','img'=>'photo-1516912481808-3406841bd33c','type'=>'En lodge','duree'=>'18 jours','diff'=>'Difficile'],
              'mustang' => ['title'=>'Mustang Trek','img'=>'photo-1517825738774-7de9363ef735','type'=>'En lodge','duree'=>'14 jours','diff'=>'Moyen'],
              'tamang'  => ['title'=>'Tamang Heritage Trail','img'=>'photo-1599427303058-f04cbcf4756f','type'=>'En lodge','duree'=>'10 jours','diff'=>'Facile/Moyen'],
              'panch'   => ['title'=>'Panch Pokhari','img'=>'photo-1464822759023-fed622ff2c3b','type'=>'En bivouac','duree'=>'12 jours','diff'=>'Moyen+'],
              'safari'  => ['title'=>'Safari et Rafting','img'=>'photo-1504432842672-1a4d20ad2bb5','type'=>'Hôtel / Camp','duree'=>'7 jours','diff'=>'Facile'],
              'balcon'  => ['title'=>'Balcon des Annapurnas','img'=>'photo-1576086213369-97a306d36557','type'=>'En lodge','duree'=>'7-9 jours','diff'=>'Facile/Moyen'],
              'helambu' => ['title'=>'Helambu','img'=>'photo-1559827291-72ee739d0d9a','type'=>'En lodge','duree'=>'8 jours','diff'=>'Facile'],
              'langtang2'=>['title'=>'Langtang','img'=>'photo-1605640840605-14ac1855827b','type'=>'En lodge','duree'=>'8 jours','diff'=>'Moyen'],
              'kathmandu'=>['title'=>'Balade dans la vallée de Kathmandu','img'=>'photo-1529978148899-c74e26e18cda','type'=>'En hôtel','duree'=>'3-4 jours','diff'=>'Facile']] as $key => $t)
    <div class="trek-tab-panel" id="trek-{{ $key }}">
      <div class="trek-detail-grid">
        <div class="trek-detail-left">
          <img src="https://images.unsplash.com/{{ $t['img'] }}?auto=format&fit=crop&w=800&q=80" alt="{{ $t['title'] }}">
          <div class="trek-detail-meta">
            <p><strong>Type :</strong> {{ $t['type'] }}</p>
            <p><strong>Durée :</strong> {{ $t['duree'] }}</p>
            <p><strong>Difficulté :</strong> {{ $t['diff'] }}</p>
            <p class="desc-text">Contact Us pour obtenir le programme détaillé de ce trek et toutes les informations nécessaires à la préparation de votre voyage.</p>
          </div>
          <div class="detail-btns">
            <a href="{{ route('contact') }}" class="btn-info">I would like more information</a>
            <a href="{{ route('testimony') }}" class="btn-temoignage">Our clients testify</a>
            <a href="{{ route('fixed-departures') }}" class="btn-departs">Nos départs fixes</a>
          </div>
        </div>
        <div class="trek-detail-right" style="display:flex;align-items:center;justify-content:center;">
          <p style="color:#666;font-size:0.9rem;text-align:center;">Programme détaillé disponible sur demande.<br>Contact Us pour plus d'informations.</p>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</section>

{{-- ===== SHARE BANNER ===== --}}
<section class="share-banner">
  <p>Vous avez aimé ce voyage, partagez votre aventure avec vos proches</p>
  <div class="share-icons">
    <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
    <span class="divider"></span>
    <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
    <span class="divider"></span>
    <a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a>
  </div>
</section>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {

  // ===== Intro Slider =====
  const slides = document.querySelectorAll('#introSlider img');
  let current = 0;

  function showSlide(idx) {
    slides[current].classList.remove('active');
    current = (idx + slides.length) % slides.length;
    slides[current].classList.add('active');
  }

  document.getElementById('sliderPrev').addEventListener('click', () => showSlide(current - 1));
  document.getElementById('sliderNext').addEventListener('click', () => showSlide(current + 1));
  setInterval(() => showSlide(current + 1), 4500);

  // ===== Trek Detail Tabs =====
  const trekBtns = document.querySelectorAll('.trek-tab-btn');
  const trekPanels = document.querySelectorAll('.trek-tab-panel');

  trekBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      trekBtns.forEach(b => b.classList.remove('active'));
      trekPanels.forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const panel = document.getElementById('trek-' + btn.dataset.trek);
      if (panel) panel.classList.add('active');
    });
  });

});
</script>
</body>
</html>