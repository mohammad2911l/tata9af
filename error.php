<?php
if (!isset($_GET['e']) || !array_key_exists($_GET['e'], $errors_num)) {
    header("Location: ./public/index");
    exit;
}

$e = $_GET['e'];
$errors_num = ["403" => "Forbidden", "404" => "Not Found", "405" => "Method Not Allowed", "id" => "ID Not Work",];
$errors_text = ["403" => "This page cannot be accessed", "404" => "This page does not exist", "405" => "An error occurred while trying to access this page", "id" => "This ID no longer works, please request a new ID"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Error: <?= htmlspecialchars($errors_num[$e]) ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="padding-top:70px">
    <?php include('./navbarOut.php'); ?>

    <div class="w-100 d-flex justify-content-center">
      <h1 class="fw-bold"><?= htmlspecialchars($errors_num[$e]) ?>
        <?php if (preg_match('/\d/', $e)) { ?>
          <span class="badge bg-secondary"><?= $e ?></span>
        <?php } ?>
      </h1>
    </div>

    <p class="fw-bold">
      <?= htmlspecialchars($errors_text[$e]) ?>
    </p>

    <a href=".public/index" class="btn btn-primary">Go Back</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>