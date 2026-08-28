<?php
$pageTitle = 'Doctorado en Ciencias de la Computación';
$activeNav = 'doctorados';
$pageHeadEyebrow = 'Posgrado en Computación · Doctorado';
$pageHeadTitle = 'Doctorado en Ciencias de la Computación';
$programActive = 'resumen';

$stats = [
    ['value' => '8', 'label' => 'Semestres'],
    ['value' => '4 años', 'label' => 'Duración, tiempo completo'],
    ['value' => '3', 'label' => 'Líneas de investigación'],
    ['value' => '1', 'label' => 'Vía de titulación'],
];

$objetivos = [
    'Formar investigadores integrales e independientes, con alto compromiso social y con el medio ambiente, que realicen investigación de frontera y propongan soluciones innovadoras en la ciencia e ingeniería de la computación.',
    'Fortalecer la docencia en las Instituciones de Educación Superior con la formación de recursos humanos de alto nivel, con egresados reconocidos por el Sistema Nacional de Investigadores.',
    'Formar doctores capaces de trabajar de forma efectiva en grupos multidisciplinarios que promuevan la colaboración con instituciones educativas y los sectores privado y público.',
    'Desarrollar investigación multidisciplinaria con dependencias de educación superior dentro y fuera de la UASLP.',
    'Establecer vínculos con la sociedad para la solución de problemas prioritarios que enfrenta el país.',
];

$lineasResumen = [
    ['color' => 'ciep-track-blue', 'nombre' => 'Ingeniería de Software'],
    ['color' => 'ciep-track-purple', 'nombre' => 'Inteligencia Artificial y Ciberseguridad'],
    ['color' => 'ciep-track-teal', 'nombre' => 'Procesamiento de Señales, Sistemas Embebidos y Cómputo Científico'],
];

$titulacion = [
    'nombre' => 'Tesis',
    'desc' => 'Única opción de titulación. Debe estar asociada a un proyecto de investigación original que amplíe las fronteras del conocimiento y demuestre dominio de métodos de análisis y capacidad de síntesis. Se cursan los Seminarios de Avance de Tesis I-VIII. Para obtener el grado se requiere la publicación de al menos un artículo científico o tecnológico en una revista indexada en el JCR.',
];

$requisitos = [
    'Presentar título de licenciatura concluida en una carrera afín al programa',
    'Comprobante de grado de maestría reconocida en un área afín, con promedio general mínimo de 8.0 (estudiantes extranjeros: documentos apostillados, validados por el comité de admisión)',
    'Resultados vigentes del EXANI-III del CENEVAL: puntaje deseable de más de 1100 puntos',
    'Comprobante del dominio del idioma inglés (TOEFL o equivalente): puntaje deseable de 480 puntos',
    'Presentar examen psicométrico',
    'Desarrollar y presentar ante el Comité de Admisión un protocolo del proyecto de tesis',
];

$protocoloSecciones = [
    'Título',
    'Autores (aspirante y director propuesto)',
    'Resumen',
    'Introducción',
    'Estado del arte',
    'Objetivos generales y específicos',
    'Metodología',
    'Cronograma de actividades',
    'Referencias',
];

$fechas = [
    ['hito' => 'Fecha límite para subir documentación', 'fecha' => '22 de mayo'],
    ['hito' => 'Examen psicométrico', 'fecha' => 'Fecha por confirmar'],
    ['hito' => 'Envío del protocolo de investigación', 'fecha' => '1 de mayo al 5 de junio'],
    ['hito' => 'Defensa del protocolo de investigación', 'fecha' => '22 al 26 de junio'],
    ['hito' => 'Resultados de admisión', 'fecha' => '6 de julio'],
    ['hito' => 'Inicio de clases', 'fecha' => '31 de agosto'],
    ['hito' => 'Examen EXANI-III (presencial)', 'fecha' => 'Fechas proporcionadas por el CENEVAL'],
];

