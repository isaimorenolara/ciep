<?php
if (!isset($programTabs)) {
    $programTabs = [
        ['key' => 'resumen', 'label' => 'Resumen'],
        ['key' => 'admision', 'label' => 'Admisión'],
        ['key' => 'plan', 'label' => 'Plan de estudios'],
        ['key' => 'lineas', 'label' => 'Líneas de investigación'],
    ];
}
if (!isset($programActive)) {
    $programActive = $programTabs[0]['key'];
}
?>
<div class="ciep-program-tabs">
  <div class="container-fluid px-lg-2">
    <ul class="nav nav-tabs" role="tablist">
      <?php foreach ($programTabs as $tab): ?>
        <?php $isActive = $tab['key'] === $programActive; ?>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link<?= $isActive ? ' active' : '' ?>"
            id="tab-<?= htmlspecialchars($tab['key']) ?>"
            data-bs-toggle="tab"
            data-bs-target="#pane-<?= htmlspecialchars($tab['key']) ?>"
            type="button"
            role="tab"
            aria-controls="pane-<?= htmlspecialchars($tab['key']) ?>"
            aria-selected="<?= $isActive ? 'true' : 'false' ?>"
          ><?= htmlspecialchars($tab['label']) ?></button>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
