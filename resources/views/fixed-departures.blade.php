<!DOCTYPE html>
<html lang="en" translate="no">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google" content="notranslate">
<title>Fixed Departures – Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/fixed-departures.css') }}">
</head>
<body>

<!-- ===== NAVBAR ===== -->
@include('partials.navbar')

<!-- ===== HERO ===== -->
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <div class="hero-scroll-hint"><i class="fa fa-chevron-down"></i></div>
</section>

<!-- ===== CONTENT ===== -->
<section class="page-content">
  <div class="content-inner">

    <h1 class="page-heading">Consulter nos départs fixes :</h1>
    <p class="page-subtext">Sélectionner ci-dessous le pays dont vous souhaitez consulter la liste des départs fixes.</p>

    <!-- Country Tabs -->
    <div class="tab-bar">
      <button class="tab-btn active" data-tab="nepal">Népal</button>
      <button class="tab-btn" data-tab="tibet">Tibet</button>
      <button class="tab-btn" data-tab="roumanie">Roumanie</button>
    </div>

    <!-- ===== NÉPAL TAB ===== -->
    <div class="tab-panel active" id="tab-nepal">
      <table class="departures-table">
        <thead>
          <tr>
            <th>Circuits</th>
            <th>Dates</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>

          <!-- Langtang -->
          <tr class="row-circuit">
            <td>Langtang (8 jours )</td>
            <td>23 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>04 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Bas/Haut Dolpo -->
          <tr class="row-circuit">
            <td>Bas / Haut Dolpo ( 14 ou 24 jours ) chez l'habitant + sous tente</td>
            <td>27 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>18 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Tour du Manaslu -->
          <tr class="row-circuit">
            <td>Tour du Manaslu (15 ou 17 jours ) en lodge</td>
            <td>25 Septembre 2025</td>
            <td><span class="status-badge status-confirmed">Confirmé</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>11 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>19 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Royaume du Haut Mustang -->
          <tr class="row-circuit">
            <td>Royaume du Haut Mustang ( 17 jours ) en lodge</td>
            <td>28 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>05 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Everest / Gokyo -->
          <tr class="row-circuit">
            <td>Everest / Gokyo ( 18 jours ) en lodge</td>
            <td>04 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>19 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Everest Base Camp -->
          <tr class="row-circuit">
            <td>Everest Base Camp (15 jours) en lodge</td>
            <td>18 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>01 Novembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Kanchenjunga -->
          <tr class="row-circuit">
            <td>Kanchenjunga ( 24 jours ) en lodge</td>
            <td>26 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>10 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Balcon des Annapurnas -->
          <tr class="row-circuit">
            <td>Balcon des Annapurnas (7 ou 9 jours ) en lodge</td>
            <td>21 Septembre 2025</td>
            <td><span class="status-badge status-confirmed">Confirmé</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>28 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>03 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>02 Novembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- La Route du sel -->
          <tr class="row-circuit">
            <td>La Route du sel (16 jours ) en lodge</td>
            <td>06 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Langtang - Gosaikunda -->
          <tr class="row-circuit">
            <td>Langtang - Gosaikunda - Helambu ( 12- 14 jours ) en lodge</td>
            <td>29 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>11 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>19 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Tour des Annapurnas -->
          <tr class="row-circuit">
            <td>Tour des Annapurnas ( 15 ou 17 jours ) en lodge</td>
            <td>15 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>05 Novembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Mardi Himal -->
          <tr class="row-circuit">
            <td>Mardi Himal Base Camp ( 9 jours ) en lodge ( nouveauté )</td>
            <td>29 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>17 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Kanchenjunga - Makalu -->
          <tr class="row-circuit">
            <td>Kanchenjunga - Makalu ( 28 jours ) en lodge + sous tente ( nouveauté )</td>
            <td>03 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Haute route des Annapurnas -->
          <tr class="row-circuit">
            <td>Haute route des Annapurnas et Naar- Phu (21 jours) en lodge + sous tente ( nouveauté )</td>
            <td>08 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>

        </tbody>
      </table>

      <p class="footnote">
        <strong>*Népal :</strong> Toutes les dates indiquées ci-dessus correspondent à une date de départ de Kathmandu. Il faut donc prévoir d'arriver au plus tard la veille au matin.<br>
        Ces mêmes treks peuvent être organisés spécialement pour vous aux dates qui vous conviennent (à partir de 2-3 participants selon les treks ).
      </p>
    </div>

    <!-- ===== TIBET TAB ===== -->
    <div class="tab-panel" id="tab-tibet">
      <table class="departures-table">
        <thead>
          <tr>
            <th>Circuits</th>
            <th>Dates</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>

          <tr class="row-circuit">
            <td>Tibet : Le tour du Kailash ( 22 jours )</td>
            <td>01 Mai 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>15 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <tr class="row-circuit">
            <td>Tibet : Lhassa et monastères ( 12 jours )</td>
            <td>10 Avril 2025</td>
            <td><span class="status-badge status-confirmed">Confirmé</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>20 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <tr class="row-circuit">
            <td>Tibet : Trek Ganden – Samye ( 10 jours )</td>
            <td>05 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>

        </tbody>
      </table>

      <p class="footnote">
        <strong>*Tibet :</strong> Les permis Tibet sont soumis à des restrictions gouvernementales. Nous vous conseillons de réserver au minimum 2 mois à l'avance.
      </p>
    </div>

    <!-- ===== ROUMANIE TAB ===== -->
    <div class="tab-panel" id="tab-roumanie">
      <table class="departures-table">
        <thead>
          <tr>
            <th>Circuits</th>
            <th>Dates</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>

          <tr class="row-circuit">
            <td>Roumanie : Transylvanie et Carpates ( 10 jours )</td>
            <td>12 Juillet 2025</td>
            <td><span class="status-badge status-confirmed">Confirmé</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>06 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <tr class="row-circuit">
            <td>Roumanie : Maramures et Delta du Danube ( 12 jours )</td>
            <td>19 Juillet 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <tr class="row-circuit">
            <td>Roumanie : Les Carpates à cheval ( 8 jours )</td>
            <td>30 Août 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>20 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>

        </tbody>
      </table>

      <p class="footnote">
        <strong>*Roumanie :</strong> Ces mêmes circuits peuvent être organisés spécialement pour vous aux dates qui vous conviennent (à partir de 2 participants).
      </p>
    </div>

  </div>
