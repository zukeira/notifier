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

    .center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 35%;
    background: white;
    border-radius: 10px;
    border: 1px solid #182119;
    box-shadow: 10px 10px 0px 0px rgba(0,204,119,1);
    padding: 20px;
  }
  
  .center h1{
    text-align: center;
    padding: 5 5 10px 0 0;
    border-bottom: 1px solid silver;
  }

  .footer h1{
    width: 100%;
    height: 100px;
    position: absolute;
    bottom: 0;
    text-align: center;
  }
  
  .center form{
    padding: 0 40px;
    box-sizing: border-box;
  }
  
  form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
  }
  
  .txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
  }
  
  .txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
  }
  
  .txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0px;
    height: 2px;
    background: #00cc76;
    transition: .5s;
  }
  
  .txt_field input:focus ~ label,
  .txt_field input:valid ~ label{
    top: -5px;
    color: #00cc76;
  }
  
  .txt_field input:focus ~ span::before,
  .txt_field input:Valid ~ span::before{
    width: 100%;
  }
  
  .pass{
    margin: -5px 0 20px 5px;
    color: #e0f9ef;
    cursor: pointer;
  }
  
  .pass:hover{
    text-decoration: underline;
  }
  
  input[type="Submit"] {
  display: block; 
  margin: 0 auto; 
  width: 70%;
  height: 50px;
  border: 1px solid;
  border-radius: 25px;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;
  background-color: #00cc76;
  transition: .5s;
  color: #ffffff;
}
  
  input[type="Submit"]:hover{
    background: #026b3f;
    color: #e9f4fb;
    transition: .5s;
  }
  
  .signup_link{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
  }
  
  .signup_link a{
    color: #00cc76;
    text-decoration: none;
  }
  
  .signup_link a:hover{
    text-decoration: underline;
  }
  
  .HomeAbout{
    width: 100vw;
    height: 25vh;
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
  <style>
    @media screen and (max-width: 768px) {
      .menu {
        flex-direction: column;
        align-items: center;
      }
      .menu a {
        margin: 5%;
      }
      .icon {
        margin-top: 10%;
      }
    }
  </style>


</head>

<body>
  <div class="menu">
    <a href="#proposta" class="green-leaf-icon"><i class="fas fa-leaf"></i> Renova</a>
    <a href="#proposta">Sobre</a>
    <a href="#produto">Nosso Produto</a>
    <a href="#valor">Valores</a>
    <a href="#cadastro">Cadastro</a>
    <a href="#cadastro">Contato</a>
    <a href="adm.php" class="icon"><i class="fas fa-user"></i></a>
  </div>

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

  if (strlen($user_name) || strlen($user_cellphone) || strlen($user_function))  {
    AddUser($connection, $user_name, $user_cellphone);
  }
?>

  <!-- Seção de Cadastro -->
  <section id="cadastro">
    <div class= "container">
      <div class="center">
        <h1>Área de Cadastro</h1>
        <form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
          <table border="0">
            <div class="txt_field">
              <input type="text" name="NAME" required>
              <span></span>
              <label>Nome completo
              </label>
            </div>
            <div class="txt_field">
              <input type="text" name="CELLPHONE" required>
              <span></span>
              <label>CPF</label>
            </div>
            <input type="submit" value="Cadastrar" />
          </table>
        </form>
      </div>
    </div>  
  </section>

  <div class="footer">
    <h2>Grupo InnovaTech. Todos os direitos reservados.</h2>
  </div>

  <?php

/* Add an User to the table. */
function AddUser($connection, $name, $cellphone) {
   $n = mysqli_real_escape_string($connection, $name);
   $c = mysqli_real_escape_string($connection, $cellphone);

   $query = "INSERT INTO USERS (NAME, CELLPHONE) VALUES ('$n', '$c');";

   if(!mysqli_query($connection, $query)) echo("<p>Error adding employee data.</p>");
}

/* Check whether the table exists and, if not, create it. */
function VerifyUsersTable($connection, $dbName) {
  if(!TableExists("USERS", $connection, $dbName))
  {
     $query = "CREATE TABLE USERS (
         ID int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         NAME VARCHAR(45),
         CELLPHONE VARCHAR(90)
       )";

     if(!mysqli_query($connection, $query)) echo("<p>Error creating table.</p>");
  }
}

/* Check for the existence of a table. */
function TableExists($tableName, $connection, $dbName) {
  $t = mysqli_real_escape_string($connection, $tableName);
  $d = mysqli_real_escape_string($connection, $dbName);

  $checktable = mysqli_query($connection,
      "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_NAME = '$t' AND TABLE_SCHEMA = '$d'");

  if(mysqli_num_rows($checktable) > 0) return true;

  return false;
}
?>

</body>
</html>