$fases = [
    [
        'nombre' => 'Fase 1 · Formación y avance',
        'semestres' => [
            ['numero' => 1, 'hito' => 'Seminario de Avance de Tesis I', 'tipo' => 'tesis'],
            ['numero' => 2, 'hito' => 'Seminario de Avance de Tesis II', 'tipo' => 'tesis'],
            ['numero' => 3, 'hito' => 'Seminario de Avance de Tesis III', 'tipo' => 'tesis'],
            ['numero' => 4, 'hito' => 'Seminario de Avance de Tesis IV', 'tipo' => 'tesis'],
        ],
        'notas' => [
            ['label' => 'Conceptualización', 'texto' => 'Cuatro cursos de énfasis (24 créditos) y desarrollo del proyecto de tesis.'],
            ['label' => 'Integración', 'texto' => 'Elaboración del documento de tesis doctoral.'],
        ],
        'hitoFinal' => [
            'nombre' => 'Examen de medio término',
            'desc' => 'Se presenta al cierre del 4º semestre. Evalúa el estado del arte, las posibles soluciones a la pregunta de investigación, el avance logrado y las habilidades de comunicación oral. El dictamen es Acreditado o No Acreditado; No Acreditado conduce a la baja del estudiante (RGEP, artículo 61, incisos c y d).',
        ],
    ],
    [
        'nombre' => 'Fase 2 · Cierre y grado',
        'semestres' => [
            ['numero' => 5, 'hito' => 'Seminario de Avance de Tesis V', 'tipo' => 'tesis'],
            ['numero' => 6, 'hito' => 'Seminario de Avance de Tesis VI', 'tipo' => 'tesis'],
            ['numero' => 7, 'hito' => 'Seminario de Avance de Tesis VII', 'tipo' => 'tesis'],
            ['numero' => 8, 'hito' => 'Examen Previo · Examen de Grado (130 créditos)', 'tipo' => 'fija'],
        ],
        'notas' => [
            ['label' => 'Conceptualización', 'texto' => 'Desarrollo del proyecto de tesis.'],
            ['label' => 'Integración', 'texto' => 'Elaboración del documento de tesis doctoral.'],
        ],
        'hitoFinal' => [
            'nombre' => 'Examen de grado',
            'desc' => 'Defensa de la tesis ante el jurado designado (RGEP, artículo 83), de forma plenaria y abierta al público. El veredicto es aprobado o no aprobado (Reglamento Interno de la Facultad, artículo 225); un trabajo de excelencia que cumpla el artículo 84 del RGEP puede recibir mención honorífica.',
        ],
    ],
];

$materiasEnfasis = [
    [
        'color' => 'ciep-track-blue',
        'tag' => 'ciep-tag--track-blue',
        'nombre' => 'Ingeniería de Software',
        'materias' => ['Interacción Humano Computadora', 'Bases de Datos', 'Tópicos de Bases de Datos', 'Calidad de Datos e Información', 'Ingeniería Ontológica', 'Cómputo Pervasivo', 'Fundamentos de Virtualización', 'Cómputo en la Nube', 'Ingeniería de Software', 'Sistemas de Información Geoespaciales', 'Programación Avanzada'],
    ],
    [
        'color' => 'ciep-track-purple',
        'tag' => 'ciep-tag--track-purple',
        'nombre' => 'Inteligencia Artificial y Ciberseguridad',
        'materias' => ['Aprendizaje Automático', 'Algoritmos para Optimización', 'Aprendizaje Profundo', 'Robots Móviles Inteligentes', 'Visión Computacional', 'Web Semántica', 'Inteligencia Artificial con Cómputo Paralelo', 'Ciencia de Datos', 'Criptografía Aplicada', 'Modelado y Simulación de Redes', 'Gestión de Seguridad Informática', 'Cómputo Distribuido', 'Hacking Ético', 'Autómatas y Lenguajes Formales', 'Privacidad con Aprendizaje Automático', 'Análisis y Diseño de Algoritmos'],
    ],
    [
        'color' => 'ciep-track-teal',
        'tag' => 'ciep-tag--track-teal',
        'nombre' => 'Procesamiento de Señales, Sistemas Embebidos y Cómputo Científico',
        'materias' => ['Diseño de Sistemas Embebidos', 'Diseño de Sistemas Heterogéneos', 'Diseño de Sistemas Reconfigurables', 'Instrumentación Virtual', 'Análisis y Procesamiento de Imágenes', 'Fundamentos de Criptografía', 'Diseño y Modelado de Sistemas Discretos y Continuos', 'Aplicaciones de Sistemas Discretos y Continuos', 'Procesamiento Digital de Señales', 'Tópicos del Internet de las Cosas', 'Redes de Sensores Inalámbricas', 'Cómputo de Alto Rendimiento', 'Matemáticas para la Computación'],
    ],
];

