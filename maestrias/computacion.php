<?php
$pageTitle = 'Maestría en Ingeniería de la Computación';
$activeNav = 'maestrias';
$pageHeadEyebrow = 'Posgrado en Computación · Maestría';
$pageHeadTitle = 'Maestría en Ingeniería de la Computación';
$programActive = 'resumen';

$stats = [
    ['value' => '2 años', 'label' => 'Tiempo completo'],
    ['value' => '4 años', 'label' => 'Medio tiempo'],
    ['value' => '2', 'label' => 'Modalidades de estudio'],
    ['value' => '3', 'label' => 'Vías de titulación'],
];

$titulacion = ['Tesis', 'Artículo', 'Proyecto de desarrollo tecnológico'];

$lineasResumen = [
    ['color' => 'ciep-track-blue', 'nombre' => 'Ingeniería de Software'],
    ['color' => 'ciep-track-purple', 'nombre' => 'Inteligencia Artificial y Ciberseguridad'],
    ['color' => 'ciep-track-teal', 'nombre' => 'Procesamiento de Señales, Sistemas Embebidos y Cómputo Científico'],
];

$perfil = [
    'Licenciatura en ingeniería en computación o afín',
    'Habilidades de programación en al menos un lenguaje de programación de uso actual',
    'Conocimientos de al menos un manejador de bases de datos',
    'Razonamiento lógico-matemático',
    'Habilidades para escribir reportes técnicos',
    'Conocimiento del idioma inglés',
    'Disciplina de trabajo y organización de su tiempo',
    'Ser autodidacta, crítico y autocrítico',
    'Ser resiliente y tolerante al trabajo bajo presión',
    'Deseos de superación',
];

$requisitos = [
    'Presentar título de licenciatura o carta de pasantía (obtener título en un lapso no mayor a 6 meses de iniciada la maestría)',
    'Comprobante del dominio del idioma inglés: puntaje deseable de 450 puntos TOEFL o equivalente, o certificado de aprobación de los cinco niveles del DUI de la UASLP. Para doble titulación se requiere nivel B2',
    'Resultados vigentes (hasta 2 años de antigüedad) del EXANI-III del CENEVAL: puntaje promedio deseable de más de 1000 puntos',
    'Presentar examen psicométrico',
    'Aprobación del examen de conocimientos aplicado por el programa de posgrado',
    'Entrevista con el Comité de Admisión del posgrado',
];

$materiasExamen = ['Análisis y Diseño de Algoritmos', 'Programación Orientada a Objetos', 'Matemáticas para la Computación'];

$fechas = [
    ['hito' => 'Fecha límite para subir documentación', 'fecha' => '22 de mayo'],
    ['hito' => 'Cursos propedéuticos (presenciales)', 'fecha' => '1 al 24 de junio'],
    ['hito' => 'Examen psicométrico', 'fecha' => 'Fecha por confirmar'],
    ['hito' => 'Examen EXANI-III (presencial)', 'fecha' => 'Fechas proporcionadas por el CENEVAL'],
    ['hito' => 'Examen de admisión', 'fecha' => '26 de junio'],
    ['hito' => 'Entrevistas', 'fecha' => '29 y 30 de junio'],
    ['hito' => 'Publicación de resultados', 'fecha' => '6 de julio'],
    ['hito' => 'Inicio de clases', 'fecha' => '31 de agosto'],
];

