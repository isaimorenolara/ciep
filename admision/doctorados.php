<?php
$pageTitle = 'Admisión a los Doctorados';
$activeNav = 'admision';
$pageHeadEyebrow = 'UASLP · CIEP';
$pageHeadTitle = 'Admisión a los Doctorados';

$programas = [
    ['nombre' => 'Doctorado en Ciencias de la Computación', 'pnpc' => 'Sí', 'admision' => 'Semestral', 'href' => '/doctorados/computacion.php'],
    ['nombre' => 'Doctorado en Ingeniería Eléctrica', 'pnpc' => 'Sí', 'admision' => 'Semestral', 'href' => null],
    ['nombre' => 'Doctorado en Ingeniería Mecánica', 'pnpc' => 'Sí', 'admision' => 'Semestral', 'href' => null],
    ['nombre' => 'Doctorado en Ingeniería de Minerales', 'pnpc' => 'Sí', 'admision' => 'Semestral', 'href' => null],
];

$requisitos = [
    'Desarrollar y presentar ante un Comité de Admisión el protocolo del proyecto de tesis propuesto, con revisión del estado del arte, alcance, objetivos, justificación, metodología, infraestructura requerida y cronograma de trabajo',
    'Carta de un miembro del Comité Académico del Posgrado en la que acepta fungir como asesor del aspirante en la propuesta entregada',
    'Contar con licenciatura concluida en una carrera afín al doctorado',
    'Contar con una maestría reconocida en un área afín al programa',
    'Realizar un examen de conocimientos acorde al doctorado de interés',
    'Presentar resultados vigentes del Examen Nacional de Ingreso al Posgrado (EXANI-III)',
    'Presentar comprobante del dominio del idioma inglés (TOEFL o equivalente)',
    'Realizar un examen psicométrico',
    'Presentar currículum vitae en estilo libre, anexando en extenso publicaciones científicas o tecnológicas derivadas de actividades previas',
    'Entregar carta de motivos',
    'Entregar dos cartas de recomendación por académicos o profesionales, preferentemente con perfil de doctorado y actividades de investigación o desarrollo tecnológico',
];

$documentos = [
    'Títulos de licenciatura y maestría, certificados oficiales de materias con promedio general, cédula profesional de licenciatura y cédula de maestría; si el título o cédula están en trámite, comprobante de haberse titulado',
    'Resultados del EXANI-III, o comprobante de registro si aún no se ha presentado el examen',
    'Certificado de nivel de inglés (TOEFL o equivalente)',
    'Fotografía digital reciente a color, fondo blanco (JPG, 300 dpi, 300 × 360 pt)',
    'Dos cartas de recomendación por académicos o profesionales, preferentemente con perfil de doctorado y actividades de investigación o desarrollo tecnológico',
    'Carta de motivos para ingresar al doctorado',
    'Carta de compromiso dirigida al coordinador del programa para realizar los estudios de posgrado con dedicación de tiempo completo, si es el caso',
    'Currículum Vitae en formato libre, anexando publicaciones en extenso (artículos, tesis, etc.)',
    'Acta certificada de nacimiento',
    'Protocolo del proyecto de tesis doctoral propuesto, en versión final aceptada por el asesor propuesto',
    'Carta de aceptación del asesor propuesto para la tesis doctoral',
];

$etapaUno = [
    'Avisar al coordinador el interés de ingresar al programa de doctorado',
    'Contactar a profesores del Comité Académico para conocer la oferta de proyectos y elegir el tema de interés',
    'Elaborar, bajo la asesoría del profesor elegido, una propuesta de tema de tesis doctoral',
    'Registrar y presentar el examen EXANI-III',
];

$etapaTres = [
    'El coordinador revisa la información registrada, define el Comité de Admisión y agenda las actividades del proceso',
    'El candidato presenta los exámenes de conocimientos de acuerdo con el programa, la orientación del tema de tesis y sus antecedentes académicos',
    'El candidato realiza el examen psicométrico',
    'El candidato presenta oralmente la propuesta de investigación ante el Comité de Admisión',
    'El Comité de Admisión delibera sobre la idoneidad del candidato y emite su dictamen en un acta',
];

include __DIR__ . '/../includes/header.php';
?>

