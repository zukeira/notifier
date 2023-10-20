<?php include "../config.php"; ?>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    a {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      text-decoration: none;
    }
    .menu {
      display: flex;
      justify-content: space-between;
      background-color: #333;
      padding: 10px 0;
    }
    .menu a:hover {
      background-color: #444;
    }
    .icon {
      font-size: 24px;
    }
    .green-leaf-icon {
      color: green;
    }
  </style>
</head>
<body>
  <div class="menu">
    <a href="#proposta" class="green-leaf-icon"><i class="fas fa-leaf"></i> Proposta</a>
    <a href="#produto">Produto</a>
    <a href="#valor">Valor</a>
    <a href="#cadastro">Cadastro</a>
    <a href="adm.php" class="icon"><i class="fas fa-user"></i> Administrador</a>
  </div>

  <!-- Seção de Proposta -->
  <section id="proposta">
    <h1><i class="fas fa-leaf"></i> Proposta</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </section>

  <!-- Seção de Produto -->
  <section id="produto">
    <h2>Produto</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </section>

  <!-- Seção de Valor -->
  <section id="valor">
    <h2>Valor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </section>

  <!-- Seção de Cadastro -->
  <section id="cadastro">
    <h2>Cadastro</h2>
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
            <input type="text" name "CELLPHONE" maxlength="90" />
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="Cadastrar" />
          </td>
        </tr>
      </table>
    </form>
  </section>
</body>
</html>