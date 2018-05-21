<!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header quicksand-font">
  <header class="mdl-layout__header dark-bg">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer">
        Welcome back, <?php echo $login['username']; ?>! | <a href="<?php echo base_url(); ?>">View Site</a>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon red-bg"
               for="fixed-header-drawer-exp">
               <a href="<?php echo base_url()."admin/logout"; ?>">
          <i class="material-icons red-bg">power_settings_new</i></a>
        </label>
        <div class="mdl-textfield__expandable-holder">

        </div>
      </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">
      <img src="https://maxcdn.icons8.com/Android_L/PNG/512/Operating_Systems/ubuntu-512.png" width="150px" height="150px">
    </span>
    <nav class="mdl-navigation">

      <a class="mdl-navigation__link" href="<?php echo base_url()."admin" ?>"><i class="material-icons dark-color">dashboard</i> Dashboard</a>
      <a class="mdl-navigation__link" href="<?php echo base_url()."admin/news" ?>"><i class="material-icons dark-color">chrome_reader_mode</i> News</a>
      <a class="mdl-navigation__link" href="<?php echo base_url()."admin/article" ?>"><i class="material-icons dark-color">description</i> Article</a>
      <a class="mdl-navigation__link" href="<?php echo base_url()."admin/portfolio" ?>"><i class="material-icons dark-color">folder</i> Portfolio</a>
      <a class="mdl-navigation__link" href="<?php echo base_url()."admin/gallery" ?>"><i class="material-icons dark-color">photo</i> Gallery</a>
      <a class="mdl-navigation__link" href="<?php echo base_url()."admin/mainContent" ?>"><i class="material-icons dark-color">build</i> Main Content</a><hr>
      <a class="mdl-navigation__link" href="<?php echo base_url()."admin/ucp" ?>"><i class="material-icons dark-color">people</i> User Control Panel</a>
    </nav>
  </div>
