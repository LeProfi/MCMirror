<?php
$title = "Home";
require("templates/header.php");
?>

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/LeProfi.png" alt="" width="82" height="82">
    <h1 class="display-5 fw-bold">MCMirror</h1>
    <h4 class="text-muted">powered by LeProfi</h4>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">A <b>easy</b> and <b>safe</b> way of downloading necessary server files.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a role="button" href="download.php" class="btn btn-primary btn-lg px-4 gap-3"><i class="fa-solid fa-download fa-beat"></i> Download</a>
        <a role="button" href="https://github.com/LeProfi/MCMirror" class="btn btn-outline-secondary btn-lg px-4">View <i class="fa-brands fa-github"></i> GitHub</a>
      </div>
    </div>
  </div>

<?php
require("templates/footer.php");
?>