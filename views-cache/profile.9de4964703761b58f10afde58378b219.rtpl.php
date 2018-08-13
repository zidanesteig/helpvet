<?php if(!class_exists('Rain\Tpl')){exit;}?><?php if( $profileMsg != '' ){ ?>
<div class="alert alert-success">
    <?php echo htmlspecialchars( $profileMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
</div>
<?php } ?>
<?php if( $profileError != '' ){ ?>
<div class="alert alert-danger">
    <?php echo htmlspecialchars( $profileError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
</div>
<?php } ?>
  <main class="mdc-toolbar-fixed-adjust"  style="background-color:#fff">
      <section class="mdc-tab-bar">
        <form name="cadanimal" action="/login_cliente/profile" method="post">
          <br>
          <br>
          <br>
          <br>
          <input type="hidden" name="usuario_id" value="&lt;?php print $usuarios['usuario_id']; ?&gt;">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample1" name="desperson" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            <label class="mdl-textfield__label" for="sample1">Nome Completo</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample2" name="nrphone" value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            <label class="mdl-textfield__label" for="sample2">Telefone</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="email" id="sample3" name="desemail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
          <label class="mdl-textfield__label" for="sample3">E-mail</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield">
            <input type="text" value="<?php echo htmlspecialchars( $user["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="00000-000" id="billing_cep_1" name="zipcode" class="mdl-textfield__input">
            <label class="mdl-textfield__label" for="billing_cep_1">Cep <abbr title="required" class="required">*</abbr></label>
            <input type="submit" value="Atualizar CEP" id="place_order" class="button alt" formaction="/login_cliente/profile" formmethod="get">
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield">
              <label class="mdl-textfield__label" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
              </label>
              <input type="text" value="<?php echo htmlspecialchars( $user["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, número e bairro" id="billing_address_1" name="desaddress" class="mdl-textfield__input">
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield">
              <label class="mdl-textfield__label" for="billing_number_1">Número <abbr title="required" class="required">*</abbr>
              </label>
              <input type="text" value="<?php echo htmlspecialchars( $user["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desnumber" class="mdl-textfield__input">
          </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input type="text" value="<?php echo htmlspecialchars( $user["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Complemento (opcional)" id="billing_address_2" name="descomplement" class="mdl-textfield__input">
            <label class="mdl-textfield__label" for="billing_address_2">Número </label>
              </div>
            <div class="mdl-textfield mdl-js-textfield">
            <label class="mdl-textfield__label" for="billing_district">Bairro <abbr title="required" class="required">*</abbr>
            </label>
            <input type="text" value="<?php echo htmlspecialchars( $user["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_district" name="desdistrict" class="mdl-textfield__input">
          </div>
            <div class="mdl-textfield mdl-js-textfield">
            <label class="mdl-textfield__label" for="billing_city">Cidade <abbr title="required" class="required">*</abbr>
            </label>
            <input type="text" value="<?php echo htmlspecialchars( $user["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_city" name="descity" class="mdl-textfield__input">
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
            <label class="mdl-textfield__label" for="billing_state">Estado</label>
            <input type="text" id="billing_state" name="desstate" placeholder="Estado" value="<?php echo htmlspecialchars( $user["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="mdl-textfield__input">
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <label class="mdl-textfield__label" for="billing_state">País</label>
            <input type="text" id="billing_state" name="descountry" placeholder="País" value="<?php echo htmlspecialchars( $user["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="mdl-textfield__input">
          </div>
          <br>
          <br>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
            Gravar
          </button>
        </form>
      </section>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </main>
