<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login | Registrar</title>
    <link rel="shortcut icon" href="favicon.png">
    <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-purple.min.css" />
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="/views/login_cliente/styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    a:link
    {
    text-decoration:none;
    }
    .img-responsive {
    max-width: 100%;
    height: auto;
    display: block;
    }
    body
    {
    	background: #f5f5f5;
    }

    h5
    {
    	font-weight: 400;
    }

    .tabs .indicator
    {
    	background-color: #e0f2f1;
    	height: 60px;
    	opacity: 0.3;
    }

    .form-container
    {
    	padding: 40px;
    	padding-top: 10px;
    }

    .confirmation-tabs-btn
    {
    	position: absolute;
    }
    </style>
  </head>
  <body style="min-height:0%; text-align: center;">
    <div class="container white z-depth-2">
	<ul class="tabs teal">
		<li class="tab col s3"><a class="white-text active" href="#login">Entrar</a></li>
		<li class="tab col s3"><a class="white-text" href="#register">Registrar</a></li>
	</ul>
    	<div id="login" class="col s12">
    		<form class="col s12" name="entrar" action="/login_cliente/login" method="post">
    			<div class="form-container">
    				<h3 class="teal-text">Cliente</h3>
            <br>
    				<div class="row">
    					<div class="input-field col s12">
    						<input name="usuario" type="text" id="usuario" /><br />
    						<label for="user">Usuário</label>
    					</div>
    				</div>
    				<div class="row">
    					<div class="input-field col s12">
    						<input name="senha" type="password" id="senha" /><br /><br />
    						<label for="senha">Senha</label>
    					</div>
    				</div>
    				<center>
    					<button class="btn waves-effect waves-light teal" type="submit" name="submit">Entrar</button>
    					<br>
              <br>
    					<a class="xxt" href="formulario_senha_perdida.html">Perdeu a senha?</a>
              <br>
              <br>
              <a class="voltar" href="http://helpvet.com.br">Voltar</a>

              </style>
    				</center>
    			</div>
    		</form>
    	</div>
    	<div id="register" class="col s12">
        <script>

          function validarSenha(){


               if(document.getElementById('nome').value == '')

      			{

      				alert('Por favor, preencha os campos obrigatórios.');

      				document.getElementById('nome').focus();

      				return false;

      			}



            if(document.getElementById('sobrenome').value == '')

      			{

      				alert('Por favor, preencha os campos obrigatórios.');

      				document.getElementById('sobrenome').focus();

      				return false;

      			}

            if(document.getElementById('email').value == '' || document.getElementById('email').value != document.getElementById('email-confirm').value)

      			{

      				alert('E-mails não conferem, por favor, redigite.');

      				document.getElementById('email').focus();

      				return false;

      			}

                document.FormSenha.submit();

             }

          }

        </script>
    		<form class="col s12" name="cadastro" action="cadastracliente.php" method="post" onsubmit="return validarSenha();">
    			<div class="form-container">
    				<h3 class="teal-text">Bem-vindo</h3>
            <br>
            <div class="row">
    					<div class="input-field col s6">
    						<input name="nome" type="text" id="nome" value="&lt;?php echo $nome; ?&gt;" /><br />
    						<label for="nome">Nome</label>
    					</div>
    					<div class="input-field col s6">
    						<input name="sobrenome" type="text" id="sobrenome" value="&lt;?php echo $sobrenome; ?&gt;" /><br />
    						<label for="sobrenome">Sobrenome</label>
    					</div>
    				</div>
            <div class="row">
              <div class="input-field col s12">
             <input name="usuario" type="text" id="usuario" value="&lt;?php echo $usuario; ?&gt;"><br>
                <label for="usuario">Nome de usuário</label>
              </div>
            </div>
    				<div class="row">
    					<div class="input-field col s12">
    						<input name="email" type="email" id="email" value="&lt;?php echo $email; ?&gt;" /><br />
    						<label for="email">E-mail</label>
    					</div>
    				</div>
    				<div class="row">
    					<div class="input-field col s12">
    						<input id="email-confirm" type="email" class="validate">
    						<label for="email-confirm">Confirmação de E-mail</label>
    					</div>
    				</div>
    				<center>
            <button class="btn waves-effect waves-light teal" type="submit" name="submit">Cadastrar</button>
    				</center>
    			</div>
    		</form>
    	</div>
    </div>
  </body>
<br>
<br>
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.js"></script>
  <script>mdc.autoInit()</script>
</html>
