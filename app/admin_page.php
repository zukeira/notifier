<?php
include "../config.php";
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);
?>

<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #f0f0f0;
    }
    h1 {
      color: #333;
    }
    table {
      border-collapse: collapse;
      margin: 0 auto;
    }
    table, th, td {
      border: 2px solid #333;
    }
    th, td {
      padding: 10px;
    }
    th {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
  <h1>Contact List (Admin)</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Cellphone</th>
    </tr>
    <?php
    $result = mysqli_query($connection, "SELECT * FROM USERS");

    while ($query_data = mysqli_fetch_row($result)) {
      echo "<tr>";
      echo "<td align=\"center\">", $query_data[0], "</td>",
      "<td>", $query_data[1], "</td>",
      "<td>", $query_data[2], "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>