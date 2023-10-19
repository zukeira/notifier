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
  <h1>Bem vindo a Renova</h1>

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
        <td><b>Name</b></td>
        <td><b>Cellphone</b></td>
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

  <?php
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "fiap" && $password === "fiap") {
      // O login do administrador foi bem-sucedido, redirecione para a página da tabela de contatos.
      header("Location: admin_page.php");
      exit();
    }
  }
  ?>

  <!-- Formulário de login do administrador -->
  <h2>Administrador</h2>
  <form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <input type="submit" value="Login">
  </form>

</body>
</html>