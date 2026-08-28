<?php
$pageTitle = 'Contactos';
$activeNav = 'contactos';
$pageHeadEyebrow = 'UASLP · CIEP';

$extraHead = '<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">';

$ciepDirectorio = [
    ['cargo' => 'Jefe de Investigación y Posgrado', 'nombre' => 'Dr. Dirk Frederik de Lange', 'correos' => ['dirk.delange@uaslp.mx']],
    ['cargo' => 'Coordinador de Investigación', 'nombre' => 'Dr. Juan Carlos Cuevas Tello', 'correos' => ['cuevas@uaslp.mx']],
    ['cargo' => 'Coordinadora del Posgrado en Computación', 'nombre' => 'Dra. Sandra Edith Nava Muñoz', 'correos' => ['senavam@uaslp.mx']],
    ['cargo' => 'Coordinador del Posgrado en Sistemas Eléctricos de Potencia', 'nombre' => 'Dr. Ciro Alberto Núñez Gutiérrez', 'correos' => ['calberto@uaslp.mx']],
    ['cargo' => 'Coordinador del Posgrado en Tecnología y Gestión del Agua', 'nombre' => 'Dr. Hermann Rocha Escalante', 'correos' => ['hermann.escalante@uaslp.mx']],
    ['cargo' => 'Coordinador del Posgrado en Ingeniería Mecánica', 'nombre' => 'Dr. Francisco Oviedo Tolentino', 'correos' => ['posgrado.mecanica@ing.uaslp.mx', 'francisco.oviedo@uaslp.mx']],
    ['cargo' => 'Coordinador del Posgrado en Ingeniería de Minerales', 'nombre' => 'Dr. Roberto Briones Gallardo', 'correos' => ['posgrado.minerales@ing.uaslp.mx']],
    ['cargo' => 'Coordinador del Posgrado en Metalurgia e Ingeniería de Materiales', 'nombre' => 'Dr. José de Jesús Cruz Rivera', 'correos' => ['jdjcr35@uaslp.mx']],
    ['cargo' => 'Coordinador del Posgrado en Geología Aplicada', 'nombre' => 'Dr. Damiano Sarocchi', 'correos' => ['posgrado.geologia@ing.uaslp.mx']],
    ['cargo' => 'Coordinador del Posgrado en Planeación Estratégica e Innovación', 'nombre' => 'Dr. Héctor Méndez Azúa', 'correos' => ['posgrado.planeacion@ing.uaslp.mx']],
    ['cargo' => 'Coordinador del Posgrado en Ingeniería Eléctrica', 'nombre' => 'Dr. Juan Segundo Ramírez', 'correos' => ['posgrado.electrica@ing.uaslp.mx']],
    ['cargo' => 'Consejero Maestro del Posgrado (Titular)', 'nombre' => 'Dr. Dirk Frederik de Lange', 'correos' => ['dirk.delange@uaslp.mx']],
    ['cargo' => 'Suplente de Consejero Maestro del Posgrado', 'nombre' => 'Dra. Alejandra Guadalupe Silva Trujillo', 'correos' => ['asilva@uaslp.mx']],
    ['cargo' => 'Administradora del Posgrado', 'nombre' => 'Lic. Leticia Montalvo Vázquez', 'correos' => ['lmontalvo@uaslp.mx']],
];

function ciep_directory_rows(array $personas): void
{
    foreach ($personas as $persona): ?>
        <div class="ciep-directory-row">
          <div class="ciep-directory-who">
            <span class="ciep-directory-name"><?= htmlspecialchars($persona['nombre']) ?></span>
            <span class="ciep-directory-role"><?= htmlspecialchars($persona['cargo']) ?></span>
          </div>
          <div class="ciep-directory-emails">
            <?php foreach ($persona['correos'] as $correo): ?>
              <a href="mailto:<?= htmlspecialchars($correo) ?>"><?= htmlspecialchars($correo) ?></a>
            <?php endforeach; ?>
          </div>
        </div>
    <?php endforeach;
}

include __DIR__ . '/includes/header.php';
?>

<main>
  <?php include __DIR__ . '/includes/pagehead.php'; ?>

  <section class="ciep-contact">
    <div class="container-fluid px-lg-5">
      <div class="ciep-contact-grid">
        <div class="ciep-contact-info">
          <h2 class="ciep-contact-label">Ubicación</h2>

          <div class="ciep-contact-row">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="M12 21s7-6.5 7-12a7 7 0 1 0-14 0c0 5.5 7 12 7 12Z"/><circle cx="12" cy="9" r="2.5"/></svg>
            <address>
              Av. Dr. Manuel Nava No. 8, Edificio P<br>
              Zona Universitaria Poniente, C.P. 78290<br>
              San Luis Potosí, S.L.P., México
            </address>
          </div>

          <div class="ciep-contact-row">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="m4.912 10.541l2.64-2.64a2.08 2.08 0 0 0 .507-2.064a27 27 0 0 1-.49-1.844C7.453 3.45 6.976 3 6.42 3H4.912c-1.11 0-2.023.904-1.901 2.008c.926 8.392 7.59 15.055 15.981 15.981c1.104.122 2.008-.79 2.008-1.9v-1.51c0-.554-.452-1.01-.998-1.11a15 15 0 0 1-1.774-.459c-.767-.244-1.619-.072-2.188.496l-2.581 2.582"/></svg>
            <a href="tel:+524448262300">(444) 8-26-23-00 Ext. 6254</a>
          </div>

          <a class="ciep-contact-link" href="https://www.google.com/maps/place/CIEP_Edificio+P/@22.1442985,-101.0151332,19z" target="_blank" rel="noopener">
            Cómo llegar
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><path d="M7 17 17 7M7 7h10v10"/></svg>
          </a>
        </div>

        <div id="ciepMap" class="ciep-map" role="img" aria-label="Mapa de ubicación del edificio del CIEP, Facultad de Ingeniería, UASLP, en la Zona Universitaria Poniente de San Luis Potosí"></div>
      </div>
    </div>
  </section>

  <section class="ciep-directory">
    <div class="container-fluid px-lg-5">
      <p class="ciep-directory-group-title">Directorio</p>
      <?php ciep_directory_rows($ciepDirectorio); ?>
    </div>
  </section>
</main>

<?php
$extraScripts = <<<'HTML'
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
(function () {
  var mapEl = document.getElementById('ciepMap');
  if (!mapEl || typeof L === 'undefined') { return; }

  var coords = [22.1442973, -101.014586];

  var map = L.map(mapEl, {
    center: coords,
    zoom: 16,
    minZoom: 12,
    maxZoom: 16,
    scrollWheelZoom: false,
    attributionControl: true
  });

  L.tileLayer('https://services.arcgisonline.com/arcgis/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri — Esri, DeLorme, NAVTEQ',
    minZoom: 12,
    maxZoom: 16
  }).addTo(map);

  L.tileLayer('https://services.arcgisonline.com/arcgis/rest/services/Canvas/World_Light_Gray_Reference/MapServer/tile/{z}/{y}/{x}', {
    minZoom: 12,
    maxZoom: 16
  }).addTo(map);

  var pin = L.divIcon({
    className: 'ciep-map-pin-wrap',
    html: '<span class="ciep-map-pin"></span>',
    iconSize: [28, 28],
    iconAnchor: [14, 14]
  });

  L.marker(coords, { icon: pin, keyboard: false })
    .addTo(map)
    .bindPopup('CIEP · Edificio P');
})();
</script>
HTML;

include __DIR__ . '/includes/footer.php';
?>
