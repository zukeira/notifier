<?php include "../config.php"; ?>
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
    input[type="text"] {
      padding: 5px;
      width: 100%;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Bem vindo a Renova!</h1>

  <?php
  /* Connect to MySQL and select the database. */
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

  $database = mysqli_select_db($connection, DB_DATABASE);

  /* Ensure that the USERS table exists. */
  VerifyUsersTable($connection, DB_DATABASE);

  /* If input fields are populated, add a row to the USERS table. */
  $user_name = htmlentities($_POST['NAME']);
  $user_cellphone = htmlentities($_POST['CELLPHONE']);

  if (strlen($user_name) || strlen($user_cellphone)) {
    AddUser($connection, $user_name, $user_cellphone);
  }
  ?>

  <!-- Input form -->
  <form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
    <table>
      <tr>
        <td><b>Nome</b></td>
        <td><b>CPF</b></td>
      </tr>
      <tr>
        <td>
          <input type="text" name="NAME" maxlength="45" />
        </td>
        <td>
          <input type="text" name="CELLPHONE" maxlength="90" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="Add" />
        </td>
      </tr>
    </table>
  </form>

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
    # $result = mysqli_query($connection, "SELECT * FROM USERS");

    while ($query_data = mysqli_fetch_row($result)) {
      echo "<tr>";
      echo "<td align=\"center\">", $query_data[0], "</td>",
      "<td>", $query_data[1], "</td>",
      "<td>", $query_data[2], "</td>";
      echo "</tr>";
    }
    ?>
  </table>

  <!-- Clean up. -->
  <?php
  mysqli_free_result($result);
  mysqli_close($connection);
  ?>

</body>
</html>
<?php
/* Add a User to the table. */
function AddUser($connection, $name, $cellphone) {
  $n = mysqli_real_escape_string($connection, $name);
  $c = mysqli_real_escape_string($connection, $cellphone);

  $query = "INSERT INTO USERS (NAME, CELLPHONE) VALUES ('$n', '$c');";

  if (!mysqli_query($connection, $query)) echo ("<p>Error adding employee data.</p>");
}

/* Check whether the table exists and, if not, create it. */
function VerifyUsersTable($connection, $dbName) {
  if (!TableExists("USERS", $connection, $dbName)) {
    $query = "CREATE TABLE USERS (
         ID int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         NAME VARCHAR(45),
         CELLPHONE VARCHAR(90)
       )";

    if (!mysqli_query($connection, $query)) echo ("<p>Error creating table.</p>");
  }
}

/* Check for the existence of a table. */
function TableExists($tableName, $connection, $dbName) {
  $t = mysqli_real_escape_string($connection, $tableName);
  $d = mysqli_real_escape_string($connection, $dbName);

  $checktable = mysqli_query($connection,
    "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_NAME = '$t' AND TABLE_SCHEMA = '$d'");

  if (mysqli_num_rows($checktable) > 0) return true;

  return false;
}
?>
