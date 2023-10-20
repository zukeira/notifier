<?php include "../config.php"; ?>
<html>
<link rel="stylesheet" href="renova.css" />
<head>

</head>
<body>
  <h1>Bem vindo a Renova</h1>
  <div class="menu">
    <a href="#proposta">Proposta</a>
    <a href="#produto">Produto</a>
    <a href="#valor">Valor</a>
    <a href="#cadastro">Cadastro</a>
  </div>

  <!-- Seção de Proposta -->
  <section id="proposta">
    <h2>Proposta</h2>
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

  <a href="adm.php">Administrador</a>
</body>
</html>