<?php
if (!isset($pageHeadEyebrow)) {
    $pageHeadEyebrow = 'UASLP · CIEP';
}
if (!isset($pageHeadTitle)) {
    $pageHeadTitle = $pageTitle ?? '';
}
?>
<section class="ciep-pagehead">
  <div class="container-fluid px-lg-2">
    <p class="ciep-pagehead-eyebrow"><?= htmlspecialchars($pageHeadEyebrow) ?></p>
    <h1 class="ciep-pagehead-title"><?= htmlspecialchars($pageHeadTitle) ?></h1>
  </div>
</section>
