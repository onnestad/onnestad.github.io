<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="jc/style.css" rel="stylesheet">
  <title>! Flexbox Grid sida </title>
</head>

<body>
  <header>
    <h1 class="gridHead">Onnestad IT-teknik - Links</h1>
  </header>

  <?php include "menu.php"; ?>

  <section>
    <h1 class="gridHead">Grid Template Areas Content</h1>
    <div class="page">
      <span class="logo"> logo </span>
      <span class="drop">
        <div>drop</div>
        <?php include "dropMenu.php" ?>
        <div>drop</div>
      </span>
      <span class="top">
        <div>top </div>
        <?php include "dropMenu.php" ?>
        <div>top </div>
        <div>top </div>
      </span>
      <span class="left"> left </span>
      <span class="main"> main </span>
      <footer class="footer"> footer </footer>
    </div>
  </section>

  <?php include "footer.php"; ?>

</body>
</html>

