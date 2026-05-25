<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обчислення методом GET</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="page">
    <h1>Математичні обчислення методом GET</h1>

    <form class="panel" action="self_02_get_math.php" method="get">
      <label for="a">Змінна a</label>
      <input type="number" id="a" name="a" value="<?php echo htmlspecialchars($_GET['a'] ?? '12', ENT_QUOTES, 'UTF-8'); ?>">

      <label for="b">Змінна b</label>
      <input type="number" id="b" name="b" value="<?php echo htmlspecialchars($_GET['b'] ?? '4', ENT_QUOTES, 'UTF-8'); ?>">

      <input type="submit" value="Обчислити">
    </form>

    <?php
      if (isset($_GET["a"]) && isset($_GET["b"])) {
        $a = (int) $_GET["a"];
        $b = (int) $_GET["b"];
        echo "<table>";
        echo "<tr><th>Дія</th><th>Результат</th></tr>";
        echo "<tr><td>Сума</td><td>" . ($a + $b) . "</td></tr>";
        echo "<tr><td>Добуток</td><td>" . ($a * $b) . "</td></tr>";
        echo "<tr><td>Різниця</td><td>" . ($a - $b) . "</td></tr>";
        echo "<tr><td>Частка</td><td>" . ($b != 0 ? ($a / $b) : "ділення на нуль неможливе") . "</td></tr>";
        echo "</table>";
      }
    ?>

    <p><a href="index.php">Назад на головну</a></p>
  </main>
</body>
</html>