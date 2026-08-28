<?php
$pageTitle = 'Formatos';
$activeNav = 'ciep';
$pageHeadEyebrow = 'UASLP · CIEP';
$pageHeadTitle = 'Formatos';

$formatosGrupos = [
    [
        'titulo' => 'Ingreso y (re)inscripción',
        'items' => [
            ['codigo' => 'CIEP-FI-01', 'nombre' => 'Solicitud de preinscripción'],
            ['codigo' => 'CIEP-FI-02', 'nombre' => 'Solicitud de inscripción nuevo ingreso'],
            ['codigo' => 'CIEP-FI-03', 'nombre' => 'Solicitud de reingreso'],
            ['codigo' => 'CIEP-FI-04', 'nombre' => 'Tarjetón para trámite de credencial'],
            ['codigo' => 'CIEP-FI-05', 'nombre' => 'Carta responsabilidades UASLP'],
            ['codigo' => 'CIEP-FI-06', 'nombre' => 'Carta compromiso al posgrado'],
            ['codigo' => 'CIEP-FI-33', 'nombre' => 'Declaración de reconocimiento de propiedad'],
            ['codigo' => 'CIEP-FI-07', 'nombre' => 'Carta compromiso SECIHTI'],
        ],
    ],
    [
        'titulo' => 'Desarrollo del trabajo terminal',
        'items' => [
            ['codigo' => 'CIEP-FI-08', 'nombre' => 'Acta de Evaluación de avance de tesis por Comité Tutorial'],
            ['codigo' => 'CIEP-FI-08', 'nombre' => 'Acta (digital) de Evaluación de avance de tesis por Comité Tutorial'],
            ['codigo' => 'CIEP-FI-09', 'nombre' => 'Portada de tesis'],
            ['codigo' => 'CIEP-FI-10', 'nombre' => 'Declaración de Originalidad'],
        ],
    ],
    [
        'titulo' => 'Registro del tema de tesis',
        'items' => [
            ['codigo' => 'CIEP-FI-11-a', 'nombre' => 'Solicitud de registro del tema del trabajo escrito'],
            ['codigo' => 'CIEP-FI-11-b', 'nombre' => 'Solicitud de modalidad de titulación por artículo'],
            ['codigo' => 'CIEP-FI-12', 'nombre' => 'Solicitud de aprobación del temario'],
            ['codigo' => 'CIEP-FI-13-a', 'nombre' => 'Acta CAP de aprobación de tema y temario trabajo escrito'],
            ['codigo' => 'CIEP-FI-13-b', 'nombre' => 'Acta CAP de aprobación de titulación por artículo'],
            ['codigo' => 'CIEP-FI-14', 'nombre' => 'Solicitud CAP de aprobación de un co-asesor'],
        ],
    ],
    [
        'titulo' => 'Solicitud de examen previo y final',
        'items' => [
            ['codigo' => 'CIEP-FI-0B', 'nombre' => 'Resumen de requisitos para solicitar examen previo y final'],
            ['codigo' => 'CIEP-FI-15', 'nombre' => 'Aprobación del trabajo escrito por asesor'],
            ['codigo' => 'CIEP-FI-16', 'nombre' => 'Carta de autorización y asignación de sinodales'],
            ['codigo' => 'CIEP-FI-17', 'nombre' => 'Solicitud de participación a examen vía remota'],
            ['codigo' => 'CIEP-FI-18', 'nombre' => 'Constancia de Servicio Social de Posgrado'],
            ['codigo' => 'CIEP-FI-19', 'nombre' => 'Autorización de impresión del trabajo escrito'],
            ['codigo' => 'CIEP-FI-20', 'nombre' => 'Solicitud de baja temporal o definitiva'],
            ['codigo' => 'CIEP-FI-21', 'nombre' => 'Carta de cesión de derechos para la divulgación y publicación'],
            ['codigo' => 'CIEP-FI-22', 'nombre' => 'Autorización y liberación final para el examen de grado'],
            ['codigo' => 'CIEP-FI-23', 'nombre' => 'Hoja de datos para trámite de título'],
            ['codigo' => 'CIEP-FI-24', 'nombre' => 'Mención Honorífica'],
            ['codigo' => 'CIEP-FI-25', 'nombre' => 'Formatos y anexo para trámites de Retribución Social'],
            ['codigo' => 'CIEP-FI-26', 'nombre' => 'Solicitud de embargo de tesis'],
        ],
    ],
    [
        'titulo' => 'Propiedad intelectual',
        'items' => [
            ['codigo' => 'CIEP-FI-30', 'nombre' => 'Notificación de protección de invención'],
            ['codigo' => 'CIEP-FI-31', 'nombre' => 'Carta de manifestación de derechos de propiedad intelectual'],
            ['codigo' => 'CIEP-FI-32', 'nombre' => 'Declaración de confidencialidad'],
            ['codigo' => 'CIEP-FI-33', 'nombre' => 'Declaración de reconocimiento de propiedad intelectual'],
        ],
    ],
];

include __DIR__ . '/../includes/header.php';
?>

<main>
  <?php include __DIR__ . '/../includes/pagehead.php'; ?>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <p class="ciep-lead">Formatos oficiales del posgrado para los trámites de ingreso, desarrollo del trabajo terminal, registro de tesis, examen de grado y propiedad intelectual.</p>
    </div>
  </section>

  <?php foreach ($formatosGrupos as $grupo): ?>
    <section class="ciep-program-section">
      <div class="container-fluid px-lg-2">
        <h2><?= htmlspecialchars($grupo['titulo']) ?></h2>
        <div class="ciep-table-wrap">
          <table class="ciep-table">
            <thead>
              <tr>
                <th scope="col">Código</th>
                <th scope="col">Documento</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($grupo['items'] as $item): ?>
                <tr>
                  <th scope="row"><?= htmlspecialchars($item['codigo']) ?></th>
                  <td>
                    <a class="ciep-doc-link" href="#">
                      <?= htmlspecialchars($item['nombre']) ?>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M17.92 6.62a1 1 0 0 0-.54-.54A1 1 0 0 0 17 6H7a1 1 0 0 0 0 2h7.59l-8.3 8.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0L16 9.41V17a1 1 0 0 0 2 0V7a1 1 0 0 0-.08-.38"/></svg>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