$semestresCompleto = [
    1 => [
        ['nombre' => 'Matemáticas para la Computación', 'creditos' => 6, 'tipo' => 'fija'],
        ['nombre' => 'Análisis y Diseño de Algoritmos', 'creditos' => 6, 'tipo' => 'fija'],
        ['nombre' => 'Programación Avanzada', 'creditos' => 6, 'tipo' => 'fija'],
        ['nombre' => 'Metodología de la Investigación', 'creditos' => 6, 'tipo' => 'fija'],
        ['nombre' => 'Seminario de Investigación', 'creditos' => 1, 'tipo' => 'fija'],
    ],
    2 => [
        ['nombre' => 'Materia Complementaria I', 'creditos' => 6, 'tipo' => 'electiva'],
        ['nombre' => 'Materia Complementaria II', 'creditos' => 6, 'tipo' => 'electiva'],
        ['nombre' => 'Materia Complementaria III', 'creditos' => 6, 'tipo' => 'electiva'],
        ['nombre' => 'Seminario de Tesis I', 'creditos' => 0, 'tipo' => 'tesis'],
    ],
    3 => [
        ['nombre' => 'Materia Complementaria IV', 'creditos' => 6, 'tipo' => 'electiva'],
        ['nombre' => 'Materia Complementaria V', 'creditos' => 6, 'tipo' => 'electiva'],
        ['nombre' => 'Seminario de Tesis II', 'creditos' => 0, 'tipo' => 'tesis'],
    ],
    4 => [
        ['nombre' => 'Seminario de Tesis III', 'creditos' => 0, 'tipo' => 'tesis'],
        ['nombre' => 'Tesis, Artículo o Reporte Técnico, Exámenes Previo y de Grado', 'creditos' => 20, 'tipo' => 'tesis'],
    ],
];

$semestresMedio = [
    1 => [
        ['nombre' => 'Matemáticas para la Computación', 'creditos' => 6, 'tipo' => 'fija'],
        ['nombre' => 'Programación Avanzada', 'creditos' => 6, 'tipo' => 'fija'],
        ['nombre' => 'Seminario de Investigación', 'creditos' => 1, 'tipo' => 'fija'],
    ],
    2 => [
        ['nombre' => 'Materia Complementaria I', 'creditos' => 6, 'tipo' => 'electiva'],
        ['nombre' => 'Materia Complementaria II', 'creditos' => 6, 'tipo' => 'electiva'],
    ],
    3 => [
        ['nombre' => 'Análisis y Diseño de Algoritmos', 'creditos' => 6, 'tipo' => 'fija'],
        ['nombre' => 'Metodología de la Investigación', 'creditos' => 6, 'tipo' => 'fija'],
        ['nombre' => 'Seminario de Tesis I', 'creditos' => 0, 'tipo' => 'tesis'],
    ],
    4 => [
        ['nombre' => 'Materia Complementaria III', 'creditos' => 6, 'tipo' => 'electiva'],
    ],
    5 => [
        ['nombre' => 'Materia Complementaria IV', 'creditos' => 6, 'tipo' => 'electiva'],
        ['nombre' => 'Seminario de Tesis II', 'creditos' => 0, 'tipo' => 'tesis'],
    ],
    6 => [
        ['nombre' => 'Materia Complementaria V', 'creditos' => 6, 'tipo' => 'electiva'],
    ],
    7 => [
        ['nombre' => 'Seminario de Tesis III', 'creditos' => 0, 'tipo' => 'tesis'],
    ],
    8 => [
        ['nombre' => 'Tesis, Artículo o Desarrollo Tecnológico, Exámenes Previo y de Grado', 'creditos' => 20, 'tipo' => 'tesis'],
    ],
];

$titulacionOpciones = [
    ['nombre' => 'Tesis', 'desc' => 'Elaboración de un documento de tesis.'],
    ['nombre' => 'Artículo', 'desc' => 'Publicación de un artículo de congreso internacional o de revista indexada.'],
    ['nombre' => 'Reporte técnico', 'desc' => 'Reporte técnico de un desarrollo tecnológico avalado por una institución o empresa pública o privada.'],
];

