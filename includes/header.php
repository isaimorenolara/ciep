<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Inicio';
}
if (!isset($activeNav)) {
    $activeNav = '';
}

function ciep_current(string $key, string $activeNav): string
{
    return $key === $activeNav ? ' aria-current="page"' : '';
}

function ciep_link_attrs(array $child): string
{
    return !empty($child['external']) ? ' target="_blank" rel="noopener"' : '';
}

$ciepNav = [
    ['key' => 'inicio', 'label' => 'Inicio', 'href' => '/index.php', 'children' => []],
    ['key' => 'ciep', 'label' => 'CIEP', 'href' => null, 'children' => [
        ['label' => 'Acerca del CIEP', 'href' => '/ciep/acerca.php'],
        ['label' => 'Agenda de actividades', 'href' => null],
        ['label' => 'Calendario escolar', 'href' => null],
        ['label' => 'Normativa', 'href' => '/ciep/normativa.php'],
        ['label' => 'Formatos', 'href' => '/ciep/formatos.php'],
        ['label' => 'Intranet', 'href' => 'http://ciep.ing.uaslp.mx/intranet/', 'external' => true],
        ['label' => 'Facultad de Ingeniería', 'href' => 'https://www.ingenieria.uaslp.mx/', 'external' => true],
    ]],
    ['key' => 'maestrias', 'label' => 'Maestrías', 'href' => null, 'children' => [
        ['label' => 'Ciencias en Geología Aplicada', 'href' => null],
        ['label' => 'Ingeniería de la Computación', 'href' => '/maestrias/computacion.php'],
        ['label' => 'Ingeniería de Minerales', 'href' => null],
        ['label' => 'Ingeniería Eléctrica', 'href' => null],
        ['label' => 'Ingeniería Mecánica', 'href' => null],
        ['label' => 'Metalurgia e Ing de Materiales', 'href' => null],
        ['label' => 'Planeación Estratégica', 'href' => null],
        ['label' => 'Sist. Eléctricos de Potencia', 'href' => null],
        ['label' => 'Tecnología y Gestión del Agua', 'href' => null],
    ]],
    ['key' => 'doctorados', 'label' => 'Doctorados', 'href' => null, 'children' => [
        ['label' => 'Ciencias de la Computación', 'href' => '/doctorados/computacion.php'],
        ['label' => 'Ingeniería de Minerales', 'href' => null],
        ['label' => 'Ingeniería Eléctrica', 'href' => null],
        ['label' => 'Ingeniería Mecánica', 'href' => null],
    ]],
    ['key' => 'investigacion', 'label' => 'Investigación', 'href' => null, 'children' => [
        ['label' => 'Próximamente', 'href' => null],
    ]],
    ['key' => 'admision', 'label' => 'Admisión', 'href' => null, 'children' => [
        ['label' => 'Admisión Maestrías', 'href' => '/admision/maestrias.php'],
        ['label' => 'Admisión Doctorados', 'href' => '/admision/doctorados.php'],
        ['label' => 'EXANI-III', 'href' => '/admision/exani.php'],
        ['label' => 'Cuotas', 'href' => '/admision/cuotas.php'],
        ['label' => 'Preinscripción', 'href' => 'http://ciep.ing.uaslp.mx/preinscripcion/', 'external' => true],
        ['label' => 'Inscripción de materias', 'href' => 'http://ciep.ing.uaslp.mx/intranet/inscripcion/inicio.php', 'external' => true],
    ]],
    ['key' => 'contactos', 'label' => 'Contactos', 'href' => '/contacto.php', 'children' => []],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($pageTitle) ?> · CIEP FI UASLP</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<?php if (!empty($extraHead)) { echo $extraHead; } ?>
</head>
<body>

<div class="ciep-utility">
  <ul class="ciep-utility-list">
    <li>
      <a href="#">
        <svg class="icon-mail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 14" aria-hidden="true"><path fill="currentColor" d="M14.5 13h-13C.67 13 0 12.33 0 11.5v-9C0 1.67.67 1 1.5 1h13c.83 0 1.5.67 1.5 1.5v9c0 .83-.67 1.5-1.5 1.5M1.5 2c-.28 0-.5.22-.5.5v9c0 .28.22.5.5.5h13c.28 0 .5-.22.5-.5v-9c0-.28-.22-.5-.5-.5z"/><path fill="currentColor" d="M8 8.96c-.7 0-1.34-.28-1.82-.79L.93 2.59c-.19-.2-.18-.52.02-.71s.52-.18.71.02l5.25 5.58c.57.61 1.61.61 2.18 0l5.25-5.57c.19-.2.51-.21.71-.02s.21.51.02.71L9.82 8.18c-.48.51-1.12.79-1.82.79Z"/></svg>
        Correo
      </a>
    </li>
    <li class="ciep-utility-sep" aria-hidden="true">|</li>
    <li>
      <a href="#">
        <svg class="icon-phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="m4.912 10.541l2.64-2.64a2.08 2.08 0 0 0 .507-2.064a27 27 0 0 1-.49-1.844C7.453 3.45 6.976 3 6.42 3H4.912c-1.11 0-2.023.904-1.901 2.008c.926 8.392 7.59 15.055 15.981 15.981c1.104.122 2.008-.79 2.008-1.9v-1.51c0-.554-.452-1.01-.998-1.11a15 15 0 0 1-1.774-.459c-.767-.244-1.619-.072-2.188.496l-2.581 2.582"/></svg>
        Directorio
      </a>
    </li>
  </ul>
</div>

<div class="ciep-masthead">
  <div class="ciep-masthead-inner">
    <div class="ciep-brand">
      <a class="ciep-brand-link" href="https://www.uaslp.mx/" target="_blank" rel="noopener">
        <img src="/assets/img/logo-uaslp.png" alt="Universidad Autónoma de San Luis Potosí" draggable="false">
      </a>
      <span class="ciep-brand-sep" aria-hidden="true"></span>
      <a class="ciep-brand-link" href="https://www.ingenieria.uaslp.mx/" target="_blank" rel="noopener">
        <img src="/assets/img/logo-ingenieria.png" alt="Facultad de Ingeniería UASLP" draggable="false">
      </a>
      <span class="ciep-brand-sep" aria-hidden="true"></span>
      <a class="ciep-brand-link" href="/index.php">
        <img src="/assets/img/logo-ciep.png" alt="Centro de Investigación y Estudios de Posgrado" draggable="false">
      </a>
    </div>

    <ul class="ciep-quickaccess">
      <li><a href="#">Aspirantes</a></li>
      <li><a href="#">Estudiantes</a></li>
      <li><a href="#">Egresados</a></li>
      <li><a href="#">Docentes</a></li>
      <li><a href="#">Administrativos</a></li>
    </ul>

    <button class="ciep-menu-toggle" type="button" aria-controls="ciepMobilePanel" aria-expanded="false" aria-label="Abrir menú de navegación">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
    </button>
  </div>
</div>

<div class="ciep-ribbon"></div>

<nav class="ciep-tabsbar" aria-label="Navegación principal">
  <ul class="ciep-tabs">
    <?php foreach ($ciepNav as $item): ?>
      <?php if (empty($item['children'])): ?>
        <li>
          <a class="ciep-tab" href="<?= htmlspecialchars($item['href'] ?? '#') ?>"<?= ciep_current($item['key'], $activeNav) ?>><?= htmlspecialchars($item['label']) ?></a>
        </li>
      <?php else: ?>
        <li class="dropdown">
          <a class="ciep-tab" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"<?= ciep_current($item['key'], $activeNav) ?>>
            <?= htmlspecialchars($item['label']) ?>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
          </a>
          <ul class="dropdown-menu">
            <?php foreach ($item['children'] as $child): ?>
              <li>
                <?php if ($child['href']): ?>
                  <a class="dropdown-item" href="<?= htmlspecialchars($child['href']) ?>"<?= ciep_link_attrs($child) ?>><?= htmlspecialchars($child['label']) ?></a>
                <?php else: ?>
                  <a class="dropdown-item disabled" href="#" aria-disabled="true"><?= htmlspecialchars($child['label']) ?></a>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
</nav>

<div class="ciep-mobile-panel" id="ciepMobilePanel">
  <div class="ciep-mobile-panel-head">
    <img src="/assets/img/logo-uaslp.png" alt="UASLP" draggable="false">
    <button class="ciep-menu-close" type="button" aria-label="Cerrar menú de navegación">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
    </button>
  </div>

  <div class="ciep-mobile-panel-body">
    <ul class="ciep-mobile-tabs">
      <?php foreach ($ciepNav as $item): ?>
        <li>
          <?php if (empty($item['children'])): ?>
            <a href="<?= htmlspecialchars($item['href'] ?? '#') ?>"<?= ciep_current($item['key'], $activeNav) ?>><?= htmlspecialchars($item['label']) ?></a>
          <?php else: ?>
            <?php $panelId = 'ciep-sub-' . $item['key']; ?>
            <button type="button" class="ciep-mobile-summary" aria-expanded="false" aria-controls="<?= $panelId ?>">
              <?= htmlspecialchars($item['label']) ?>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div class="ciep-accordion" id="<?= $panelId ?>">
              <div class="ciep-accordion-inner">
                <ul class="ciep-mobile-sub">
                  <?php foreach ($item['children'] as $child): ?>
                    <li>
                      <?php if ($child['href']): ?>
                        <a href="<?= htmlspecialchars($child['href']) ?>"<?= ciep_link_attrs($child) ?>><?= htmlspecialchars($child['label']) ?></a>
                      <?php else: ?>
                        <span><?= htmlspecialchars($child['label']) ?></span>
                      <?php endif; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
