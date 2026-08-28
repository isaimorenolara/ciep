<?php
$pageTitle = 'Admisión a las Maestrías';
$activeNav = 'admision';
$pageHeadEyebrow = 'UASLP · CIEP';
$pageHeadTitle = 'Admisión a las Maestrías';

$programas = [
    ['nombre' => 'Maestría en Ing. de la Computación', 'dedicacion' => 'Tiempo parcial', 'pnpc' => 'No', 'admision' => 'Anual en verano', 'examen' => 'Cursos propedéuticos o examen directo', 'href' => 'maestria-computacion.php'],
    ['nombre' => 'Maestría en Geología Aplicada', 'dedicacion' => 'Tiempo completo', 'pnpc' => 'Sí', 'admision' => 'Semestral', 'examen' => 'Examen directo y elegir y preparar un tema', 'href' => null],
    ['nombre' => 'Maestría en Ing. Eléctrica', 'dedicacion' => 'Tiempo completo', 'pnpc' => 'Sí', 'admision' => 'Anual en verano', 'examen' => 'Cursos propedéuticos o examen directo', 'href' => null],
    ['nombre' => 'Maestría en Ing. Mecánica', 'dedicacion' => 'Tiempo completo', 'pnpc' => 'Sí', 'admision' => 'Anual en verano', 'examen' => 'Cursos propedéuticos o examen directo', 'href' => null],
    ['nombre' => 'Maestría en Ing. de Minerales', 'dedicacion' => 'Tiempo completo', 'pnpc' => 'Sí', 'admision' => 'Semestral', 'examen' => 'Examen directo', 'href' => null],
    ['nombre' => 'Maestría en Metalurgia e Ing. de Materiales', 'dedicacion' => 'Tiempo completo', 'pnpc' => 'Sí', 'admision' => 'Anual en verano', 'examen' => 'Cursos propedéuticos o examen directo', 'href' => null],
    ['nombre' => 'Maestría en Planeación Estratégica e Innovación', 'dedicacion' => 'Tiempo parcial', 'pnpc' => 'No', 'admision' => 'Semestral', 'examen' => 'Se evalúan conocimientos durante la entrevista', 'href' => null],
    ['nombre' => 'Maestría en Sistemas Eléctricos de Potencia', 'dedicacion' => 'Tiempo parcial, modalidad en línea', 'pnpc' => 'No', 'admision' => 'Variable: ver convocatoria', 'examen' => 'Examen directo de conocimientos', 'href' => null],
    ['nombre' => 'Maestría en Tecnología y Gestión del Agua', 'dedicacion' => 'Tiempo completo', 'pnpc' => 'Sí', 'admision' => 'Anual en verano', 'examen' => 'Preparación y defensa de una propuesta de proyecto', 'href' => null],
];

$requisitos = [
    'Comprobante de licenciatura concluida (título), o carta de pasante y carta compromiso de titulación dentro de los primeros seis meses del programa',
    'Examen de conocimientos básicos del posgrado de interés',
    'Resultados vigentes del Examen Nacional de Ingreso al Posgrado (EXANI-III)',
    'Comprobante del dominio del idioma inglés (TOEFL o equivalente)',
    'Examen psicométrico',
    'Entrevista con el Comité de Admisión del Posgrado',
    'Carta de motivos',
    'Dos cartas de recomendación de académicos o profesionistas acorde al perfil del posgrado',
];

$documentos = [
    'Título y certificado de materias (o carta de pasante, certificado/kárdex y carta compromiso de titulación para no titulados)',
    'Resultados del EXANI-III, o comprobante de registro en espera de resultado',
    'Certificado de nivel de inglés (TOEFL o equivalente)',
    'Fotografía digital reciente a color, fondo blanco (JPG, 300 dpi, 300 × 360 pt)',
    'Dos cartas de recomendación de académicos o profesionistas acorde al perfil del posgrado',
    'Carta de motivos para ingresar a la Maestría',
    'Carta de compromiso de dedicación de tiempo completo dirigida al coordinador del programa (solo posgrados de tiempo completo)',
    'Currículum Vitae en formato libre, sin documentación probatoria',
    'Acta certificada de nacimiento',
];

include __DIR__ . '/includes/header.php';
?>