$materiasPorLinea = [
    [
        'color' => 'ciep-track-blue',
        'tag' => 'ciep-tag--track-blue',
        'nombre' => 'Ingeniería de Software',
        'materias' => ['Interacción Humano Computadora', 'Bases de Datos', 'Tópicos de Bases de Datos', 'Calidad de Datos e Información', 'Ingeniería Ontológica', 'Cómputo Pervasivo', 'Fundamentos de Virtualización', 'Cómputo en la Nube', 'Ingeniería de Software', 'Sistemas de Información Geoespaciales'],
    ],
    [
        'color' => 'ciep-track-purple',
        'tag' => 'ciep-tag--track-purple',
        'nombre' => 'Inteligencia Artificial y Ciberseguridad',
        'materias' => ['Aprendizaje Automático', 'Algoritmos para Optimización', 'Aprendizaje Profundo', 'Robots Móviles Inteligentes', 'Visión Computacional', 'Web Semántica', 'Inteligencia Artificial con Cómputo Paralelo', 'Ciencia de Datos', 'Criptografía Aplicada', 'Modelado y Simulación de Redes', 'Gestión de Seguridad Informática', 'Cómputo Distribuido', 'Hacking Ético', 'Autómatas y Lenguajes Formales', 'Privacidad con Aprendizaje Automático'],
    ],
    [
        'color' => 'ciep-track-teal',
        'tag' => 'ciep-tag--track-teal',
        'nombre' => 'Procesamiento de Señales, Sistemas Embebidos y Cómputo Científico',
        'materias' => ['Diseño de Sistemas Embebidos', 'Diseño de Sistemas Heterogéneos', 'Diseño de Sistemas Reconfigurables', 'Instrumentación Virtual', 'Análisis y Procesamiento de Imágenes', 'Fundamentos de Criptografía', 'Diseño y Modelado de Sistemas Discretos y Continuos', 'Aplicaciones de Sistemas Discretos y Continuos', 'Procesamiento Digital de Señales', 'Tópicos del Internet de las Cosas', 'Redes de Sensoras Inalámbricas', 'Cómputo de Alto Rendimiento'],
    ],
];

$lineasDetalle = [
    [
        'color' => 'ciep-track-blue',
        'nombre' => 'Ingeniería de Software',
        'desc' => 'Métodos y herramientas para desarrollar software confiable y de alta calidad, con un enfoque sistemático y disciplinado. Cubre diseño, calidad, requisitos, construcción y métricas de software, además de educación en programación y temas emergentes como ingeniería de software cuántico.',
    ],
    [
        'color' => 'ciep-track-purple',
        'nombre' => 'Inteligencia Artificial y Ciberseguridad',
        'desc' => 'Sistemas inteligentes y entornos seguros. Sistemas inteligentes desarrolla modelos que replican la inteligencia: robótica, aprendizaje automático, algoritmos evolutivos, visión por computadora y redes neuronales. Ciberseguridad aporta en comunicación anónima, análisis forense y algoritmos distribuidos.',
    ],
    [
        'color' => 'ciep-track-teal',
        'nombre' => 'Procesamiento de Señales, Sistemas Embebidos y Cómputo Científico',
        'desc' => 'Investigación aplicada a salud, cambio climático y seguridad. Procesamiento digital de señales analiza variables físicas en el tiempo; sistemas embebidos resuelven tareas en tiempo real con recursos limitados; cómputo científico modela problemas matemáticos y criptográficos.',
    ],
];

function ciep_semester_grid(array $semestres): void
{
    ?>
    <div class="ciep-semester-grid">
      <?php foreach ($semestres as $numero => $materias): ?>
        <div>
          <p class="ciep-semester-title">Semestre <?= (int) $numero ?></p>
          <?php foreach ($materias as $materia): ?>
            <div class="ciep-materia ciep-materia-<?= htmlspecialchars($materia['tipo']) ?>">
              <span class="ciep-materia-name"><?= htmlspecialchars($materia['nombre']) ?></span>
              <span class="ciep-materia-credits"><?= (int) $materia['creditos'] ?> créditos<?= $materia['tipo'] === 'electiva' ? ' (electiva)' : '' ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
    <?php
}

include __DIR__ . '/../includes/header.php';
?>

