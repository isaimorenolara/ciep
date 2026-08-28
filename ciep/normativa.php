<?php
$pageTitle = 'Normativa';
$activeNav = 'ciep';
$pageHeadEyebrow = 'UASLP · CIEP';
$pageHeadTitle = 'Normativa';

$normativaDocs = [
    'Manual de Procedimientos de Posgrado',
    'Reglamento General de Estudios de Posgrado',
    'Políticas de Operación de Posgrados',
    'Reglamento de uso de instalaciones Edificio P',
    'Políticas de Investigación y Desarrollo Tecnológico',
    'Criterios Mención Honorífica en Posgrado',
    'Políticas de Asignación de Carga Académica',
    'Nueva Estructura de Temarios de Tesis',
    'Lineamientos de Exámenes en Línea',
    'Lineamientos Distinción de Investigadores',
    'Lineamientos Distinción de Tesis',
    'Código de Ética de la UASLP',
    'Protocolo para la erradicación de hostigamiento, acoso sexual y violencia de género',
    'Modalidad de Titulación por Artículo a nivel Licenciatura',
    'Lineamientos de Transferencia Tecnológica y Protección a la Propiedad Intelectual de la Facultad de Ingeniería',
];

include __DIR__ . '/../includes/header.php';
?>

<main>
  <?php include __DIR__ . '/../includes/pagehead.php'; ?>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <p class="ciep-lead">Reglamentos, políticas y lineamientos que rigen los posgrados del CIEP-FI.</p>

      <?php foreach ($normativaDocs as $doc): ?>
        <div class="ciep-directory-row">
          <div class="ciep-directory-who">
            <a class="ciep-directory-name ciep-doc-link" href="#">
              <?= htmlspecialchars($doc) ?>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M17.92 6.62a1 1 0 0 0-.54-.54A1 1 0 0 0 17 6H7a1 1 0 0 0 0 2h7.59l-8.3 8.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0L16 9.41V17a1 1 0 0 0 2 0V7a1 1 0 0 0-.08-.38"/></svg>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