<main>
  <?php include __DIR__ . '/../includes/pagehead.php'; ?>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <p class="ciep-lead">El proceso de admisión a los doctorados de la Facultad de Ingeniería tiene muchos aspectos comunes, los cuales se exponen en esta sección. Además, cada programa de posgrado tiene información específica, disponible a través de los vínculos en la tabla.</p>
    </div>
  </section>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <h2>¿Cuándo?</h2>
      <p class="ciep-lead">El ingreso a los programas de Doctorado es semestral, es decir, dos veces al año. Para más detalles y periodos lectivos se debe revisar la página de Fechas Importantes de cada programa.</p>
      <p class="ciep-note ciep-note--first">El proceso de admisión al Doctorado es individual y flexible en sus periodos, siempre que concluya antes del inicio del periodo lectivo. Como requiere preparar el protocolo del proyecto de investigación doctoral, se recomienda contactar al coordinador del posgrado con mucha anticipación.</p>
    </div>
  </section>

  <section class="ciep-program-section">
    <div class="container-fluid px-lg-2">
      <h2>Programas de Doctorado</h2>
      <div class="ciep-table-wrap">
        <table class="ciep-table">
          <thead>
            <tr>
              <th scope="col">Programa</th>
              <th scope="col">PNPC/SNP</th>
              <th scope="col">Admisión</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($programas as $programa): ?>
              <tr>
                <th scope="row"><?= htmlspecialchars($programa['nombre']) ?></th>
                <td><?= htmlspecialchars($programa['pnpc']) ?></td>
                <td><?= htmlspecialchars($programa['admision']) ?></td>
                <td>
                  <?php if ($programa['href']): ?>
                    <a class="ciep-inline-link" href="<?= htmlspecialchars($programa['href']) ?>">
                      Ver detalles
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M17.92 6.62a1 1 0 0 0-.54-.54A1 1 0 0 0 17 6H7a1 1 0 0 0 0 2h7.59l-8.3 8.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0L16 9.41V17a1 1 0 0 0 2 0V7a1 1 0 0 0-.08-.38"/></svg>
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

          <p class="ciep-note">En caso excepcional, un aspirante puede aplicar sin contar con grado de maestría si el doctorado elegido contempla la modalidad de Doctorado directo. En ese caso debe cumplir los requisitos de maestría y doctorado, y contactar al coordinador para conocer los detalles.</p>
          <p class="ciep-note">La Comisión de Admisión del Posgrado revisará la información entregada y los resultados del proceso, dictaminando la admisión o rechazo del aspirante para su ratificación por el Comité Académico.</p>
        </div>
      </div>

      <div class="ciep-stage">
        <span class="ciep-stage-number">02</span>
        <div class="ciep-stage-body">
          <h2>Examen EXANI-III</h2>
          <p class="ciep-lead">El Examen Nacional de Ingreso al Posgrado (EXANI-III) se realiza a nivel nacional solo en cuatro fechas durante el año y requiere registro con mucha anticipación. Los trámites, registro y aplicación del examen son externos a los posgrados; es responsabilidad de cada aspirante llevarlos a cabo.</p>
        </div>
      </div>

      <div class="ciep-stage">
        <span class="ciep-stage-number">03</span>
        <div class="ciep-stage-body">
          <h2>Procedimiento para la admisión</h2>
          <p class="ciep-lead">El proceso puede realizarse en cualquier momento del año, aunque la solicitud y preinscripción deben realizarse a más tardar en junio y noviembre para contar con dictamen antes del inicio del semestre.</p>

          <div class="ciep-split">
            <div>
              <p class="ciep-flat-row-title">Etapa I</p>
              <ul class="ciep-checklist ciep-checklist--single">
                <?php foreach ($etapaUno as $item): ?>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                    <span><?= htmlspecialchars($item) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div>
              <p class="ciep-flat-row-title">Etapa II</p>
              <p class="ciep-note ciep-note--first">El candidato realiza su preinscripción en línea en tres pasos.</p>
              <div class="ciep-step-group mt-4">
                <div>
                  <p class="ciep-flat-row-title">Paso 1</p>
                  <p class="ciep-note ciep-note--first">Entrar al sitio de preinscripción y llenar los campos con la información solicitada.</p>
                </div>
                <div>
                  <p class="ciep-flat-row-title">Paso 2</p>
                  <p class="ciep-note ciep-note--first">Subir la documentación digital en formato PDF, excepto la fotografía en JPG. Puede realizarse en varias visitas.</p>
                </div>
                <div>
                  <p class="ciep-flat-row-title">Paso 3</p>
                  <p class="ciep-note ciep-note--first">Al concluir los pasos 1 y 2, se enviará al correo registrado la ficha de pago con la cuota de admisión vigente. Realizar el pago y subir el comprobante en el mismo sitio.</p>
                </div>
              </div>
            </div>
          </div>

          <p class="ciep-flat-row-title mt-4">Documentación de preinscripción</p>
          <ul class="ciep-checklist">
            <?php foreach ($documentos as $doc): ?>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                <span><?= htmlspecialchars($doc) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div class="ciep-stage">
        <span class="ciep-stage-number">04</span>
        <div class="ciep-stage-body">
          <h2>Evaluación por Comité de Admisión</h2>
          <ul class="ciep-checklist">
            <?php foreach ($etapaTres as $item): ?>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                <span><?= htmlspecialchars($item) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
          <p class="ciep-note">En caso de admisión, el acta describe los cursos y requisitos que formarán parte del plan de estudios que el candidato deberá aprobar y cumplir.</p>
        </div>
      </div>

      <div class="ciep-stage">
        <span class="ciep-stage-number">05</span>
        <div class="ciep-stage-body">
          <h2>Pasos posteriores, una vez admitido</h2>
          <p class="ciep-lead">En caso de ser admitido al posgrado, el aspirante puede proceder a realizar los trámites de inscripción como alumno, acorde al proceso descrito por cada programa.</p>
          <p class="ciep-note ciep-note--first">En caso de ser admitido y cumplir con las condiciones y requisitos impuestos por CONACYT, podrá postularse para una beca del CONACYT. Para ello es necesario haber concluido el proceso de inscripción al posgrado y haber entregado al coordinador su clave CVU y la documentación requerida para becarios, tal como se indica en la convocatoria de becas del CONACYT.</p>
          <p class="ciep-note">La postulación es responsabilidad del alumno y la autorización de becas depende del CONACYT. En general se otorgan becas para posgrados con dedicación de tiempo completo, acreditados en el PNPC o con registro en el SNP; el alumno debe contar con el grado anterior y el compromiso de dedicación de tiempo completo al programa. Los detalles y requisitos deben revisarse en la convocatoria vigente.</p>
        </div>
      </div>

    </div>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
