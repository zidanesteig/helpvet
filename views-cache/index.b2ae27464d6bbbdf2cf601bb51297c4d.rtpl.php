<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="android-content mdl-layout__content">
  <a name="top"></a>
  <div class="android-be-together-section mdl-typography--text-center">
  <a href="#screens">
      </button>
    </a>
  </div>
  <div class="android-wear-section">
    <div class="android-wear-band">
      <div class="android-wear-band-text">
        <div class="mdl-typography--display-2 mdl-typography--font-thin">Dúvidas/Sugestões</div>
        <p class="mdl-typography--headline mdl-typography--font-thin">
          Use a aba contato para qualquer dúvida ou sugestão para nossa StartUp!
        </p>
        <p>
          <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
            <a href="https://www.appstore.com/">App Store</a> e <a href="https://play.google.com/store?hl=pt">Google Play</a> (em breve)
          </a>
        </p>
      </div>
    </div>
  </div>
  <br>
<div class="android-screen-section mdl-typography--text-center">
    <a name="screens"></a>
    <div class="mdl-typography--display-1-color-contrast">SIGA-NOS NAS REDES SOCIAIS E ACOMPANHE NOSSAS ATUALIZAÇÕES! </div>
    <div class="android-screens">
      <div class="android-wear android-screen">
        <a class="android-image-link" href="https://facebook.com/helpvet.br/" target="_blank">
          <img class="android-screen-image" src="views/images/fb.png">
        </a>
        <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href=""></a>
      </div>
      <div class="android-phone android-screen">
        <a class="android-image-link" href="https://twitter.com/HelpVet_br" target="_blank">
          <img class="android-screen-image" src="views/images/twitter.png">
        </a>
        <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href=""></a>
      </div>
      <div class="android-tablet android-screen">
        <a class="android-image-link" href="https://www.instagram.com/helpvet_br/" target="_blank">
          <img class="android-screen-image" src="views/images/instagram.png">
        </a>
        <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href=""></a>
      </div>
    </div>
  </div>
  <br>
<div class= "formulario-duvidas">
<h4>Dúvidas/sugestões:</h4>
<form action="btenvia.php" method="POST">
<p style="font-size: 15px;">
Nome:<br />
<input type="text" required maxlength="20" size="30" name="nome" style="border: 2px solid #fff; border-bottom: 1px; padding: 1px 2px; font-family: sans-serif;">
</p>
<p style="font-size: 15px; ">
E-mail:<br />
<input type="text" required maxlength="30" size="30" name="email" style="border: 2px solid #fff; border-bottom: 1px; padding: 1px 2px; font-family: sans-serif;">
</p>
<p style="font-size: 15px;">
Telefone:<br />
<input type="text"  maxlength="12" size="30" name="telefone" style="border: 2px solid #fff; border-bottom: 1px; padding: 1px 2px; font-family: sans-serif;">
</p>
<p style="font-size: 15px;">
Mensagem:<br />
<textarea name="mensagem" rows="5" cols="34" style="border: 2px solid #fff; border-bottom: 1px; font-family: sans-serif;"></textarea>
</p>
<p>
    <input type="submit" name="BTEnvia" value="ENVIAR" style="border: 2px solid #fff; font-family: 'Montserrat', sans-serif; font-weight: 600; FONT-SIZE: 11PX; background-color: #fff;">
<input type="reset" name="BTLimpa" value="LIMPAR" style="border: 2px solid #fff; font-family: 'Montserrat', sans-serif; font-weight: 600; FONT-SIZE: 11PX; background-color: #fff;">
  </p>
  </div>