<main>
  <?php include __DIR__ . '/../includes/pagehead.php'; ?>
  <?php include __DIR__ . '/../includes/program-subnav.php'; ?>

  <div class="tab-content">

    <div class="tab-pane fade show active" id="pane-resumen" role="tabpanel" tabindex="0">
      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <p class="ciep-lead">La Maestría en Ingeniería de la Computación es un programa académico para aquellas personas que desean profundizar en temas de las ciencias de la computación.</p>
        </div>
      </section>

      <section class="container-fluid px-lg-2">
        <div class="ciep-stat-strip">
          <?php foreach ($stats as $stat): ?>
            <div class="ciep-stat">
              <span class="ciep-stat-value"><?= htmlspecialchars($stat['value']) ?></span>
              <span class="ciep-stat-label"><?= htmlspecialchars($stat['label']) ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Misión del programa</h2>
          <p class="ciep-pullquote">Brindar una formación competitiva e innovadora a profesionales e investigadores en la ciencia e ingeniería de la computación, que contribuyan a la generación y aplicación de conocimientos de frontera para la solución de problemas prioritarios, de los diversos sectores, que enfrenta el país.</p>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Opciones de titulación</h2>
          <ul class="ciep-tag-list">
            <?php foreach ($titulacion as $opcion): ?>
              <li class="ciep-tag"><?= htmlspecialchars($opcion) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Doble titulación con la UPPA, Francia</h2>
          <p class="ciep-lead">Doble Titulación con la Maestría en Industria 4.0 de la Universidad de Pau y los Países del Adour (UPPA), Francia. Primer año en la UASLP, segundo año en la UPPA con estancia de investigación en un proyecto académico o industrial.</p>
          <a class="ciep-inline-link" href="https://formation.univ-pau.fr/en/programs/science-technology-health-STS/master-degree-XB/master-computer-science-L7EMC9TO/m2-industry-4-0-L7EMCSH1.html" target="_blank" rel="noopener">
            Ver programa en la UPPA
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><path d="M7 17 17 7M7 7h10v10"/></svg>
          </a>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <div class="ciep-section-head">
            <h2>Líneas de investigación</h2>
            <a class="ciep-inline-link" href="#pane-lineas" data-tab-jump="pane-lineas">
              Ver detalle
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
            </a>
          </div>
          <ul class="ciep-track-list">
            <?php foreach ($lineasResumen as $linea): ?>
              <li class="ciep-track-item">
                <span class="ciep-track-dot <?= htmlspecialchars($linea['color']) ?>" aria-hidden="true"></span>
                <?= htmlspecialchars($linea['nombre']) ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Contacto</h2>
          <dl class="ciep-deflist">
            <div>
              <dt>Correo</dt>
              <dd><a href="mailto:posgrado.computacion@ing.uaslp.mx">posgrado.computacion@ing.uaslp.mx</a></dd>
            </div>
            <div>
              <dt>Teléfono</dt>
              <dd><a href="tel:+524448262300,6153">52 (444) 826 23 00 ext. 6153</a></dd>
            </div>
            <div>
              <dt>Ubicación</dt>
              <dd>Dr. Manuel Nava No. 8, Col. Zona Universitaria Poniente, C.P. 78290, San Luis Potosí, S.L.P., México</dd>
            </div>
          </dl>

          <div class="ciep-icon-links">
            <a href="https://www.facebook.com/posgrado.computacion.uaslp" target="_blank" rel="noopener" aria-label="Facebook del Posgrado en Computación">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M2.002 12.002a10.005 10.005 0 0 0 8.437 9.879v-6.989H7.902v-2.89h2.54v-2.2a3.528 3.528 0 0 1 3.773-3.9c.75.012 1.5.079 2.24.2v2.459h-1.264a1.446 1.446 0 0 0-1.628 1.563v1.878h2.771l-.443 2.891h-2.328v6.988a10 10 0 1 0-11.561-9.879Z"/></svg>
            </a>
            <a href="https://www.instagram.com/posgrado.computacion.uaslp/" target="_blank" rel="noopener" aria-label="Instagram del Posgrado en Computación">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/posgrado-en-computaci%C3%B3n-uaslp-205690397/" target="_blank" rel="noopener" aria-label="LinkedIn del Posgrado en Computación">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M6.94 8.5H3.56V20h3.38V8.5ZM5.25 3a1.95 1.95 0 1 0 0 3.9 1.95 1.95 0 0 0 0-3.9ZM20.44 20h-3.37v-5.6c0-1.34-.03-3.06-1.87-3.06-1.87 0-2.16 1.46-2.16 2.96V20H9.68V8.5h3.24v1.57h.05c.45-.85 1.56-1.75 3.21-1.75 3.43 0 4.06 2.26 4.06 5.2V20Z"/></svg>
            </a>
            <a href="https://www.youtube.com/@posgrado_computacionuaslp2872" target="_blank" rel="noopener" aria-label="YouTube del Posgrado en Computación">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M17.845 4.924H6.155A4.155 4.155 0 0 0 2 9.078v5.845a4.155 4.155 0 0 0 4.155 4.153h11.69A4.155 4.155 0 0 0 22 14.922V9.078a4.155 4.155 0 0 0-4.155-4.153Zm-2.809 7.361-5.468 2.608a.218.218 0 0 1-.314-.198v-5.38a.22.22 0 0 1 .319-.196l5.469 2.771a.22.22 0 0 1-.005.395Z"/></svg>
            </a>
          </div>
        </div>
      </section>
    </div>

    <div class="tab-pane fade" id="pane-admision" role="tabpanel" tabindex="0">
      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">

          <div class="ciep-stage">
            <span class="ciep-stage-number">01</span>
            <div class="ciep-stage-body">
              <h2>Perfil de ingreso</h2>
              <ul class="ciep-checklist">
                <?php foreach ($perfil as $item): ?>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                    <span><?= htmlspecialchars($item) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <div class="ciep-stage">
            <span class="ciep-stage-number">02</span>
            <div class="ciep-stage-body">
              <h2>Proceso y modalidades</h2>
              <p class="ciep-lead">Anual. El proceso de preinscripción inicia en febrero de cada año, con entrega de documentación y presentación del examen EXANI-III; en junio se realiza el examen de admisión y las entrevistas.</p>

              <div class="ciep-modality-list">
                <div class="ciep-flat-row">
                  <div class="ciep-flat-row-who">
                    <span class="ciep-flat-badge">A</span>
                    <div>
                      <span class="ciep-flat-row-title">Tiempo Completo</span><br>
                      <span class="ciep-flat-row-desc">Con posibilidad de postularse a beca de la Secihti y acceder al programa de doble titulación.</span>
                    </div>
                  </div>
                </div>
                <div class="ciep-flat-row">
                  <div class="ciep-flat-row-who">
                    <span class="ciep-flat-badge">B</span>
                    <div>
                      <span class="ciep-flat-row-title">Medio Tiempo</span><br>
                      <span class="ciep-flat-row-desc">Modalidad de medio tiempo, sin doble titulación.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ciep-stage">
            <span class="ciep-stage-number">03</span>
            <div class="ciep-stage-body">
              <h2>Requisitos y cursos propedéuticos</h2>
              <div class="ciep-split">
                <ol class="ciep-ol">
                  <?php foreach ($requisitos as $req): ?>
                    <li><?= htmlspecialchars($req) ?></li>
                  <?php endforeach; ?>
                </ol>
                <div>
                  <p class="ciep-note ciep-note--first">Se recomienda que el aspirante utilice la opción de cursos propedéuticos para conocer la forma y ritmo de trabajo del Posgrado en Computación. Si la licenciatura de origen no es afín a la ingeniería en computación, los cursos propedéuticos son obligatorios.</p>
                  <ul class="ciep-tag-list">
                    <?php foreach ($materiasExamen as $materia): ?>
                      <li class="ciep-tag"><?= htmlspecialchars($materia) ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="ciep-stage">
            <span class="ciep-stage-number">04</span>
            <div class="ciep-stage-body">
              <h2>Fechas importantes, ciclo 2026</h2>
              <div>
                <?php foreach ($fechas as $f): ?>
                  <div class="ciep-flat-row">
                    <span class="ciep-flat-row-title"><?= htmlspecialchars($f['hito']) ?></span>
                    <span class="ciep-flat-row-value"><?= htmlspecialchars($f['fecha']) ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>

    <div class="tab-pane fade" id="pane-plan" role="tabpanel" tabindex="0">
      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <p class="ciep-lead">El programa está compuesto por cuatro semestres (dos años) para el alumno de tiempo completo. Para el alumno de medio tiempo son ocho semestres (cuatro años), lo que implica que la carga de materias y dedicación al trabajo terminal corresponde a la mitad de la modalidad de tiempo completo.</p>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <div class="ciep-section-head ciep-section-head--tabs">
            <h2>Semestres</h2>
            <div class="t-tabs" role="tablist">
              <span class="t-tabs-pill" aria-hidden="true"></span>
              <button type="button" class="t-tab" role="tab" aria-selected="true" aria-controls="panel-completo">Tiempo completo</button>
              <button type="button" class="t-tab" role="tab" aria-selected="false" aria-controls="panel-medio">Medio tiempo</button>
            </div>
          </div>

          <div class="ciep-legend">
            <span class="ciep-legend-item"><span class="ciep-legend-swatch ciep-legend-fija"></span>Materia fija</span>
            <span class="ciep-legend-item"><span class="ciep-legend-swatch ciep-legend-electiva"></span>Complementaria (optativa)</span>
            <span class="ciep-legend-item"><span class="ciep-legend-swatch ciep-legend-tesis"></span>Tesis / seminario</span>
          </div>

          <div class="ciep-plan-panels">
            <div id="panel-completo" class="ciep-plan-panel is-active">
              <?php ciep_semester_grid($semestresCompleto); ?>
              <div class="ciep-credits-total">
                <span class="ciep-credits-value">75</span>
                <span class="ciep-credits-label">créditos mínimos para obtener el grado de maestría</span>
              </div>

              <div class="ciep-uppa-note">
                <p class="ciep-note ciep-note--first">Los alumnos de tiempo completo que opten por la doble titulación con la Maestría en Industria 4.0 de la UPPA, Francia, deben hacer el trámite de ingreso y, en su caso, solicitar beca de la UPPA a la mitad del primer semestre.</p>
                <p class="ciep-note">Una vez aceptados, continúan sus actividades académicas del segundo año en la UPPA, con o sin beca; el estudiante puede optar por continuar con recursos propios.</p>
                <p class="ciep-note">Por el convenio interinstitucional UASLP-UPPA, las materias cursadas en la Maestría en Industria 4.0 durante el segundo año se revalidan y completan los créditos de los semestres 3 y 4 como materias de movilidad.</p>
              </div>
            </div>

            <div id="panel-medio" class="ciep-plan-panel">
              <?php ciep_semester_grid($semestresMedio); ?>
              <div class="ciep-credits-total">
                <span class="ciep-credits-value">75</span>
                <span class="ciep-credits-label">créditos mínimos para obtener el grado de maestría</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Opciones de titulación</h2>
          <div class="ciep-option-grid">
            <?php foreach ($titulacionOpciones as $op): ?>
              <div class="ciep-option">
                <h3><?= htmlspecialchars($op['nombre']) ?></h3>
                <p><?= htmlspecialchars($op['desc']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <p class="ciep-note">Las tres opciones implican la misma carga de trabajo. El avance se evalúa a partir del segundo semestre en los Seminarios de Avance de Tesis I-III.</p>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Materias complementarias por línea de investigación</h2>
          <p class="ciep-lead">Los cursos complementarios se eligen de acuerdo al trabajo terminal del estudiante y se sugieren por el Comité Tutorial.</p>

          <div class="ciep-track-groups">
            <?php foreach ($materiasPorLinea as $grupo): ?>
              <div class="ciep-track-group">
                <p class="ciep-track-group-title <?= htmlspecialchars($grupo['color']) ?>-text"><?= htmlspecialchars($grupo['nombre']) ?></p>
                <ul class="ciep-tag-list">
                  <?php foreach ($grupo['materias'] as $materia): ?>
                    <li class="ciep-tag <?= htmlspecialchars($grupo['tag']) ?>"><?= htmlspecialchars($materia) ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    </div>

    <div class="tab-pane fade" id="pane-lineas" role="tabpanel" tabindex="0">
      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <p class="ciep-lead">El posgrado en Computación cuenta con las siguientes líneas de investigación.</p>

          <div class="ciep-numbered-block-group">
            <?php foreach ($lineasDetalle as $i => $linea): ?>
              <div class="ciep-numbered-block <?= htmlspecialchars($linea['color']) ?>">
                <span class="ciep-stage-number"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
                <h2><?= htmlspecialchars($linea['nombre']) ?></h2>
                <p><?= htmlspecialchars($linea['desc']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>

          <p class="ciep-note">
            Los profesores expertos en el ámbito de las ciencias e ingeniería de la computación que forman parte del personal académico de la maestría se pueden encontrar en la página de
            <a class="ciep-inline-link" href="https://www.ingenieria.uaslp.mx/ciep/Paginas/Investigacion/206" target="_blank" rel="noopener">
              Investigadores
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><path d="M7 17 17 7M7 7h10v10"/></svg>
            </a>.
          </p>
        </div>
      </section>
    </div>

  </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
