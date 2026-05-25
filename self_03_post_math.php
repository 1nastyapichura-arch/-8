<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Результат POST</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="page">
    <h1>Результати математичних обчислень</h1>

    <?php
      $c = (int) ($_POST["c"] ?? 0);
      $d = (int) ($_POST["d"] ?? 0);
    ?>

    <table>
      <tr><th>Дія</th><th>Результат</th></tr>
      <tr><td>Сума</td><td><?php echo $c + $d; ?></td></tr>
      <tr><td>Добуток</td><td><?php echo $c * $d; ?></td></tr>
      <tr><td>Різниця</td><td><?php echo $c - $d; ?></td></tr>
      <tr><td>Частка</td><td><?php echo $d != 0 ? $c / $d : "ділення на нуль неможливе"; ?></td></tr>
    </table>

    <p><a href="self_03_post_form.html">Повернутися до форми</a></p>
  </main>
</body>
</html>