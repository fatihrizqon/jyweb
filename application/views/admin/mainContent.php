<main class="mdl-layout__content super-light-dark-bg">
  <div class="page-content">
    <div class="mdl-grid row" align="center">
      <div class="mdl-cell mdl-cell--12-col table-responsive">
        <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="<?php echo base_url()."admin/addMainContentPage/" ?>"><i class="material-icons">add</i></a>
      <table>
      <?php
      $i = 0;
      foreach ($main as $main) {
        $i++;
        if ($i%2==0) {
      ?>
      <tr class="spaceUnder fade-in">
        <td>
          <img src="<?php echo base_url()."uploads/images/content/$main->images"?>" width="400px">
        </td>
        <td>
          <h5><?php echo $main->title; ?></h5>
          <hr>
          <p style="font-size: 11pt;"><?php echo $main->text;?></p>
        </td>
      </tr>
      <tr>
        <td>
          <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="<?php echo base_url()."admin/editMainContentPage/" ?>"><i class="material-icons">edit</i></a>
          <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="<?php echo base_url()."admin/deleteMainContent/" ?>"><i class="material-icons">delete</i></a>
        </td>
      </tr>
      <?php
        }else{
      ?>
      <tr class="spaceUnder fade-in">
        <td>
          <h5><?php echo $main->title; ?></h5>
          <hr>
          <p style="font-size: 11pt;"><?php echo $main->text;?></p>
        </td>
        <td>
          <img src="<?php echo base_url()."uploads/images/content/$main->images"?>" width="400px">
        </td>
      </tr>
      <tr>
        <td>
          <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="<?php echo base_url()."admin/editMainContentPage/" ?>"><i class="material-icons">edit</i></a>
          <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="<?php echo base_url()."admin/deleteMainContent/" ?>"><i class="material-icons">delete</i></a>
        </td>
      </tr>
      <?php
        }
      }
      ?>
      </table>
      </div>
    </div>
  </div>
</main>
</div>
