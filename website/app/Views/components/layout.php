<!doctype html>
<html lang="en">

<?= $this->include('components/head') ?>

<body>

  <?= $this->include('components/preloader') ?>

  <?= $this->include('components/menu') ?>

  <?= $this->renderSection('content') ?>

  <?= $this->include('components/footer') ?>

  <!-- Back to top -->
  <a class="scrolltop" href="#top"><i class="icofont-hand-drawn-up"></i></a>
  <!-- End Back to top -->

  <?= $this->include('components/script') ?>
</body>

</html>
