  <!-- Display table data -->
  <br>
  <h1>Contact List</h1>
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