<!DOCTYPE html>
<html lang="en" translate="no">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google" content="notranslate">
<title>Celtic Agency – Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/agency.css') }}">
</head>
<body>

@include('partials.navbar')

<!-- ===== HERO BANNER ===== -->
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
</section>

<!-- ===== MAIN CONTENT ===== -->
<div class="page-body">
  <div class="page-layout">

    <!-- ===== LEFT COLUMN ===== -->
    <div class="col-left">

      <h1 class="section-title">L'agence Celtic Trekking</h1>

      <p class="agency-text">
        <strong>Notre belle aventure a démarré en 1992</strong> quand Olivier Kerviel a épousé Sarita et s'est installé au Népal. C'est là que l'agence Celtic Trekking est née. Y avait-il une meilleure place que le Népal pour se lancer dans les treks et la randonnée ? Notre équipe s'est agrandie au fil des années et aujourd'hui nous sommes une vingtaine de personnes à donner le meilleur de nous-mêmes pour vous conseiller et vous accompagner dans <span class="highlight">les plus belles randonnées qui existent sur le toit du monde.</span>
      </p>

      <p class="agency-text">
        Après 20 ans au service de <strong>Celtic Trekking</strong>, Olivier Kerviel a passé la main à Uddhav Pokharel et Krishna Raj Giri, deux népalais francophones.
      </p>

      <!-- Info box -->
      <div class="info-box">
        <h3>Celtic Trekking Adventure (P.) Ltd.</h3>
        <p>GPO Box: 11661, 7 Corner Street, Thamel</p>
        <p>Kathmandu, Nepal.</p>

        <p class="call-label">Please call us if you need information<br>ou si vous ne trouvez pas les bureaux :</p>
        <p>Uddhav : 9841 78 67 78 – Krishna Raj : 9841 41 31 67</p>
        <p>Téléphone : +977-1-4701205</p>
        <p>Email : contact[at]celtictrekking.com</p>

        <hr class="divider">

        <a href="#" class="btn-conditions">Consulter les Conditions Générales</a>

        <hr class="divider">

        <div class="trek-links">
          <a href="#" class="btn-trek">Nos Tibet Trekking</a>
          <a href="#" class="btn-trek">Nos Nepal Trekking</a>
          <a href="#" class="btn-trek">Nos Morocco Trekking</a>
          <a href="#" class="btn-trek">Nos Romania Trekking</a>
        </div>

        <div class="social-icons">
          <i class="fa fa-heart"></i>
          <span class="div"></span>
          <i class="fa fa-heart"></i>
          <span class="div"></span>
          <i class="fa fa-heart"></i>
        </div>
      </div>

    </div>

    <!-- ===== RIGHT COLUMN ===== -->
    <div class="col-right">

      <!-- Image slider -->
      <div class="agency-slider">
        <div class="agency-slider-track" id="agencyTrack">
          <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1469521669194-babb45599def?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&fit=crop&w=900&q=80');"></div>
        </div>
        <button class="agency-slider-arrow agency-slider-prev" id="agencyPrev">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button class="agency-slider-arrow agency-slider-next" id="agencyNext">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>

      <a href="#" class="btn-contact-agency">Contacter l'Agence Celtic Trekking</a>

      <!-- Ethics section -->
      <h2 class="ethics-title">Our expertise and ethics</h2>

      <p class="ethics-text">
        Sur toutes les destinations et treks que nous proposons, nous nous appuyons sur <a href="#" class="hl">des équipes locales compétentes et professionnelles</a> que nous rétribuons de façon saine et généreuse. <a href="#" class="hl">Tous nos guides sont diplômés d'état et suivent régulièrement des cessions de perfectionnement</a> (alpinisme, premiers secours, etc.). Tous parlent une ou deux langues étrangères, parfois plus…
      </p>

      <p class="ethics-text">
        Ils possèdent bien sûr une parfaite connaissance du terrain qui nous permet de vous faire voyager en toute sécurité et en vous faisant découvrir tous les attraits des régions que vous traversez, toujours dans le respect de chacun. Le tourisme solidaire, équitable et durable est à la mode en ce moment !! Certains et certaines en écrivent des pages sur leurs brochures et sites internet, pourtant il en va tout autrement sur le terrain.
      </p>

      <p class="ethics-text">
        <span class="hl-bold">Au Népal,</span> cela fait une décennie que nos guides, porteurs et cuisiniers perçoivent des salaires bien plus élevés que la moyenne. Tout le personnel est assuré par une compagnie locale : NECO Insurance.
      </p>

      <p class="ethics-text">
        Nous veillons à ce que l'équipement des porteurs soit correct, même si bien sûr ils n'ont pas sur le dos les mêmes vêtements High Tech que les trekkeurs occidentaux.
      </p>

      <p class="ethics-text">
        <span class="hl-bold">Au Maroc,</span> contrairement à bons nombre d'agences, nos payons les salaires des guides, chamelier, muletiers et cuisiniers dès le début du trek. C'est donc l'esprit libre et le moral gonflé à bloc que ceux-ci donnent le meilleur d'eux-mêmes pendant votre randonnée. Il y a encore trop d'agences, et pas des moindres, qui payent les équipes accompagnatrices des semaines voire des mois après le trek. Parfois même jamais !!!!!! Pas de ça chez nous. Guides et muletiers pourront en témoigner.
      </p>

      <p class="ethics-text">
        Bref, nous vous proposons des treks équitables, à savoir des treks où tout le monde se retrouve : Vous, le trekkeur qui bénéficiez d'<span class="hl-bold">un tarif correct et des services de qualité</span>, les équipes accompagnatrices qui sont payées décemment avec des conditions de travail idéales, et les intervenants divers (hôtes, marchands, transporteurs, etc.) qui vendent leurs produits et leurs services au juste prix.
      </p>

      <p class="ethics-text">
        Depuis 1992, notre clientèle ne cesse d'augmenter et nous n'en sommes pas peu fiers. Nous savons bien qu'une petite structure comme la nôtre, qui <a href="#" class="hl">privilégie les relations humaines et les valeurs de l'être sur l'avoir</a>, répond aux aspirations d'une partie croissante de la « population voyageuse » qui souhaite rompre avec les logiques de la société de consommation.
      </p>

      <p class="ethics-text">
        <span class="closing">Voyager certes, mais voyager de façon intelligente en faisant confiance à ceux et celles qui vous feront découvrir dans le respect et dans l'échange. Venez le faire avec nous.</span>
      </p>

    </div>

  </div>
</div>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
  const track = document.getElementById('agencyTrack');
  const slides = track.querySelectorAll('.agency-slide');
  let idx = 0;

  function goTo(i) {
    idx = (i + slides.length) % slides.length;
    track.style.transform = `translateX(-${idx * 100}%)`;
  }

  document.getElementById('agencyPrev').addEventListener('click', () => goTo(idx - 1));
  document.getElementById('agencyNext').addEventListener('click', () => goTo(idx + 1));

  setInterval(() => goTo(idx + 1), 5000);
});
</script>
</body>
</html>