<?php
$pageTitle = 'Cuotas';
$activeNav = 'admision';
$pageHeadEyebrow = 'UASLP · CIEP · Admisión';
$pageHeadTitle = 'Cuotas';

$cuotasGrupos = [
    [
        'titulo' => 'Cuotas para todos los programas',
        'nota' => null,
        'items' => [
            ['concepto' => 'Admisión: todos los posgrados, cualquier modalidad', 'nota' => null, 'montos' => [
                ['texto' => '$ 1,000', 'nota' => null],
            ]],
            ['concepto' => 'Servicios generales UASLP', 'nota' => 2, 'montos' => [
                ['texto' => '$ 1,040/año', 'nota' => null],
            ]],
        ],
    ],
    [
        'titulo' => 'Cuotas para la mayoría de los programas',
        'nota' => 1,
        'items' => [
            ['concepto' => 'Inscripción semestres regulares', 'nota' => 3, 'montos' => [
                ['texto' => 'Tarifa maestría: $ 5,100/semestre', 'nota' => null],
                ['texto' => 'Tarifa doctorado: $ 6,250/semestre', 'nota' => null],
                ['texto' => 'Tarifa reducida: $ 3,000/semestre', 'nota' => 4],
            ]],
            ['concepto' => 'Inscripción semestres posteriores', 'nota' => 5, 'montos' => [
                ['texto' => '$ 9,900/semestre', 'nota' => null],
            ]],
            ['concepto' => 'Inscripción alumnos tiempo parcial', 'nota' => 6, 'montos' => [
                ['texto' => '$ 20,000/semestre', 'nota' => null],
            ]],
        ],
    ],
    [
        'titulo' => 'Cuotas particulares',
        'nota' => null,
        'items' => [
            ['concepto' => 'Inscripción Maestría en Ingeniería de la Computación', 'nota' => null, 'montos' => [
                ['texto' => '$ 7,000/semestre regular', 'nota' => 3],
                ['texto' => '$ 9,900/semestre en semestres posteriores', 'nota' => 5],
            ]],
            ['concepto' => 'Inscripción Maestría en Sistemas Eléctricos de Potencia', 'nota' => null, 'montos' => [
                ['texto' => '$ 44,000/semestre', 'nota' => null],
                ['texto' => '$ 22,000/semestre al terminar materias', 'nota' => null],
            ]],
            ['concepto' => 'Inscripción Maestría en Ingeniería de Minerales, programa con industria', 'nota' => null, 'montos' => [
                ['texto' => '$ 44,000/semestre', 'nota' => null],
                ['texto' => '$ 9,900/semestre al terminar materias', 'nota' => null],
            ]],
            ['concepto' => 'Inscripción Maestría en Ingeniería Mecánica, programa con industria', 'nota' => null, 'montos' => [
                ['texto' => '$ 20,000/semestre más $ 5,000/materia', 'nota' => null],
            ]],
            ['concepto' => 'Inscripción Maestría en Planeación Estratégica e Innovación', 'nota' => null, 'montos' => [
                ['texto' => '$ 2,500/semestre más $ 3,750/materia', 'nota' => null],
            ]],
        ],
    ],
];

$cuotasNotas = [
    1 => 'Aplica a los alumnos del doctorado en Computación (para la maestría ver "Cuotas particulares"), y de las maestrías y los doctorados de los posgrados en Geología Aplicada, Ingeniería Eléctrica, Ingeniería Mecánica, Ingeniería de Minerales, Metalurgia e Ingeniería de Materiales, y en Tecnología y Gestión de Agua, exceptuando a los alumnos que cursan un "programa con industria" en algunos de estos posgrados. Las cuotas en caso de estas excepciones se presentan en "Cuotas particulares".',
    2 => 'Todos los alumnos de posgrado pagan los servicios generales una vez por año escolar, en lo general junto con el pago del semestre de otoño, o en su primera inscripción. Esta es una tarifa institucional de la UASLP vigente desde el año académico 2022/2023 y es sujeto a cambios.',
    3 => 'Como semestres regulares se consideran los semestres nominales del Plan de Estudios, más el semestre directamente siguiente (Maestría tiempo completo: semestres 1 al 5, Doctorado: semestres 1 al 9, Programas de tiempo parcial: acorde al plan de estudios de tiempo parcial).',
    4 => 'Reducción que puede aplicarse en caso que un alumno se ve confrontado con doble colegiatura o con gastos significativos relacionados con una estancia de movilidad en otra institución. Solicitado a través de coordinación y autorizado por el CAP (Comité Académico del Posgrado).',
    5 => 'La inscripción del alumno en semestres posteriores (a partir del semestre 6 para maestría y semestre 10 para doctorado) está sujeta a la aprobación por parte del CAP.',
    6 => 'Alumnos con compromiso de tiempo completo que se dedican tiempo parcial a sus estudios sin autorización previa por parte del CAP.',
];

function ciep_cuota_nota(?int $n): string
{
    if (!$n) {
        return '';
    }
    return ' <sup><a href="#cuota-nota-' . $n . '">' . $n . '</a></sup>';
}

include __DIR__ . '/../includes/header.php';
?>

<main>
  <?php include __DIR__ . '/../includes/pagehead.php'; ?>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <p class="ciep-lead">En la siguiente tabla se detallan las tarifas (vigentes a partir de enero de 2025) que se consideran para la mayoría<?= ciep_cuota_nota(1) ?> de los posgrados, así como las excepciones particulares para algunos programas.</p>
    </div>
  </section>

  <?php foreach ($cuotasGrupos as $grupo): ?>
    <section class="ciep-program-section">
      <div class="container-fluid px-lg-2">
        <h2><?= htmlspecialchars($grupo['titulo']) ?><?= ciep_cuota_nota($grupo['nota']) ?></h2>
        <div class="ciep-table-wrap">
          <table class="ciep-table">
            <thead>
              <tr>
                <th scope="col">Concepto</th>
                <th scope="col">Montos</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($grupo['items'] as $item): ?>
                <tr>
                  <th scope="row"><?= htmlspecialchars($item['concepto']) ?><?= ciep_cuota_nota($item['nota']) ?></th>
                  <td>
                    <?php foreach ($item['montos'] as $i => $monto): ?>
                      <?php if ($i > 0): ?><br><?php endif; ?>
                      <?= htmlspecialchars($monto['texto']) ?><?= ciep_cuota_nota($monto['nota']) ?>
                    <?php endforeach; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  <?php endforeach; ?>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <ol class="ciep-footnotes">
        <?php foreach ($cuotasNotas as $n => $texto): ?>
          <li id="cuota-nota-<?= $n ?>"><?= htmlspecialchars($texto) ?></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
