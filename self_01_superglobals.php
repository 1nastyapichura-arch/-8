<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Суперглобальні змінні PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="page">
    <h1>Суперглобальні змінні PHP</h1>

    <table>
      <tr>
        <th>Змінна</th>
        <th>Значення</th>
        <th>Пояснення</th>
      </tr>
      <?php
        $rows = [
          "PHP_SELF" => "Ім'я поточного PHP-файлу",
          "SERVER_NAME" => "Ім'я сервера",
          "HTTP_HOST" => "Хост запиту",
          "HTTP_USER_AGENT" => "Ідентифікаційний рядок браузера",
          "REMOTE_ADDR" => "IP-адреса клієнта",
          "REQUEST_METHOD" => "Метод запиту",
          "SCRIPT_NAME" => "Шлях до поточного скрипта",
          "QUERY_STRING" => "Рядок параметрів після знака ?"
        ];

        foreach ($rows as $key => $description) {
          $value = $_SERVER[$key] ?? "";
          echo "<tr>";
          echo "<td>\$_SERVER['" . htmlspecialchars($key, ENT_QUOTES, "UTF-8") . "']</td>";
          echo "<td>" . htmlspecialchars($value, ENT_QUOTES, "UTF-8") . "</td>";
          echo "<td>" . htmlspecialchars($description, ENT_QUOTES, "UTF-8") . "</td>";
          echo "</tr>";
        }
      ?>
    </table>

    <p><a href="index.php">Назад на головну</a></p>
  </main>
</body>
</html>