<main>
  <?php include __DIR__ . '/includes/pagehead.php'; ?>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <p class="ciep-lead">El proceso de admisión a las maestrías de la Facultad de Ingeniería tiene muchos aspectos comunes, los cuales se exponen en esta sección. Además, cada programa de posgrado tiene información específica, disponible a través de los vínculos en la tabla.</p>
    </div>
  </section>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <h2>¿Cuándo?</h2>
      <p class="ciep-lead">La mayoría de los programas de Maestría tienen un proceso anual de admisión en verano para iniciar los estudios en el semestre de otoño (a finales de agosto); sin embargo, hay programas con proceso de admisión en invierno (inicio a finales de enero), o con ingreso en ambos semestres. El proceso de admisión inicia en junio y en noviembre para los respectivos periodos, y la convocatoria y el pre-registro abren varios meses antes.</p>
      <p class="ciep-note ciep-note--first">Para detalles revisar la página "Fechas Importantes" de cada programa.</p>
    </div>
  </section>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <h2>Programas de Maestría</h2>
      <div class="ciep-table-wrap">
        <table class="ciep-table">
          <thead>
            <tr>
              <th scope="col">Programa</th>
              <th scope="col">Dedicación</th>
              <th scope="col">PNPC/SNP</th>
              <th scope="col">Admisión</th>
              <th scope="col">Modalidad de examen</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($programas as $programa): ?>
              <tr>
                <th scope="row"><?= htmlspecialchars($programa['nombre']) ?></th>
                <td><?= htmlspecialchars($programa['dedicacion']) ?></td>
                <td><?= htmlspecialchars($programa['pnpc']) ?></td>
                <td><?= htmlspecialchars($programa['admision']) ?></td>
                <td><?= htmlspecialchars($programa['examen']) ?></td>
                <td>
                  <?php if ($programa['href']): ?>
                    <a class="ciep-inline-link" href="<?= htmlspecialchars($programa['href']) ?>">
                      Ver detalles
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
                    </a>
                  <?php else: ?>
                    <span class="ciep-table-pending">Próximamente</span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">

      <div class="ciep-stage">
        <span class="ciep-stage-number">01</span>
        <div class="ciep-stage-body">
          <h2>Requisitos académicos y administrativos de ingreso</h2>
          <ul class="ciep-checklist">
            <?php foreach ($requisitos as $item): ?>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                <span><?= htmlspecialchars($item) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>

          <p class="ciep-note">Para el examen de conocimientos, la mayoría de los programas de maestría ofrecen dos modalidades:</p>
          <ul class="ciep-tag-list">
            <li class="ciep-tag">Cursos propedéuticos (recomendado)</li>
            <li class="ciep-tag">Examen directo en cada uno de los temas</li>
          </ul>
        </div>
      </div>

      <div class="ciep-stage">
        <span class="ciep-stage-number">02</span>
        <div class="ciep-stage-body">
          <h2>Examen EXANI-III</h2>
          <p class="ciep-lead">El Examen Nacional de Ingreso al Posgrado (EXANI-III) se realiza a nivel nacional solo en cuatro fechas durante el año, y requiere registro con mucho tiempo de anticipación. Los trámites, registro y aplicación del examen son externos a los posgrados; es responsabilidad de cada aspirante llevarlo a cabo.</p>
        </div>
      </div>

      <div class="ciep-stage">
        <span class="ciep-stage-number">03</span>
        <div class="ciep-stage-body">
          <h2>Proceso de admisión (preinscripción)</h2>
          <p class="ciep-lead">El registro al proceso de admisión (o preinscripción) se realiza en línea y consta de tres pasos.</p>

          <div class="ciep-split">
            <div class="ciep-step-group">
              <div>
                <p class="ciep-flat-row-title">Paso 1</p>
                <p class="ciep-note ciep-note--first">Entrar al sitio de preinscripción y llenar los campos con la información solicitada.</p>
              </div>
              <div>
                <p class="ciep-flat-row-title">Paso 3</p>
                <p class="ciep-note ciep-note--first">Al concluir los pasos 1 y 2, se enviará al correo registrado la ficha de pago con la cuota de admisión vigente. Realizar el pago y subir el comprobante en el mismo sitio de preinscripción.</p>
              </div>
            </div>
            <div>
              <p class="ciep-flat-row-title">Paso 2</p>
              <p class="ciep-note ciep-note--first">Subir la siguiente documentación digital en formato PDF (excepto la fotografía, en JPG) en el sitio de preinscripción; puede realizarse en varias visitas:</p>
              <ul class="ciep-checklist ciep-checklist--single">
                <?php foreach ($documentos as $doc): ?>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                    <span><?= htmlspecialchars($doc) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <p class="ciep-note">Al completar los tres pasos anteriores, el aspirante puede participar en el proceso de admisión (cursos propedéuticos y demás actividades acordes a la programación y horarios publicados por el posgrado).</p>
        </div>
      </div>

      <div class="ciep-stage">
        <span class="ciep-stage-number">04</span>
        <div class="ciep-stage-body">
          <h2>Pasos posteriores, una vez admitido</h2>
          <p class="ciep-lead">En caso de ser admitido al posgrado, el aspirante puede proceder a realizar los trámites de inscripción como alumno, acorde al proceso descrito por cada programa.</p>
          <p class="ciep-note ciep-note--first">En caso de ser admitido y cumplir con las condiciones y requisitos impuestos por CONACYT, podrá postularse para una beca del CONACYT. Para ello es necesario haber concluido el proceso de inscripción al posgrado y haber entregado al coordinador su clave CVU y la documentación requerida para becarios, tal como se indica en la convocatoria de becas del CONACYT. Al cumplir con lo anterior, el postulante a beca podrá solicitar al coordinador ser registrado en el sistema SNP como alumno con el estatus de "postulante a beca" para proceder con el proceso de postulación.</p>
          <p class="ciep-note">La postulación es responsabilidad del alumno y la autorización de becas depende del CONACYT. En general se otorgan becas para posgrados con dedicación de tiempo completo, acreditados en el PNPC o con registro en el SNP; el alumno debe contar con el grado anterior y el compromiso de dedicación de tiempo completo al programa. Los detalles y requisitos se deben revisar en la convocatoria vigente.</p>
        </div>
      </div>

    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