$lineasDetalle = [
    [
        'color' => 'ciep-track-blue',
        'nombre' => 'Ingeniería de Software',
        'desc' => 'Estudia y propone métodos y herramientas para el desarrollo de software confiable y de alta calidad mediante un enfoque sistemático, disciplinado y cuantificable. Cubre diseño, calidad, requisitos, construcción y métricas de software, educación en programación y temas emergentes como ingeniería de software cuántico.',
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

function ciep_doctorado_semester_grid(array $semestres): void
{
    ?>
    <div class="ciep-semester-grid">
      <?php foreach ($semestres as $semestre): ?>
        <div>
          <p class="ciep-semester-title">Semestre <?= (int) $semestre['numero'] ?></p>
          <div class="ciep-materia ciep-materia-<?= htmlspecialchars($semestre['tipo']) ?>">
            <span class="ciep-materia-name"><?= htmlspecialchars($semestre['hito']) ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php
}

include __DIR__ . '/includes/header.php';
?>

<main>
  <?php include __DIR__ . '/includes/pagehead.php'; ?>
  <?php include __DIR__ . '/includes/program-subnav.php'; ?>

  <div class="tab-content">

    <div class="tab-pane fade show active" id="pane-resumen" role="tabpanel" tabindex="0">
      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <p class="ciep-lead">El Doctorado en Ciencias de la Computación tiene como objetivo brindar una formación competitiva e innovadora a profesionales e investigadores que contribuyan a la generación y aplicación del conocimiento en la ciencia e ingeniería de la computación para la solución de problemas prioritarios que enfrenta el país.</p>
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
          <h2>Personal académico e investigación</h2>
          <p class="ciep-pullquote">El personal académico del posgrado está integrado por un grupo de profesionales multidisciplinario de alto nivel, que desarrolla investigación en las distintas líneas del programa. Las actividades de investigación se enmarcan en los Programas Nacionales Estratégicos (PRONACES).</p>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Objetivos particulares</h2>
          <ol class="ciep-ol">
            <?php foreach ($objetivos as $objetivo): ?>
              <li><?= htmlspecialchars($objetivo) ?></li>
            <?php endforeach; ?>
          </ol>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Titulación</h2>
          <p class="ciep-lead"><?= htmlspecialchars($titulacion['desc']) ?></p>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Registro y vinculación</h2>
          <p class="ciep-pullquote">El programa cuenta con registro vigente ante la Secretaría de Ciencia, Humanidades, Tecnología e Innovación (SECIHTI) para obtener becas en apoyo al estudio.</p>
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
              <h2>Proceso y requisitos</h2>
              <p class="ciep-lead">Semestral. El proceso de preinscripción se realiza en febrero y septiembre de cada año.</p>
              <p class="ciep-note ciep-note--first">El aspirante debe contar con una maestría en ingeniería de la computación o afín al iniciar el programa. Puede iniciar sus trámites sin contar aún con el grado, pero debe establecer la modalidad de titulación y fecha aproximada de obtención antes de ingresar al posgrado.</p>
              <p class="ciep-note">Es obligatorio dedicarse a tiempo completo al programa; no es recomendable combinarlo con otras actividades. Existen opciones para compaginar los estudios con trabajo afín al proyecto de investigación, previo acuerdo con el coordinador y el asesor de tesis.</p>
              <ol class="ciep-ol mt-4">
                <?php foreach ($requisitos as $req): ?>
                  <li><?= htmlspecialchars($req) ?></li>
                <?php endforeach; ?>
              </ol>
            </div>
          </div>

          <div class="ciep-stage">
            <span class="ciep-stage-number">02</span>
            <div class="ciep-stage-body">
              <h2>Propuesta de tesis</h2>
              <p class="ciep-lead">El aspirante debe contactar a un profesor del posgrado con afinidad en el tema y proponerlo como asesor, y entregar un documento escrito con la propuesta al menos 2 semanas antes de defenderla ante un comité de sinodales compuesto por profesores titulares del doctorado.</p>
              <div class="ciep-split">
                <div>
                  <h3>El protocolo debe incluir</h3>
                  <ol class="ciep-ol">
                    <?php foreach ($protocoloSecciones as $seccion): ?>
                      <li><?= htmlspecialchars($seccion) ?></li>
                    <?php endforeach; ?>
                  </ol>
                </div>
                <div>
                  <p class="ciep-note ciep-note--first">El Comité de Admisión y el coordinador emiten un acta con el dictamen de la evaluación. Si el candidato es aceptado, el acta incluye los cursos de énfasis iniciales; después se realiza la inscripción semestral y la firma de la carta de responsabilidades (artículo 54 del RGEP).</p>
                </div>
              </div>
            </div>
          </div>

          <div class="ciep-stage">
            <span class="ciep-stage-number">03</span>
            <div class="ciep-stage-body">
              <h2>Fechas importantes, ciclo 2026</h2>
              <p class="ciep-lead">El proceso de ingreso se puede iniciar en cualquier momento del año, pero el registro oficial y la preinscripción solo se realizan en febrero y septiembre.</p>
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
          <p class="ciep-lead">El programa está compuesto por 8 periodos semestrales (4 años con dedicación de tiempo completo). Es posible titularse antes o después del periodo nominal, según el cumplimiento de los requisitos. La actividad académica principal es un proyecto de investigación de tesis, cuya presentación y defensa es obligatoria para obtener el grado.</p>
        </div>
      </section>

      <?php foreach ($fases as $fase): ?>
        <section class="ciep-program-section">
          <div class="container-fluid px-lg-2">
            <h2><?= htmlspecialchars($fase['nombre']) ?></h2>
            <div class="ciep-legend">
              <span class="ciep-legend-item"><span class="ciep-legend-swatch ciep-legend-tesis"></span>Seminario de avance de tesis</span>
              <span class="ciep-legend-item"><span class="ciep-legend-swatch ciep-legend-fija"></span>Examen</span>
            </div>
            <?php ciep_doctorado_semester_grid($fase['semestres']); ?>

            <dl class="ciep-phase-notes">
              <?php foreach ($fase['notas'] as $nota): ?>
                <div>
                  <dt><?= htmlspecialchars($nota['label']) ?></dt>
                  <dd><?= htmlspecialchars($nota['texto']) ?></dd>
                </div>
              <?php endforeach; ?>
            </dl>

            <div class="ciep-phase-hito">
              <h3><?= htmlspecialchars($fase['hitoFinal']['nombre']) ?></h3>
              <p><?= htmlspecialchars($fase['hitoFinal']['desc']) ?></p>
            </div>
          </div>
        </section>
      <?php endforeach; ?>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Titulación</h2>
          <p class="ciep-lead"><?= htmlspecialchars($titulacion['desc']) ?></p>
          <p class="ciep-note">Existe una materia opcional, Metodología de la Investigación, para reforzar la formación investigativa. El programa también admite Temas Selectos en Computación cuando no exista una materia en el catálogo de las líneas de investigación, y materias de movilidad cursadas en otro posgrado de la Facultad o en otra institución.</p>
        </div>
      </section>

      <section class="ciep-program-section">
        <div class="container-fluid px-lg-2">
          <h2>Materias de énfasis por línea de investigación</h2>
          <p class="ciep-lead">Los cursos de énfasis se eligen de acuerdo al trabajo de investigación del estudiante y se sugieren por el Comité Tutorial.</p>

          <div class="ciep-track-groups">
            <?php foreach ($materiasEnfasis as $grupo): ?>
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
            Los profesores expertos en el ámbito de las ciencias e ingeniería de la computación que forman parte del personal académico del posgrado se pueden encontrar en la página de
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

<?php include __DIR__ . '/includes/footer.php'; ?>
