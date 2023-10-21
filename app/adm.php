<?php include "../config.php"; ?>

<html>
  <head> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Avantgarde;
      background-repeat: no-repeat;
      background-size: cover;
      background: white;
      height: 100%;
      overflow: auto;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h1 {
      text-align: center;
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
    a {
      font-size: 20px;
      background-color: transparent;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: color 0.3s;
    }
    .menu {
      display: flex;
      justify-content: space-between;
      background-color: #00cc76;
    }
    .menu a{
      height: 4.5vh;
      text-align: center;
      display: inline-block;
    }
    .menu a:hover {
      color: #73ffca;
    }
    .icon {
      font-size: 27px;
    }
    .green-leaf-icon {
      color: green;
    }
    .footer {
  width: 100%;
  height: 100px;
  position: absolute;
  bottom: 0;
  text-align: center;
  background-color: #00cc76;
  color: #fff;
}
  
  </style>
<body>

  <div class="menu">
    <a href="#proposta" class="green-leaf-icon"><i class="fas fa-leaf"></i> Renova</a>
    <a href="#proposta">Sobre</a>
    <a href="#produto">Nosso Produto</a>
    <a href="#valor">Valores</a>
    <a href="index.php">Cadastro</a>
    <a href="#cadastro">Contato</a>
    <a href="adm.php" class="icon"><i class="fas fa-user"></i></a>
  </div>
      
<?php
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
  $database = mysqli_select_db($connection, DB_DATABASE);

?>
  <!-- Display table data -->
<br>
  <h1>Lista de Usuários Renova</h1>
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

<?php

  mysqli_free_result($result);
  mysqli_close($connection);

?>

<div class="footer">
  <h2>Grupo InnovaTech. Todos os direitos reservados.</h2>
</div>
</body>
</head>
</html>
