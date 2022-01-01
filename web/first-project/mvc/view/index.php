<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>

  <link href="<?php echo BASE_URL . "/public/css/style.css" ?>" rel="stylesheet" type="text/css">
  <title>Website nghiên cứu khoa học</title>
</head>

<body>

  <?php
    require_once BASE_APP."/view/common/header.php"; ?>
  <div id="main" class="container my-5">
    <?php require_once BASE_APP."/view/pages/".$page.".php"; ?>
  </div>
  <?php 
    require_once BASE_APP."/view/common/footer.php";
?>
  <!-- MDB -->
  <script src="https://cdn.tiny.cloud/1/1ja7u22xkka3uxwnw8v6qvdqja2lyjmueifplcb03n8pndgc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
  <script src="<?php echo BASE_URL . "/public/js/main.js" ?>"></script>
</body>

</html>