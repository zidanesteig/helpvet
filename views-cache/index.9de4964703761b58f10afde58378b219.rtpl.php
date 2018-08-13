<?php if(!class_exists('Rain\Tpl')){exit;}?>    <main class="mdc-toolbar-fixed-adjust"  style="background-color:#fff">
      <section class="mdc-tab-bar">
        <ul class="demo-list-three mdl-list">
          <li class="mdl-list__item mdl-list__item--three-line">
            <img src="vet.png" width="5%">
            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
            <span class="mdl-list__item-primary-content">

              <span><a style="text-decoration:none; font-weight: bolder; color: #000000" href="#"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></span>
              <br>
              <span class="mdl-list__item-text-body">
                 Bryan Cranston played the role of Walter in Breaking Bad. He is also known
                for playing Hal in Malcom in the Middle.
              </span>
            </span>
            <?php } ?>
            <span class="mdl-list__item-secondary-content">
              <a class="star" style="text-decoration:none" href="#"><i class="material-icons">star_rate</i><p style="text-decoration:none; font-weight: bolder; color: #000000">3,5</p></a>
            </span>
          </li>
        </ul>
      </section>
    </main>
