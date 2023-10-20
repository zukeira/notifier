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
      height: 100%;
      overflow: auto; /* Adicionando rolagem vertical */
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
      padding: 10px 0;
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
    width: 29vw;
    background: white;
    border-radius: 10px;
  }
  
  .center h1{
    text-align: center;
    padding: 0 0 20px 0;
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
  
  input[type="Submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    border-radius: 25px;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    background-color: #00cc76;
    color: #ffffff;
  }
  
  input[type="Submit"]:hover{
    background: #73ffca;
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

  </style>
  <style>
    @media screen and (max-width: 768px) {
      .menu {
        flex-direction: column;
        align-items: center;
      }
      .menu a {
        margin: 5px;
      }
      .icon {
        margin-top: 10px;
      }
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

<br>
<br>
<br>

  <!-- Seção de Cadastro -->
  <section id="cadastro">
    <form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
      <div class="container">
        <div class="center">
            <h1>Área de Cadastro</h1>
            <form method="POST" action="">
                <div class="txt_field">
                    <input type="text" name="name" required>
                    <span></span>
                    <label>Nome</label>
                </div>
                <div class="txt_field">
                  <input type="text" name="cpassword" required>
                  <span></span>
                  <label>Celular</label>
              </div>
                <input type="submit" value="Cadastrar" />
                <div class="signup_link">
                    Possui conta? <a href="loginForm.php">Entre aqui</a>
                </div>
            </form>
        </div>
      </div>
            
          </td>
        </tr>
      </table>
    </form>
  </section>
</body>
</html>