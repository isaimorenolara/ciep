<div class="ciep-footer-ribbon"></div>
<footer class="ciep-footer">
  <div class="container-fluid px-lg-5">
    <div class="ciep-footer-row">
      <div class="ciep-footer-id">
        <span class="ciep-footer-meta">Dr. Manuel Nava No. 8, Col. Zona Universitaria Poniente, C.P. 78290, San Luis Potosí, S.L.P., México · (444) 8-26-23-00 Ext. 6254</span>
      </div>

      <nav class="ciep-footer-links" aria-label="Navegación del pie de página">
        <a href="index.php">Inicio</a>
        <a href="#">CIEP</a>
        <a href="maestria-computacion.php">Maestrías</a>
        <a href="doctorado-computacion.php">Doctorados</a>
        <a href="#">Investigación</a>
        <a href="#">Admisión</a>
        <a href="contacto.php">Contactos</a>
      </nav>

      <div class="ciep-footer-social">
        <a href="#" aria-label="Facebook del CIEP">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M2.002 12.002a10.005 10.005 0 0 0 8.437 9.879v-6.989H7.902v-2.89h2.54v-2.2a3.528 3.528 0 0 1 3.773-3.9c.75.012 1.5.079 2.24.2v2.459h-1.264a1.446 1.446 0 0 0-1.628 1.563v1.878h2.771l-.443 2.891h-2.328v6.988a10 10 0 1 0-11.561-9.879Z"/></svg>
        </a>
        <a href="#" aria-label="YouTube del CIEP">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M17.845 4.924H6.155A4.155 4.155 0 0 0 2 9.078v5.845a4.155 4.155 0 0 0 4.155 4.153h11.69A4.155 4.155 0 0 0 22 14.922V9.078a4.155 4.155 0 0 0-4.155-4.153Zm-2.809 7.361-5.468 2.608a.218.218 0 0 1-.314-.198v-5.38a.22.22 0 0 1 .319-.196l5.469 2.771a.22.22 0 0 1-.005.395Z"/></svg>
        </a>
      </div>
    </div>

    <div class="ciep-footer-bottom">
      &copy; <?= date('Y') ?> Todos los derechos reservados. CIEP · Facultad de Ingeniería · UASLP
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/site.js"></script>
<?php if (!empty($extraScripts)) { echo $extraScripts; } ?>
</body>
</html>
