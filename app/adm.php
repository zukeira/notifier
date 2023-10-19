<?php include "../config.php"; ?>

<html>
<head> 
<body>

<?php

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
$database = mysqli_select_db($connection, DB_DATABASE);

?>
  <!-- Display table data -->
  <br>
  <h1>Contact List</h1>
<table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>CPF</th>
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
</head>
</html>
