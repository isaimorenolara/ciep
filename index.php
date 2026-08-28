<?php
$pageTitle = 'Inicio';
$activeNav = 'inicio';
include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="ciep-hero" style="background-image: url('assets/img/hero-ciep.jpg');">
    <div class="ciep-hero-content">
      <span class="ciep-hero-mark" aria-hidden="true"></span>
      <p class="ciep-hero-eyebrow">Facultad de Ingeniería · UASLP</p>
      <h1>Centro de Investigación y Estudios de Posgrado</h1>
    </div>
  </section>

  <section class="ciep-quicklinks">
    <div class="container-fluid px-lg-5">
      <div class="row row-cols-2 row-cols-lg-6 g-0">
        <div class="col"><a href="#"><img src="assets/img/informe.png" alt="Informe 2024" draggable="false"></a></div>
        <div class="col"><a href="#"><img src="assets/img/contraloria.png" alt="Contraloría Social" draggable="false"></a></div>
        <div class="col"><a href="#"><img src="assets/img/organo.png" alt="Órgano Interno de Control" draggable="false"></a></div>
        <div class="col"><a href="#"><img src="assets/img/centro.png" alt="Centro Interdisciplinario de Atención" draggable="false"></a></div>
        <div class="col"><a href="#"><img src="assets/img/erradicacion.png" alt="Erradicación de la Violencia de Género" draggable="false"></a></div>
        <div class="col"><a href="#"><img src="assets/img/calendario.png" alt="Calendario Escolar 2025-2026" draggable="false"></a></div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
