<?php include "../config.php"; ?>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Roboto;
      background-repeat: no-repeat;
      background-size: cover;
      background: linear-gradient(120deg, #ffffff, #00cc76, #73ffca);
      height: 100vh;
      overflow: hidden;
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
      background-color: #00cc76;
      padding: 10px 0;
    }
    .menu a:hover {
      background-color: #73ffca;
    }
    .icon {
      font-size: 27px;
    }
    .green-leaf-icon {
      color: green;
    }
    /* Estilos para as barras de progresso */
    .progress-bars {
      display: flex;
      flex-direction: column;
    }

    .progress-bar {
      margin: 10px 0;
      width: 100%;
      display: flex;
      align-items: center;
    }

    .label {
      flex: 1;
      margin-right: 10px;
    }

    .bar {
      flex: 5;
      height: 20px;
      background-color: #00cc76;
      transition: width 0.5s;
    }

    .bar:hover {
      width: calc(var(--data-width) + 10%);
    }
  </style>
</head>
<body>
  <div class="menu">
    <a href="#proposta" class="green-leaf-icon"><i class="fas fa-leaf"></i> Renova</a>
    <a href="#proposta">Proposta</a>
    <a href="#produto">Produto</a>
    <a href="#valor">Valor</a>
    <a href="#cadastro">Cadastro</a>
    <a href="adm.php" class="icon"><i class="fas fa-user"></i></a>
  </div>

  <!-- Seção de Proposta -->
  <section id="proposta">
    <h1> Proposta</h1>
    <p>Plataforma em que você é o principal agente do processo de reciclagem do lixo. Deposite latinhas em nossas lixeiras inteligentes e receba um valor pelo lixo reciclado.</p>
  </section>

  <!-- Seção de Produto -->
  <section id="produto">
    <h2>Produto</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </section>

  <!-- Seção de Valor -->
  <section id="valor">
    <h2>Valor</h2>
    <div class="progress-bars">
      <div class="progress-bar">
        <span class="label">AWS</span>
        <div class="bar" style="width: 50%;" data-width="50"></div>
      </div>
      <div class="progress-bar">
        <span class="label">Lixeira</span>
        <div class="bar" style="width: 80%;" data-width="80"></div>
      </div>
      <div class "progress-bar">
        <span class="label">Manutenção</span>
        <div class="bar" style="width: 20%;" data-width="20"></div>
      </div>
      <div class="progress-bar">
        <span class="label">Marketing</span>
        <div class="bar" style="width: 40%;" data-width="40"></div>
      </div>
    </div>
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
            <input type="text" name="CELLPHONE" maxlength="90" />
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