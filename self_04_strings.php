<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Результат роботи з рядками</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="page">
    <h1>Результат роботи з рядками</h1>

    <?php
      $e = htmlspecialchars($_POST["e"] ?? "", ENT_QUOTES, "UTF-8");
      $f = htmlspecialchars($_POST["f"] ?? "", ENT_QUOTES, "UTF-8");
    ?>

    <table>
      <tr>
        <th>Дія</th>
        <th>Результат</th>
      </tr>
      <tr>
        <td>Вивести першу, потім другу</td>
        <td><?php echo $e . " " . $f; ?></td>
      </tr>
      <tr>
        <td>Вивести другу, потім першу</td>
        <td><?php echo $f . " " . $e; ?></td>
      </tr>
    </table>

    <p><a href="self_04_strings_form.html">Повернутися до форми</a></p>
  </main>
</body>
</html>