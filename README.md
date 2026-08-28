# CIEP-FI · Sitio institucional

Sitio web del **Centro de Investigación y Estudios de Posgrado de la Facultad de Ingeniería (CIEP-FI)**, UASLP.

La información (textos, programas, contactos, requisitos de admisión) se ha ido tomando de los snapshots del [Wayback Machine](https://web.archive.org/) del sitio original: [https://www.ingenieria.uaslp.mx/ciep](https://www.ingenieria.uaslp.mx/ciep).

## Stack

- PHP puro (sin framework), includes compartidos para header/footer/pagehead.
- Bootstrap 5.3.8 vía CDN (jsDelivr).
- Identidad visual real del CIEP: navy `#014a98` / cyan `#00b2e3` / gris `#d8d8d8`, tipografía del sistema, sin sombras ni glassmorphism.

## Estructura del proyecto

```
ciep-php/
├── index.php                    Inicio
├── contacto.php                 Ubicación, mapa y directorio
├── ciep/
│   ├── acerca.php               Acerca del CIEP
│   ├── formatos.php             Formatos CIEP-FI-XX por trámite (ingreso, tesis, examen, propiedad intelectual)
│   └── normativa.php            Reglamentos, políticas y lineamientos
├── maestrias/
│   └── computacion.php          Maestría en Ing. de la Computación
├── doctorados/
│   └── computacion.php          Doctorado en Ciencias de la Computación
├── admision/
│   ├── maestrias.php            Admisión a las Maestrías
│   ├── doctorados.php           Admisión a los Doctorados
│   ├── exani.php                Información sobre el EXANI-III
│   └── cuotas.php               Tabla de cuotas y notas al pie
├── includes/
│   ├── header.php               Utilidad + masthead + tabs + panel móvil (nav en $ciepNav)
│   ├── footer.php
│   ├── pagehead.php             Encabezado plano reutilizable (páginas sin foto)
│   └── program-subnav.php       Sub-nav de 4 tabs (Resumen/Admisión/Plan/Líneas)
└── assets/
    ├── css/style.css
    ├── js/site.js                Menú móvil, acordeones, tabs deslizantes
    └── img/
```

Cada tab del nav con submenú (CIEP, Maestrías, Doctorados, Admisión) tiene su propia carpeta; las páginas sin submenú (Inicio, Contactos) quedan en la raíz. Todos los enlaces y rutas de `assets/` son absolutos desde la raíz del sitio (`/assets/...`, `/admision/exani.php`, etc.) — el proyecto asume que se sirve desde la raíz del dominio o vhost, no desde una subcarpeta.

Algunos ítems del nav apuntan a sistemas externos del CIEP en vez de a una página del sitio: Intranet, Preinscripción e Inscripción de materias (bajo Admisión) van directo a `ciep.ing.uaslp.mx`.

## Pendientes

Varios ítems del menú (Agenda de actividades, Investigación, algunos programas de Maestría/Doctorado, etc.) todavía no tienen página — aparecen deshabilitados como "Próximamente" en el nav hasta que haya contenido real que migrar del sitio archivado. Los formatos de `ciep/formatos.php` y los documentos de `ciep/normativa.php` están listados pero sin enlace de descarga todavía (`href="#"`).