</section>

<!-- ===== TESTIMONIAL PANEL ===== -->
<section class="testimonials-section">
  <div class="testimonials-inner">
    <div class="testimonial-left">
      <div class="testimonial-icons">
        <i class="fa fa-heart"></i>
        <span></span>
        <i class="fa fa-heart"></i>
      </div>
      <a href="contact.html" class="btn-contact">Contact Us</a>
    </div>
    <div class="testimonial-right">
      <div class="testimonial-slides-wrap">
        <div class="t-slide active">
          <p class="t-quote">"Parfaitement organisé, nous avons ainsi profité au maximum de notre voyage!"</p>
          <cite class="t-author">– Georges &amp; Michele</cite>
        </div>
        <div class="t-slide">
          <p class="t-quote">"Des guides d'un grand professionnalisme et d'une attention de tous les instants."</p>
          <cite class="t-author">– Marie Jadis</cite>
        </div>
        <div class="t-slide">
          <p class="t-quote">"Un séjour fantastique, une organisation bien pensée, en toute discrétion."</p>
          <cite class="t-author">– Philippe Lemarechal</cite>
        </div>
        <div class="t-slide">
          <p class="t-quote">"Une expérience inoubliable, je recommande vivement Celtic Trekking à tous."</p>
          <cite class="t-author">– Sophie &amp; Laurent</cite>
        </div>
      </div>
      <div class="t-dots">
        <button class="t-dot active" data-t="0"></button>
        <button class="t-dot" data-t="1"></button>
        <button class="t-dot" data-t="2"></button>
        <button class="t-dot" data-t="3"></button>
      </div>
    </div>
  </div>
</section>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {

  // ===== Country Tabs =====
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      tabPanels.forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById('tab-' + btn.dataset.tab).classList.add('active');
    });
  });

  // ===== Testimonial Slider =====
  const tSlides = document.querySelectorAll('.t-slide');
  const tDots   = document.querySelectorAll('.t-dot');
  let tCurrent  = 0;

  function tGoTo(idx) {
    tSlides[tCurrent].classList.remove('active');
    tDots[tCurrent].classList.remove('active');
    tCurrent = idx;
    tSlides[tCurrent].classList.add('active');
    tDots[tCurrent].classList.add('active');
  }

  tDots.forEach(d => d.addEventListener('click', () => tGoTo(+d.dataset.t)));
  setInterval(() => tGoTo((tCurrent + 1) % tSlides.length), 4000);

});
</script>
</body>
</html>